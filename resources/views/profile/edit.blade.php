@extends('layouts.master')

@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Profil Saya</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                        <li class="breadcrumb-item active">Profil Saya</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                            <h6>Maklumat Profil</h6> 
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Username</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="" name="" value="{{ $user->username }}" readonly="">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for=""><span class="text-danger">* </span>Nama</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="" name="" value="{{ $user->name }}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for=""><span class="text-danger">* </span>E-mel</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="" name="" value="{{ $user->email }}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Jenis Pengguna</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="" name="" value="{{ $user->role_id ? $user->role->name : '-' }}" readonly="">
                                </div>
                            </div>
                            @if ($user->company_id)
                            <h6>Maklumat Syarikat</h6>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="reg_no">No. Pendaftaran Syarikat</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="reg_no" name="reg_no" value="{{ old('reg_no') ? old('reg_no') : $user->company->reg_no }}" readonly="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="reg_no_old">No. Pendaftaran Syarikat (Lama)</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="reg_no_old" name="reg_no_old" value="{{ old('reg_no_old') ? old('reg_no_old') : $user->company->reg_no_old }}" readonly="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="name"><span class="text-danger">* </span>Nama Syarikat</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ? old('name') : $user->company->name }}" placeholder="" autocomplete="name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="name_old">Nama Syarikat (Lama)</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name_old" name="name_old" value="{{ old('name_old') ? old('name_old') : $user->company->name_old }}" placeholder="" autocomplete="name_old">
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="email">E-mel Syarikat</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') ? old('email') : $user->company->email }}" placeholder="" autocomplete="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="phone_no"><span class="text-danger">* </span>No. Telefon Syarikat</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ old('phone_no') ? old('phone_no') : $user->company->phone_no }}" placeholder="" autocomplete="phone_no" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="reg_address"><span class="text-danger">* </span>Alamat Pendaftaran Syarikat</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="reg_address" name="reg_address" value="{{ old('reg_address') ? old('reg_address') : $user->company->reg_address }}" placeholder="" autocomplete="reg_address" required>
                                    <input type="text" class="form-control m-t-5" id="reg_address2" name="reg_address2" value="{{ old('reg_address2') ? old('reg_address2') : $user->company->reg_address2 }}" placeholder="" autocomplete="reg_address2">
                                    <input type="text" class="form-control m-t-5" id="reg_address3" name="reg_address3" value="{{ old('reg_address3') ? old('reg_address3') : $user->company->reg_address3 }}" placeholder="" autocomplete="reg_address3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="buss_address"><span class="text-danger">* </span>Alamat Perniagaan Syarikat</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="buss_address" name="buss_address" value="{{ old('buss_address') ? old('buss_address') : $user->company->buss_address }}" placeholder="" autocomplete="buss_address" required>
                                    <input type="text" class="form-control m-t-5" id="buss_address2" name="buss_address2" value="{{ old('buss_address2') ? old('buss_address2') : $user->company->buss_address2 }}" placeholder="" autocomplete="buss_address2">
                                    <input type="text" class="form-control m-t-5" id="buss_address3" name="buss_address3" value="{{ old('buss_address3') ? old('buss_address3') : $user->company->buss_address3 }}" placeholder="" autocomplete="buss_address3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="ssm_cert">Sijil Pendaftaran Syarikat Malaysia (SSM)</label>
                                </div>
                                <div class="col-sm-8">
                                    <a href="{{ asset($user->company->ssm_cert) }}" target="_blank">
                                        <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $user->company->ssm_cert }}
                                    </a>   
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="letter_of_authority">Surat Perwakilan Kuasa</label>
                                </div>
                                <div class="col-sm-8">
                                    <a href="{{ asset($user->company->auth_letter) }}" target="_blank">
                                        <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $user->company->auth_letter }}
                                    </a>
                                </div>
                            </div>
                            @endif

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

    </div> <!-- end container -->
</div>
<!-- end wrapper -->
@endsection
