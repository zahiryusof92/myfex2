<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Helpers\Helper;
use App\Models\BrandRights;

class BrandRightsController extends Controller {

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
                $data = BrandRights::where('company_id', Auth::user()->company_id)->get();
            } else if (Auth::user()->isConsultant()) {
                $data = BrandRights::where('consultant_id', Auth::user()->id)->get();
            } else if (Auth::user()->isPPU()) {
                $data = BrandRights::where('status', BrandRights::BARU)->get();
            } else if (Auth::user()->isKPP()) {
                $data = BrandRights::where('status', BrandRights::DISYOR)->get();
            } else if (Auth::user()->isPengarah()) {
                $data = BrandRights::where('status', BrandRights::DISOKONG)->get();
            } else if (Auth::user()->isPendaftar()) {
                $data = BrandRights::where('status', BrandRights::DIPERAKUI)->get();
            }

            return DataTables::of($data)
                            ->addColumn('brand_name', function ($row) {
                                return '<a href="' . route('brandRights.show', $row->id) . '"><u>' . $row->brand->name . '</u></a>';
                            })
                            ->addColumn('brand_company', function ($row) {
                                return $row->brand->company;
                            })
                            ->addColumn('brand_country', function ($row) {
                                return $row->brand->country->nicename;
                            })
                            ->addColumn('company_reg_no', function ($row) {
                                return $row->company->reg_no;
                            })
                            ->addColumn('company_name', function ($row) {
                                return $row->company->name;
                            })
                            ->addColumn('franchise_type', function($row) {
                                $franchise_type = '<i>(not set)</i>';

                                if ($row->franchise_type_id) {
                                    $franchise_type = Helper::getFranchiseType($row->franchise_type_id);
                                }

                                return $franchise_type;
                            })
                            ->editColumn('created_at', function($row) {
                                $created_at = '<i>(not set)</i>';
                                if ($row->created_at) {
                                    $created_at = Helper::getFormattedDate($row->created_at, 'date');
                                }

                                return $created_at;
                            })
                            ->editColumn('status', function ($row) {
                                return $row->getStatus();
                            })
                            ->rawColumns(['brand_name', 'franchise_type', 'status', 'created_at'])
                            ->make(true);
        }

        return view('brand_rights.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('brand_rights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $brandRights = BrandRights::findOrFail($id);
        $countryList = Helper::countryList();
        $franchiseTypeList = Helper::typeFranchiseList();

        return view('brand_rights.show', compact('brandRights', 'countryList', 'franchiseTypeList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
