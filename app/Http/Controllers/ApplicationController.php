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
                            ->addColumn('franchise_type', function ($row) {
                                if ($row->status == Application::DRAF) {
                                    return '<a href="' . route('application.companyInformation', $row->id) . '"><u>' . Helper::getFranchiseType($row->franchise_type_id) . '</u></a>';
                                }
                                return '<a href="' . route('application.show', $row->id) . '"><u>' . Helper::getFranchiseType($row->franchise_type_id) . '</u></a>';
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
                            ->rawColumns(['franchise_type', 'status', 'created_at', 'updated_at'])
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

        return view('application.create');
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

    public function companyInformation($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS) {
            $path = 'franchisor';
        } else if ($application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'master_franchisee';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.company_information', compact('application'));
    }

    public function capitalEquity($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS) {
            $path = 'franchisor';
        } else if ($application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'master_franchisee';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.capital_equity', compact('application'));
    }

    public function businessOperation($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS) {
            $path = 'franchisor';
        } else if ($application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'master_franchisee';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.business_operation', compact('application'));
    }
    
    public function businessInformation($id) {
        $application = Application::findOrFail($id);

        if ($application->franchise_type_id == Helper::PEMBERI_FRANCAIS) {
            $path = 'franchisor';
        } else if ($application->franchise_type_id == Helper::FRANCAISI_INDUK) {
            $path = 'master_franchisee';
        } else {
            $path = 'franchisee';
        }

        return view('application.' . $path . '.business_information', compact('application'));
    }

}
