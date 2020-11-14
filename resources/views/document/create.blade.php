@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Daftar Jenama</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('brandRights.index') }}">Senarai Jenama</a></li>
                    <li class="breadcrumb-item active">Daftar Jenama</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a href="{{ route('document.index') }}" class="btn btn-danger w-md waves-effect waves-light">
                                <i class="mdi mdi-undo mdi-18px"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                        @csrf

                        <h6>Maklumat Dokumen</h6>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="name"><span class="text-danger">* </span>Nama Fail</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" autocomplete="name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="name_en"><span class="text-danger">* </span>Nama Fail (Terjemahan)</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name_en" name="name_en" value="{{ old('name_en') }}" autocomplete="name_en" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="file_url"><span class="text-danger">* </span>Muatnaik Fail</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" id="file_url" name="file_url" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="is_active">No. Susunan</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" id="sort_no" name="sort_no" value="{{ old('sort_no') }}" autocomplete="sort_no">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="sort_no">Aktif</label>
                            </div>
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" {{ old('is_active') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="is_active">&nbsp;</label>
                                </div>
                            </div>                            
                        </div>

                        <div class="form-group row">                                
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection