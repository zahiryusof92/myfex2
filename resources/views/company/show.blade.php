@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Maklumat Syarikat</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="{{ route('company.index') }}">Senarai Syarikat</a></li>
    <li class="breadcrumb-item active">Maklumat Syarikat</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-xl-12">
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
                    @if (Auth::user()->isUser())
                    @if ($company->status != App\Models\Company::DRAF)
                    <h6>Maklumat Syarikat</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Nama Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->name }}</dd>

                        <dt class="col-sm-4">Nama Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $company->name_old ? $company->name_old : '-' }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->reg_no }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $company->reg_no_old ? $company->reg_no_old : '-' }}</dd>

                        <dt class="col-sm-4">E-mel Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->email }}</dd>

                        <dt class="col-sm-4">No. Telefon Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->phone_no }}</dd>

                        <dt class="col-sm-4">Alamat Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">
                            {{ $company->reg_address }},<br/>
                            {{ $company->reg_address2 }},<br/>
                            {{ $company->reg_address3 }},<br/>
                            {{ $company->reg_postcode }}, {{ $company->reg_city }},<br/>
                            {{ $company->reg_country }}.<br/>
                        </dd>

                        <dt class="col-sm-4">Alamat Perniagaan Syarikat</dt>
                        <dd class="col-sm-8">
                            {{ $company->buss_address }},<br/>
                            {{ $company->buss_address2 }},<br/>
                            {{ $company->buss_address3 }},<br/>
                            {{ $company->buss_postcode }}, {{ $company->buss_city }},<br/>
                            {{ $company->buss_country }}.<br/>
                        </dd>                       

                        <dt class="col-sm-4">Sijil Pendaftaran Syarikat Malaysia (SSM)</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($company->ssm_cert) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->ssm_cert }}
                            </a>
                        </dd>

                        <dt class="col-sm-4">Surat Perwakilan Kuasa</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($company->auth_letter) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->auth_letter }}
                            </a>
                        </dd>
                    </dl>

                    <h6>Maklumat Permohonan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Tarikh Permohonan</dt>
                        <dd class="col-sm-8">{{ $company->created_at->format('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Status Permohonan</dt>
                        <dd class="col-sm-8">{!! $company->getStatus() !!}</dd>
                    </dl>

                    @if ($company->status == App\Models\Company::DINILAI)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk diluluskan</dd>
                    </dl>
                    @elseif ($company->status == App\Models\Company::DILULUS)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk diluluskan</dd>
                    </dl>

                    <h6>Maklumat Kelulusan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Kelulusan Oleh</dt>
                        <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                        <dt class="col-sm-4">Tarikh Kelulusan</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Kelulusan</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap</dd>
                    </dl>
                    @elseif ($company->status == App\Models\Company::DITOLAK)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan disyorkan untuk ditolak</dd>
                    </dl>

                    <h6>Maklumat Penolakan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penolakan Oleh</dt>
                        <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                        <dt class="col-sm-4">Tarikh Penolakan</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penolakan</dt>
                        <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                    </dl>
                    @endif
                    @else
                    <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                        <h6>Maklumat Syarikat</h6>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="reg_no">No. Pendaftaran Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="reg_no" name="reg_no" value="{{ old('reg_no') ? old('reg_no') : $company->reg_no }}" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="reg_no_old">No. Pendaftaran Syarikat (Lama)</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="reg_no_old" name="reg_no_old" value="{{ old('reg_no_old') ? old('reg_no_old') : $company->reg_no_old }}" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="name"><span class="text-danger">* </span>Nama Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ? old('name') : $company->name }}" placeholder="" autocomplete="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="name_old">Nama Syarikat (Lama)</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name_old" name="name_old" value="{{ old('name_old') ? old('name_old') : $company->name_old }}" placeholder="" autocomplete="name_old">
                            </div>
                        </div>                            
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="email">E-mel Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') ? old('email') : $company->email }}" placeholder="" autocomplete="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="phone_no"><span class="text-danger">* </span>No. Telefon Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ old('phone_no') ? old('phone_no') : $company->phone_no }}" placeholder="" autocomplete="phone_no" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="reg_address"><span class="text-danger">* </span>Alamat Pendaftaran Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="reg_address" name="reg_address" value="{{ old('reg_address') ? old('reg_address') : $company->reg_address }}" placeholder="" autocomplete="reg_address" required>
                                <input type="text" class="form-control m-t-5" id="reg_address2" name="reg_address2" value="{{ old('reg_address2') ? old('reg_address2') : $company->reg_address2 }}" placeholder="" autocomplete="reg_address2">
                                <input type="text" class="form-control m-t-5" id="reg_address3" name="reg_address3" value="{{ old('reg_address3') ? old('reg_address3') : $company->reg_address3 }}" placeholder="" autocomplete="reg_address3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="buss_address"><span class="text-danger">* </span>Alamat Perniagaan Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="buss_address" name="buss_address" value="{{ old('buss_address') ? old('buss_address') : $company->buss_address }}" placeholder="" autocomplete="buss_address" required>
                                <input type="text" class="form-control m-t-5" id="buss_address2" name="buss_address2" value="{{ old('buss_address2') ? old('buss_address2') : $company->buss_address2 }}" placeholder="" autocomplete="buss_address2">
                                <input type="text" class="form-control m-t-5" id="buss_address3" name="buss_address3" value="{{ old('buss_address3') ? old('buss_address3') : $company->buss_address3 }}" placeholder="" autocomplete="buss_address3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="ssm_cert">Sijil Pendaftaran Syarikat Malaysia (SSM)</label>
                            </div>
                            <div class="col-sm-8">
                                <a href="{{ asset($company->ssm_cert) }}" target="_blank">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->ssm_cert }}
                                </a>   
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="letter_of_authority">Surat Perwakilan Kuasa</label>
                            </div>
                            <div class="col-sm-8">
                                <a href="{{ asset($company->auth_letter) }}" target="_blank">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->auth_letter }}
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">                                
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                            </div>
                        </div>
                    </form>
                    @endif
                    @endif
                    <!-- END User -->

                    @if (Auth::user()->isConsultant())
                    @if ($company->status != App\Models\Company::DRAF)
                    <h6>Maklumat Syarikat</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Nama Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->name }}</dd>

                        <dt class="col-sm-4">Nama Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $company->name_old ? $company->name_old : '-' }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->reg_no }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $company->reg_no_old ? $company->reg_no_old : '-' }}</dd>

                        <dt class="col-sm-4">E-mel Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->email }}</dd>

                        <dt class="col-sm-4">No. Telefon Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->phone_no }}</dd>

                        <dt class="col-sm-4">Alamat Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">
                            {{ $company->reg_address }},<br/>
                            {{ $company->reg_address2 }},<br/>
                            {{ $company->reg_address3 }},<br/>
                            {{ $company->reg_postcode }}, {{ $company->reg_city }},<br/>
                            {{ $company->reg_country }}.<br/>
                        </dd>

                        <dt class="col-sm-4">Alamat Perniagaan Syarikat</dt>
                        <dd class="col-sm-8">
                            {{ $company->buss_address }},<br/>
                            {{ $company->buss_address2 }},<br/>
                            {{ $company->buss_address3 }},<br/>
                            {{ $company->buss_postcode }}, {{ $company->buss_city }},<br/>
                            {{ $company->buss_country }}.<br/>
                        </dd>                       

                        <dt class="col-sm-4">Sijil Pendaftaran Syarikat Malaysia (SSM)</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($company->ssm_cert) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->ssm_cert }}
                            </a>
                        </dd>

                        <dt class="col-sm-4">Surat Perwakilan Kuasa</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($company->auth_letter) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->auth_letter }}
                            </a>
                        </dd>
                    </dl>

                    <h6>Maklumat Permohonan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Tarikh Permohonan</dt>
                        <dd class="col-sm-8">{{ $company->created_at->format('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Status Permohonan</dt>
                        <dd class="col-sm-8">{!! $company->getStatus() !!}</dd>
                    </dl>

                    @if ($company->status == App\Models\Company::DINILAI)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk diluluskan</dd>
                    </dl>
                    @elseif ($company->status == App\Models\Company::DILULUS)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk diluluskan</dd>
                    </dl>

                    <h6>Maklumat Kelulusan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Kelulusan Oleh</dt>
                        <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                        <dt class="col-sm-4">Tarikh Kelulusan</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Kelulusan</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap</dd>
                    </dl>
                    @elseif ($company->status == App\Models\Company::DITOLAK)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan disyorkan untuk ditolak</dd>
                    </dl>

                    <h6>Maklumat Penolakan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penolakan Oleh</dt>
                        <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                        <dt class="col-sm-4">Tarikh Penolakan</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penolakan</dt>
                        <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                    </dl>
                    @endif
                    @else
                    <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                        <h6>Maklumat Syarikat</h6>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="reg_no"><span class="text-danger">* </span>No. Pendaftaran Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="reg_no" name="reg_no" value="{{ old('reg_no') ? old('reg_no') : $company->reg_no }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="reg_no_old">No. Pendaftaran Syarikat (Lama)</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="reg_no_old" name="reg_no_old" value="{{ old('reg_no_old') ? old('reg_no_old') : $company->reg_no_old }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="name"><span class="text-danger">* </span>Nama Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ? old('name') : $company->name }}" placeholder="" autocomplete="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="name_old">Nama Syarikat (Lama)</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name_old" name="name_old" value="{{ old('name_old') ? old('name_old') : $company->name_old }}" placeholder="" autocomplete="name_old">
                            </div>
                        </div>                            
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="email">E-mel Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') ? old('email') : $company->email }}" placeholder="" autocomplete="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="phone_no"><span class="text-danger">* </span>No. Telefon Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ old('phone_no') ? old('phone_no') : $company->phone_no }}" placeholder="" autocomplete="phone_no" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="reg_address"><span class="text-danger">* </span>Alamat Pendaftaran Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="reg_address" name="reg_address" value="{{ old('reg_address') ? old('reg_address') : $company->reg_address }}" placeholder="" autocomplete="reg_address" required>
                                <input type="text" class="form-control" id="reg_address2" name="reg_address2" value="{{ old('reg_address2') ? old('reg_address2') : $company->reg_address2 }}" placeholder="" autocomplete="reg_address2">
                                <input type="text" class="form-control" id="reg_address3" name="reg_address3" value="{{ old('reg_address3') ? old('reg_address3') : $company->reg_address3 }}" placeholder="" autocomplete="reg_address3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="buss_address"><span class="text-danger">* </span>Alamat Perniagaan Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="buss_address" name="buss_address" value="{{ old('buss_address') ? old('buss_address') : $company->buss_address }}" placeholder="" autocomplete="buss_address" required>
                                <input type="text" class="form-control" id="buss_address2" name="buss_address2" value="{{ old('buss_address2') ? old('buss_address2') : $company->buss_address2 }}" placeholder="" autocomplete="buss_address2">
                                <input type="text" class="form-control" id="buss_address3" name="buss_address3" value="{{ old('buss_address3') ? old('buss_address3') : $company->buss_address3 }}" placeholder="" autocomplete="buss_address3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="ssm_cert">Sijil Pendaftaran Syarikat Malaysia (SSM)</label>
                            </div>
                            <div class="col-sm-8">
                                <a href="{{ asset($company->ssm_cert) }}" target="_blank">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->ssm_cert }}
                                </a>   
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="letter_of_authority">Surat Perwakilan Kuasa</label>
                            </div>
                            <div class="col-sm-8">
                                <a href="{{ asset($company->auth_letter) }}" target="_blank">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->auth_letter }}
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">                                
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                            </div>
                        </div>
                    </form>
                    @endif
                    @endif
                    <!-- END Consultant -->

                    @if (Auth::user()->isPPU())
                    <h6>Maklumat Syarikat</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Nama Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->name }}</dd>

                        <dt class="col-sm-4">Nama Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $company->name_old ? $company->name_old : '-' }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->reg_no }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $company->reg_no_old ? $company->reg_no_old : '-' }}</dd>

                        <dt class="col-sm-4">E-mel Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->email }}</dd>

                        <dt class="col-sm-4">No. Telefon Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->phone_no }}</dd>

                        <dt class="col-sm-4">Alamat Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">
                            {{ $company->reg_address }},<br/>
                            {{ $company->reg_address2 }},<br/>
                            {{ $company->reg_address3 }},<br/>
                            {{ $company->reg_postcode }}, {{ $company->reg_city }},<br/>
                            {{ $company->reg_country }}.<br/>
                        </dd>

                        <dt class="col-sm-4">Alamat Perniagaan Syarikat</dt>
                        <dd class="col-sm-8">
                            {{ $company->buss_address }},<br/>
                            {{ $company->buss_address2 }},<br/>
                            {{ $company->buss_address3 }},<br/>
                            {{ $company->buss_postcode }}, {{ $company->buss_city }},<br/>
                            {{ $company->buss_country }}.<br/>
                        </dd>

                        <dt class="col-sm-4">Sijil Pendaftaran Syarikat Malaysia (SSM)</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($company->ssm_cert) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->ssm_cert }}
                            </a>
                        </dd>

                        <dt class="col-sm-4">Surat Perwakilan Kuasa</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($company->auth_letter) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->auth_letter }}
                            </a>
                        </dd>
                    </dl>

                    <h6>Maklumat Permohonan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Tarikh Permohonan</dt>
                        <dd class="col-sm-8">{{ $company->created_at->format('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Status Permohonan</dt>
                        <dd class="col-sm-8">{!! $company->getStatus() !!}</span></dd>
                    </dl>

                    @if ($company->status == App\Models\Company::BARU)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">
                            <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Ulasan penilaian" required></textarea>
                                </div>
                                <div class="form-group row m-t-10">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                                    </div>
                                </div>
                            </form>
                        </dd>
                    </dl>
                    @elseif ($company->status == App\Models\Company::DINILAI)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk diluluskan</dd>
                    </dl>
                    @elseif ($company->status == App\Models\Company::DILULUS)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk diluluskan</dd>
                    </dl>

                    <h6>Maklumat Kelulusan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Kelulusan Oleh</dt>
                        <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                        <dt class="col-sm-4">Tarikh Kelulusan</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Kelulusan</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap</dd>
                    </dl>
                    @elseif ($company->status == App\Models\Company::DITOLAK)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan disyorkan untuk ditolak</dd>
                    </dl>

                    <h6>Maklumat Penolakan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penolakan Oleh</dt>
                        <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                        <dt class="col-sm-4">Tarikh Penolakan</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penolakan</dt>
                        <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                    </dl>
                    @endif
                    @endif
                    <!-- END PPU -->

                    @if (Auth::user()->isKPP())
                    <h6>Maklumat Syarikat</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Nama Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->name }}</dd>

                        <dt class="col-sm-4">Nama Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $company->name_old ? $company->name_old : '-' }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->reg_no }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $company->reg_no_old ? $company->reg_no_old : '-' }}</dd>

                        <dt class="col-sm-4">E-mel Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->email }}</dd>

                        <dt class="col-sm-4">No. Telefon Syarikat</dt>
                        <dd class="col-sm-8">{{ $company->phone_no }}</dd>

                        <dt class="col-sm-4">Alamat Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">
                            {{ $company->reg_address }},<br/>
                            {{ $company->reg_address2 }},<br/>
                            {{ $company->reg_address3 }},<br/>
                            {{ $company->reg_postcode }}, {{ $company->reg_city }},<br/>
                            {{ $company->reg_country }}.<br/>
                        </dd>

                        <dt class="col-sm-4">Alamat Perniagaan Syarikat</dt>
                        <dd class="col-sm-8">
                            {{ $company->buss_address }},<br/>
                            {{ $company->buss_address2 }},<br/>
                            {{ $company->buss_address3 }},<br/>
                            {{ $company->buss_postcode }}, {{ $company->buss_city }},<br/>
                            {{ $company->buss_country }}.<br/>
                        </dd>

                        <dt class="col-sm-4">Sijil Pendaftaran Syarikat Malaysia (SSM)</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($company->ssm_cert) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->ssm_cert }}
                            </a>
                        </dd>

                        <dt class="col-sm-4">Surat Perwakilan Kuasa</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($company->auth_letter) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $company->auth_letter }}
                            </a>
                        </dd>
                    </dl>

                    <h6>Maklumat Permohonan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Tarikh Permohonan</dt>
                        <dd class="col-sm-8">{{ $company->created_at->format('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Status Permohonan</dt>
                        <dd class="col-sm-8">{!! $company->getStatus() !!}</span></dd>
                    </dl>

                    @if ($company->status == App\Models\Company::DINILAI)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk diluluskan</dd>
                    </dl>

                    <h6>Maklumat Kelulusan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Keputusan Kelulusan</dt>
                        <dd class="col-sm-8">
                            <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="">- Sila Pilih -</option>
                                        <option value="1">Diluluskan</option>
                                        <option value="2">Ditolak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Ulasan kelulusan" required></textarea>
                                </div>
                                <div class="form-group row m-t-10">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                                    </div>
                                </div>
                            </form>
                        </dd>
                    </dl>
                    @elseif ($company->status == App\Models\Company::DILULUS)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk diluluskan</dd>
                    </dl>

                    <h6>Maklumat Kelulusan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Kelulusan Oleh</dt>
                        <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                        <dt class="col-sm-4">Tarikh Kelulusan</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Kelulusan</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap</dd>
                    </dl>
                    @elseif ($company->status == App\Models\Company::DITOLAK)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan disyorkan untuk ditolak</dd>
                    </dl>

                    <h6>Maklumat Penolakan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penolakan Oleh</dt>
                        <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                        <dt class="col-sm-4">Tarikh Penolakan</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penolakan</dt>
                        <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                    </dl>
                    @endif
                    @endif
                    <!-- END KPP -->
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- container-fluid -->
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $("form").on('submit', function (e) {
            e.preventDefault();
            var form = $(this);

            form.parsley().validate();

            if (form.parsley().isValid()) {
                Swal.fire({
                    title: 'Berjaya!',
                    text: 'Maklumat berjaya dihantar!',
                    type: 'success',
                    showCancelButton: false,
                    confirmButtonColor: "#58db83"
                });
            }
        });
    });
</script>
@endsection
