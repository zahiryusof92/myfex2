<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Helpers\Helper;
use App\Models\User;

class UserController extends Controller {

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
            if (Auth::user()->isPPU()) {
                $data = User::where('staff', false)
                        ->where(function($query) {
                            $query->where('status', User::BARU);
                            $query->orWhere('status', User::DINILAI);
                        })
                        ->get();
            }

            return DataTables::of($data)
                            ->editColumn('username', function ($row) {
                                return '<a href="' . route('user.show', $row->id) . '"><u>' . $row->username . '</u></a>';
                            })
                            ->editColumn('role', function ($row) {
                                $role = '<i>(not set)</i>';
                                if ($row->role_id) {
                                    $role = $row->role->name;
                                }

                                return $role;
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
                            ->rawColumns(['username', 'role', 'status', 'created_at'])
                            ->make(true);
        }

        return view('user.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $user = User::findOrFail($id);

        return view('user.show', compact('user'));
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
