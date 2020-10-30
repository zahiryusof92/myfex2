<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Helpers\Helper;

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
                            ->addColumn('brand_name', function ($row) {
                                return '<a href="' . route('application.show', $row->id) . '"><u>' . $row->brand->name . '</u></a>';
                            })
                            ->addColumn('company_reg_no', function ($row) {
                                return $row->company->reg_no;
                            })
                            ->addColumn('company_name', function ($row) {
                                return $row->company->name;
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
                            ->rawColumns(['brand_name', 'status', 'created_at'])
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
        //
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

}
