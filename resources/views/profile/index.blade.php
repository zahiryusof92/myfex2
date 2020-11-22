@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Profil Saya</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item active">Profil Saya</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <h6>Maklumat Profil</h6>                        
                    <dl class="row">
                        <dt class="col-sm-4">Username</dt>
                        <dd class="col-sm-8">{{ $user->username}}</dd>

                        <dt class="col-sm-4">Nama</dt>
                        <dd class="col-sm-8">{{ $user->name}}</dd>

                        <dt class="col-sm-4">E-mel</dt>
                        <dd class="col-sm-8">{{ $user->email}}</dd>

                        <dt class="col-sm-4">Jenis Pengguna</dt>
                        <dd class="col-sm-8">{{ $user->role_id ? $user->role->name : '-' }}</dd>
                    </dl>

                    @if ($user->company_id)
                    <h6>Maklumat Syarikat</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Nama Syarikat</dt>
                        <dd class="col-sm-8">{{ $user->company->name }}</dd>

                        <dt class="col-sm-4">Nama Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $user->company->name_old ? $user->company->name_old : '-' }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">{{ $user->company->reg_no }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $user->company->reg_no_old ? $user->company->reg_no_old : '-' }}</dd>

                        <dt class="col-sm-4">E-mel Syarikat</dt>
                        <dd class="col-sm-8">{{ $user->company->email }}</dd>

                        <dt class="col-sm-4">No. Telefon Syarikat</dt>
                        <dd class="col-sm-8">{{ $user->company->phone_no }}</dd>

                        <dt class="col-sm-4">Alamat Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">
                            {{ $user->company->reg_address }},<br/>
                            {{ $user->company->reg_address2 }},<br/>
                            {{ $user->company->reg_address3 }},<br/>
                            {{ $user->company->reg_postcode }}, {{ $user->company->reg_city }},<br/>
                            {{ $user->company->reg_country }}.<br/>
                        </dd>

                        <dt class="col-sm-4">Alamat Perniagaan Syarikat</dt>
                        <dd class="col-sm-8">
                            {{ $user->company->buss_address }},<br/>
                            {{ $user->company->buss_address2 }},<br/>
                            {{ $user->company->buss_address3 }},<br/>
                            {{ $user->company->buss_postcode }}, {{ $user->company->buss_city }},<br/>
                            {{ $user->company->buss_country }}.<br/>
                        </dd>

                        <dt class="col-sm-4">Sijil Pendaftaran Syarikat Malaysia (SSM)</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($user->company->ssm_cert) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $user->company->ssm_cert }}
                            </a>
                        </dd>
                    </dl>
                    @endif

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- container-fluid -->
@endsection
