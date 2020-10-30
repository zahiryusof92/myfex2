<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Helpers\Helper;
use App\Models\Company;

class CompanyController extends Controller {

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
                $data = Company::where('id', Auth::user()->company_id)->get();
            } else if (Auth::user()->isConsultant()) {
                $data = Company::where('consultant_id', Auth::user()->id)->get();
            } else if (Auth::user()->isPPU()) {
                $data = Company::where('consultant', false)->where('status', Company::BARU)->get();
            } else if (Auth::user()->isKPP()) {
                $data = Company::where('consultant', false)->where('status', Company::DINILAI)->get();
            }

            return DataTables::of($data)
                            ->editColumn('reg_no', function ($row) {
                                return '<a href="' . route('company.show', $row->id) . '"><u>' . $row->reg_no . '</u></a>';
                            })
                            ->editColumn('status', function ($row) {
                                return $row->getStatus();
                            })
                            ->editColumn('created_at', function($row) {
                                $created_at = '<i>(not set)</i>';
                                if ($row->created_at) {
                                    $created_at = Helper::getFormattedDate($row->created_at, 'date');
                                }

                                return $created_at;
                            })
                            ->rawColumns(['reg_no', 'status', 'created_at'])
                            ->make(true);
        }

        return view('company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('company.create');
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
        $company = Company::findOrFail($id);
        
        return view('company.show', compact('company'));
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
