@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Daftar Syarikat</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('company.index') }}">Senarai Syarikat</a></li>
                    <li class="breadcrumb-item active">Daftar Syarikat</li>
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
                            <a href="{{ route('company.index') }}" class="btn btn-danger w-md waves-effect waves-light">
                                <i class="mdi mdi-undo mdi-18px"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="" data-parsley-validate>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="name"><span class="text-danger">* </span>Nama Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="" autocomplete="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="name_old">Nama Syarikat (Lama)</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name_old" name="name_old" value="{{ old('name_old') }}" placeholder="" autocomplete="name_old">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="reg_no"><span class="text-danger">* </span>No. Pendaftaran Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="reg_no" name="reg_no" value="{{ old('reg_no') }}" placeholder="" autocomplete="reg_no" data-parsley-type="alphanum" minlength="12" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="reg_no_old">No. Pendaftaran Syarikat (Lama)</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="reg_no_old" name="reg_no_old" value="{{ old('reg_no_old') }}" placeholder="" autocomplete="reg_no_old">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="email"><span class="text-danger">* </span>E-mel Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="" autocomplete="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="phone_no"><span class="text-danger">* </span>No. Telefon Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ old('phone_no') }}" placeholder="" autocomplete="phone_no" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="reg_address"><span class="text-danger">* </span>Alamat Pendaftaran Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="reg_address" name="reg_address" value="{{ old('reg_address') }}" placeholder="" autocomplete="reg_address" required>
                                <input type="text" class="form-control" id="reg_address2" name="reg_address2" value="{{ old('reg_address2') }}" placeholder="" autocomplete="reg_address2">
                                <input type="text" class="form-control" id="reg_address3" name="reg_address3" value="{{ old('reg_address3') }}" placeholder="" autocomplete="reg_address3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="buss_address"><span class="text-danger">* </span>Alamat Perniagaan Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="buss_address" name="buss_address" value="{{ old('buss_address') }}" placeholder="" autocomplete="buss_address" required>
                                <input type="text" class="form-control" id="buss_address2" name="buss_address2" value="{{ old('buss_address2') }}" placeholder="" autocomplete="buss_address2">
                                <input type="text" class="form-control" id="buss_address3" name="buss_address3" value="{{ old('buss_address3') }}" placeholder="" autocomplete="buss_address3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="ssm_cert"><span class="text-danger">* </span>Sijil Pendaftaran Syarikat Malaysia (SSM)</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="file" class="filestyle" id="ssm_cert" name="ssm_cert" data-input="true" data-buttonname="btn-secondary" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="letter_of_authority"><span class="text-danger">* </span>Surat Perwakilan Kuasa</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="file" class="filestyle" id="letter_of_authority" name="letter_of_authority" data-input="true" data-buttonname="btn-secondary" required>
                            </div>
                        </div>

                        <div class="form-group row m-t-30">
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