@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">

                <h4 class="page-title">Daftar Pindaan Matan</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('amendment.index') }}">Senarai Pindaan Matan</a></li>
                    <li class="breadcrumb-item active">Daftar Pindaan Matan</li>
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
                            <a href="{{ route('amendment.index') }}" class="btn btn-danger w-md waves-effect waves-light">
                                <i class="mdi mdi-undo mdi-18px"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (Auth::user()->isUser())
                    <form class="form-horizontal" method="POST" action="{{ route('amendment.store') }}" data-parsley-validate>
                        @csrf
                        
                        <h6>Pendaftaran Pindaan Matan</h6> 
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="application_id"><span class="text-danger">* </span>Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                {{ Form::select('application_id', $approvedApplicationList, false, array('id' => 'application_id' , 'class' => 'form-control select2', 'required')) }}
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="company_name">Nama Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ Auth::user()->company->name }}" autocomplete="company_name" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="company_reg_no">No. Pendaftaran Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" value="{{ Auth::user()->company->reg_no }}" autocomplete="company_reg_no" readonly>
                            </div>
                        </div>  

                        <div class="form-group row">
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                            </div>
                        </div>
                    </form>

                    @elseif (Auth::user()->isConsultant())

                    @endif

                </div>
            </div>
        </div>
    </div>

</div>

@endsection