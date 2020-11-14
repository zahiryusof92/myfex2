<?php

namespace App\Http\Controllers;

use App\Models\Amendment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Helpers\Helper;
use App\Models\BrandRights;
use App\Models\Application;

class AmendmentController extends Controller {

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
                $data = Amendment::where('company_id', Auth::user()->company_id)->get();
            } else if (Auth::user()->isConsultant()) {
                $data = Amendment::where('consultant_id', Auth::user()->id)->get();
            } else if (Auth::user()->isPPU()) {
                $data = Amendment::where('status', Amendment::BARU)->get();
            } else if (Auth::user()->isKPP()) {
                $data = Amendment::where('status', Amendment::DISYOR)->get();
            } else if (Auth::user()->isPengarah()) {
                $data = Amendment::where('status', Amendment::DISOKONG)->get();
            } else if (Auth::user()->isPendaftar()) {
                $data = Amendment::where('status', Amendment::DIPERAKUI)->get();
            }

            return DataTables::of($data)
                            ->addColumn('brand', function ($row) {
                                if ($row->status == Amendment::DRAF) {
                                    return '<a href="' . route('amendment.companyInformation', $row->id) . '"><u>' . $row->brandRight->brand->name . '</u></a>';
                                }
                                return '<a href="' . route('amendment.show', $row->id) . '"><u>' . $row->brandRight->brand->name . '</u></a>';
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

        return view('amendment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $approvedApplicationList = Helper::approvedOwnApplicationList();

        return view('amendment.create', compact('approvedApplicationList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $application = Application::findOrFail($request->application_id);
        
        $amendment = new Amendment();
        $amendment->application_id = $application->id;
        $amendment->brandright_id = $application->brandright_id;
        $amendment->company_id = $application->company_id;
        if (Auth::user()->isConsultant()) {
            $amendment->consultant_id = Auth::user()->id;
        }
        $amendment->franchise_type_id = $application->franchise_type_id;
        $success = $amendment->save();

        if ($success) {
            return redirect()->route('amendment.companyInformation', $amendment->id);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amendment  $amendment
     * @return \Illuminate\Http\Response
     */
    public function show(Amendment $amendment) {

        return view('amendment.franchise.show', compact('amendment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amendment  $amendment
     * @return \Illuminate\Http\Response
     */
    public function edit(Amendment $amendment) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amendment  $amendment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amendment $amendment) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amendment  $amendment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amendment $amendment) {
        //
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
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.company_information', compact('amendment'));
    }

    public function capitalEquity($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.capital_equity', compact('amendment'));
    }

    public function businessOperation($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.business_operation', compact('amendment'));
    }

    public function businessInformation($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.business_information', compact('amendment'));
    }

    public function franchiseeObligation($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.franchisee_obligation', compact('amendment'));
    }

    public function franchisorObligation($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.franchisor_obligation', compact('amendment'));
    }

    public function rightsObligation($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.rights_obligation', compact('amendment'));
    }

    public function financeReport($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.finance_report', compact('amendment'));
    }

    public function startingCost($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.starting_cost', compact('amendment'));
    }

    public function filesUpload($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.files_upload', compact('amendment'));
    }

    public function declaration($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.declaration', compact('amendment'));
    }

    public function franchiseeInformation($id) {
        $amendment = Amendment::findOrFail($id);

        return view('amendment.franchise.franchisee_information', compact('amendment'));
    }

}
