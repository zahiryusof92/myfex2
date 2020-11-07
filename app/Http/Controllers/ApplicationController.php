<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Helpers\Helper;
use App\Models\BrandRights;

class ApplicationController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = array();

            if (Auth::user()->isUser()) {
                $data = Application::where('company_id', Auth::user()->company_id)->get();
            } else if (Auth::user()->isConsultant()) {
                $data = Application::where('consultant_id', Auth::user()->id)->get();
            } else if (Auth::user()->isPPU()) {
                $data = Application::where('status', Application::BARU)->get();
            } else if (Auth::user()->isKPP()) {
                $data = Application::where('status', Application::DISYOR)->get();
            } else if (Auth::user()->isPengarah()) {
                $data = Application::where('status', Application::DISOKONG)->get();
            } else if (Auth::user()->isPendaftar()) {
                $data = Application::where('status', Application::DIPERAKUI)->get();
            }

            return DataTables::of($data)
                            ->addColumn('brand', function ($row) {
                                if ($row->status == Application::DRAF) {
                                    return '<a href="' . route('application.companyInformation', $row->id) . '"><u>' . $row->brandRight->brand->name . '</u></a>';
                                }
                                return '<a href="' . route('application.show', $row->id) . '"><u>' . $row->brandRight->brand->name . '</u></a>';
                            })
                            ->editColumn('franchise_type', function ($row) {
                                return Helper::getFranchiseType($row->franchise_type_id);
                            })
                            ->editColumn('status', function ($row) {
                                return $row->getStatus();
                            })
                            ->editColumn('created_at', function($row) {
                                $created_at = '<i>(not set)</i>';
                                if ($row->created_at) {
                                    $created_at = Helper::getFormattedDate($row->created_at);
                                }

                                return $created_at;
                            })
                            ->editColumn('updated_at', function($row) {
                                $updated_at = '<i>(not set)</i>';
                                if ($row->updated_at) {
                                    $updated_at = Helper::getFormattedDate($row->updated_at);
                                }

                                return $updated_at;
                            })
                            ->rawColumns(['brand', 'franchise_type', 'status', 'created_at', 'updated_at'])
                            ->make(true);
        }

        return view('application.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $application = new Application();
        $application->brandright_id = $request->brandright_id;
        $application->company_id = $request->company_id;
        if (Auth::user()->isConsultant()) {
            $application->consultant_id = Auth::user()->id;
        }
        $application->franchise_type_id = $request->franchise_type_id;
        $success = $application->save();

        if ($success) {
            return redirect()->route('application.companyInformation', $application->id);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application) {
        //
    }

    public function franchise() {
        $approvedBrandList = Helper::approvedBrandList();

        return view('application.franchise.create', compact('approvedBrandList'));
    }

    public function franchisee() {
        return view('application.franchisee.create');
    }

    public function getFranchiseType(Request $request) {
        if ($request->ajax()) {
            $brandRights = BrandRights::findOrFail($request->id);
            if ($brandRights) {
                $id = $brandRights->franchise_type_id;
                $name = Helper::getFranchiseType($brandRights->franchise_type_id);

                $result = array(
                    'success' => true,
                    'brandright_id' => $brandRights->id,
                    'franchise_type_id' => '<option value="' . $id . '" selected="selected">' . $name . '</option>',
                );

                return $result;
            }
        }

        $result = array(
            'success' => true,
            'brandRight_id' => '',
            'franchise_type_id' => '<option value="" selected="selected"> - Tiada Maklumat - </option>',
        );

        return $result;
    }

    public function companyInformation($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS || $application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'franchise';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.company_information', compact('application'));
    }

    public function capitalEquity($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS || $application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'franchise';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.capital_equity', compact('application'));
    }

    public function businessOperation($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS || $application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'franchise';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.business_operation', compact('application'));
    }

    public function businessInformation($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS || $application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'franchise';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.business_information', compact('application'));
    }

    public function franchiseeObligation($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS || $application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'franchise';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.franchisee_obligation', compact('application'));
    }

    public function franchisorObligation($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS || $application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'franchise';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.franchisor_obligation', compact('application'));
    }

    public function rightsObligation($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS || $application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'franchise';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.rights_obligation', compact('application'));
    }
    
    public function financeReport($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS || $application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'franchise';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.finance_report', compact('application'));
    }
    
    public function startingCost($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS || $application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'franchise';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.starting_cost', compact('application'));
    }

}
