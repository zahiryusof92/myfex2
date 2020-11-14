<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller {

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
            $data = Document::get();

            return DataTables::of($data)
                            ->editColumn('name', function ($row) {
                                return '<a href="' . route('document.show', $row->id) . '"><u>' . $row->name . '</u></a>';
                            })
                            ->editColumn('name_en', function ($row) {
                                return ($row->name_en ? $row->name_en : '<i>(not set)</i>');
                            })
                            ->editColumn('sort_no', function ($row) {
                                return ($row->sort_no ? $row->sort_no : '<i>(not set)</i>');
                            })
                            ->editColumn('is_active', function ($row) {
                                return $row->getStatus();
                            })
                            ->editColumn('created_at', function($row) {
                                $created_at = '<i>(not set)</i>';
                                if ($row->created_at) {
                                    $created_at = Helper::getFormattedDate($row->created_at);
                                }

                                return $created_at;
                            })
                            ->addColumn('action', function($row) {
                                $button = '';
                                $button .= '<div class="button-items">';
                                $button .= '<a href="' . route('document.edit', $row->id) . '" class="btn btn-sm btn-info waves-effect waves-light">Kemaskini</a>';
                                $button .= '<form action="' . route('document.destroy', $row->id) . '" method="POST" style="display:inline-block;">'
                                        . '<input type="hidden" name="_method" value="DELETE">'
                                        . '<input type="hidden" name="_token" value="' . csrf_token() . '">'
                                        . '<button type="submit" class="btn btn-sm btn-danger waves-effect waves-light" onclick="return confirm(\'Are you sure to delete?\')">Padam</button>'
                                        . '</form>';
                                $button .= '</div>';

                                return $button;
                            })
                            ->rawColumns(['name', 'name_en', 'sort_no', 'is_active', 'created_at', 'action'])
                            ->make(true);
        }

        return view('document.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        if ($request->file('file_url')) {
            $file_url = Storage::disk('public')->putFileAs(
                    'document',
                    $request->file('file_url'),
                    $request->name . '.' . $request->file('file_url')->extension(),
            );

            if ($file_url) {
                $document = new Document();
                $document->name = $request->name;
                $document->name_en = $request->name_en;
                $document->file_url = $file_url;
                $document->sort_no = $request->sort_no;
                $document->is_active = $request->boolean('is_active');
                $success = $document->save();

                if ($success) {
                    return redirect()->route('document.index');
                }
            }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document) {

        return view('document.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document) {

        return view('document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document) {

        $file_url = $document->file_url;

        if ($request->file('file_url')) {
            $file_url = Storage::disk('public')->putFileAs(
                    'document',
                    $request->file('file_url'),
                    $request->name . '.' . $request->file('file_url')->extension(),
            );
        }

        $document->name = $request->name;
        $document->name_en = $request->name_en;
        $document->file_url = $file_url;
        $document->sort_no = $request->sort_no;
        $document->is_active = $request->boolean('is_active');
        $success = $document->save();

        if ($success) {
            return redirect()->route('document.index');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document) {

        $success = $document->delete();

        if ($success) {
            return redirect()->route('document.index');
        }

        return redirect()->back();
    }

}
