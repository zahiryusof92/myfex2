@extends('layouts.master')

@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Maklumat Jenama</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('brandRights.index') }}">Senarai Jenama</a></li>
                        <li class="breadcrumb-item active">Maklumat Jenama</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <div class="row">
                            @if (Auth::user()->isUser() || Auth::user()->isConsultant())
                            <div class="col-6">
                                @if ($brandRights->status == App\Models\BrandRights::DILULUS)
                                <form method="POST" action="{{ route('application.store') }}">
                                    @csrf
                                    <input type="hidden" name="brandright_id" value="{{ $brandRights->id }}"/>
                                    <input type="hidden" name="company_id" value="{{ $brandRights->company->id }}"/>
                                    <input type="hidden" name="franchise_type_id" value="{{ $brandRights->franchise_type_id }}"/>
                                    <button type="submit" class="btn btn-primary w-md waves-effect waves-light m-r-5">
                                        Daftar {{ App\Helpers\Helper::getFranchiseType($brandRights->franchise_type_id) }} <i class="mdi mdi-plus"></i>
                                    </button>
                                </form>
                                @endif
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('brandRights.index') }}" class="btn btn-danger w-md waves-effect waves-light">
                                    <i class="mdi mdi-undo mdi-18px"></i> Kembali
                                </a>
                            </div>
                            @else
                            <div class="col-12 text-right">
                                <a href="{{ route('brandRights.index') }}" class="btn btn-danger w-md waves-effect waves-light">
                                    <i class="mdi mdi-undo mdi-18px"></i> Kembali
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Auth::user()->isUser())
                        @if ($brandRights->status != App\Models\BrandRights::DRAF)                        
                        <h6>Maklumat Jenama</h6>                        
                        <dl class="row">
                            <dt class="col-sm-4">Nama Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->name }}</dd>

                            <dt class="col-sm-4">Nama Syarikat Pemegang Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->company }}</dd>

                            <dt class="col-sm-4">Negara Asal Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->country->nicename }}</dd>
                        </dl>

                        <h6>Maklumat Hak Penggunaan Jenama di Malaysia</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Nama Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->name }}</dd>

                            <dt class="col-sm-4">No. Pendaftaran Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->reg_no }}</dd>

                            <dt class="col-sm-4">Peranan (Pemberi Francais / Francaisi Induk)</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFranchiseType($brandRights->franchise_type_id) }}</dd>

                            <dt class="col-sm-4">No. Rujukan MyIPO</dt>
                            <dd class="col-sm-8">{{ $brandRights->myipo_ref_no }}</dd>

                            <dt class="col-sm-4">Deed of Assignment (DoA)</dt>
                            <dd class="col-sm-8">
                                <a href="{{ asset($brandRights->deed_of_assigment) }}" target="_blank">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $brandRights->deed_of_assigment }}
                                </a>
                            </dd>

                            <dt class="col-sm-4">Tarikh Mula DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->start_date, 'date') }}</dd>

                            <dt class="col-sm-4">Tarikh Akhir DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->end_date, 'date') }}</dd>
                        </dl>

                        <h6>Maklumat Permohonan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Tarikh Permohonan</dt>
                            <dd class="col-sm-8">{{ $brandRights->created_at->format('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Status Permohonan</dt>
                            <dd class="col-sm-8">{!! $brandRights->getStatus() !!}</dd>
                        </dl>

                        @if ($brandRights->status == App\Models\BrandRights::DISYOR)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DISOKONG)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DIPERAKUI)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DILULUS)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>

                        <h6>Maklumat Kelulusan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Kelulusan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Kelulusan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Kelulusan</dt>
                            <dd class="col-sm-8">Maklumat lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DITOLAK)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan  tidak disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Penolakan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Penolakan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Penolakan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Penolakan</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                        </dl>
                        @endif

                        @else
                        <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                            <h6>Maklumat Jenama</h6>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="brand_name"><span class="text-danger">* </span>Nama Jenama</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ old('brand_name') }}" autocomplete="brand_name" autofocus required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="brand_company"><span class="text-danger">* </span>Nama Syarikat Pemegang Jenama</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="brand_company" name="brand_company" value="{{ old('brand_company') }}" autocomplete="brand_company" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="brand_country"><span class="text-danger">* </span>Negara Asal Jenama</label>
                                </div>
                                <div class="col-sm-8">
                                    {{ Form::select('brand_country', $countryList, false, array('class' => 'form-control select2', 'required')) }}
                                </div>
                            </div>

                            <h6>Maklumat Hak Penggunaan Jenama di Malaysia</h6>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="company_name">Nama Syarikat Berhak Untuk Penggunaan Jenama</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="company_name" name="company_name" value="{{ Auth::user()->company->name }}" autocomplete="company_name" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="company_reg_no">No. Pendaftaran Syarikat Berhak Untuk Penggunaan Jenama</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" value="{{ Auth::user()->company->reg_no }}" autocomplete="company_reg_no" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="franchise_type"><span class="text-danger">* </span>Peranan (Pemberi Francais / Francaisi Induk)</label>
                                </div>
                                <div class="col-sm-8">
                                    {{ Form::select('franchise_type', $franchiseTypeList, false, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="myipo_ref_no"><span class="text-danger">* </span>No. Rujukan MyIPO</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="myipo_ref_no" name="myipo_ref_no" value="{{ old('myipo_ref_no') }}" autocomplete="myipo_ref_no" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="deed_of_assigment"><span class="text-danger">* </span>Deed of Assignment (DoA)</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control-file" id="deed_of_assigment" name="deed_of_assigment" data-input="true" data-buttonname="btn-secondary" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="start_date"><span class="text-danger">* </span>Tarikh Mula DoA</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}" autocomplete="start_date" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="end_date"><span class="text-danger">* </span>Tarikh Akhir DoA</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date') }}" autocomplete="end_date" required>
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
                        @if ($brandRights->status != App\Models\BrandRights::DRAF)                        
                        <h6>Maklumat Jenama</h6>                        
                        <dl class="row">
                            <dt class="col-sm-4">Nama Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->name }}</dd>

                            <dt class="col-sm-4">Nama Syarikat Pemegang Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->company }}</dd>

                            <dt class="col-sm-4">Negara Asal Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->country->nicename }}</dd>
                        </dl>

                        <h6>Maklumat Hak Penggunaan Jenama di Malaysia</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Nama Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->name }}</dd>

                            <dt class="col-sm-4">No. Pendaftaran Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->reg_no }}</dd>

                            <dt class="col-sm-4">Peranan (Pemberi Francais / Francaisi Induk)</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFranchiseType($brandRights->franchise_type_id) }}</dd>

                            <dt class="col-sm-4">No. Rujukan MyIPO</dt>
                            <dd class="col-sm-8">{{ $brandRights->myipo_ref_no }}</dd>

                            <dt class="col-sm-4">Deed of Assignment (DoA)</dt>
                            <dd class="col-sm-8">
                                <a href="{{ asset($brandRights->deed_of_assigment) }}" target="_blank">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $brandRights->deed_of_assigment }}
                                </a>
                            </dd>

                            <dt class="col-sm-4">Tarikh Mula DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->start_date, 'date') }}</dd>

                            <dt class="col-sm-4">Tarikh Akhir DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->end_date, 'date') }}</dd>
                        </dl>

                        <h6>Maklumat Permohonan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Tarikh Permohonan</dt>
                            <dd class="col-sm-8">{{ $brandRights->created_at->format('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Status Permohonan</dt>
                            <dd class="col-sm-8">{!! $brandRights->getStatus() !!}</dd>
                        </dl>

                        @if ($brandRights->status == App\Models\BrandRights::DISYOR)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DISOKONG)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DIPERAKUI)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DILULUS)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>

                        <h6>Maklumat Kelulusan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Kelulusan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Kelulusan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Kelulusan</dt>
                            <dd class="col-sm-8">Maklumat lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DITOLAK)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan  tidak disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Penolakan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Penolakan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Penolakan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Penolakan</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                        </dl>
                        @endif

                        @else
                        <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                            <h6>Maklumat Jenama</h6>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="brand_name"><span class="text-danger">* </span>Nama Jenama</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ old('brand_name') }}" autocomplete="brand_name" autofocus required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="brand_company"><span class="text-danger">* </span>Nama Syarikat Pemegang Jenama</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="brand_company" name="brand_company" value="{{ old('brand_company') }}" autocomplete="brand_company" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="brand_country"><span class="text-danger">* </span>Negara Asal Jenama</label>
                                </div>
                                <div class="col-sm-8">
                                    {{ Form::select('brand_country', $countryList, false, array('class' => 'form-control select2', 'required')) }}
                                </div>
                            </div>

                            <h6>Maklumat Hak Penggunaan Jenama di Malaysia</h6>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="company_name">Nama Syarikat Berhak Untuk Penggunaan Jenama</label>
                                </div>
                                <div class="col-sm-8">
                                    {{ Form::select('company_name', $companyList, false, array('id' => 'company_name', 'class' => 'form-control select2', 'onChange' => 'getRegNo()', 'required')) }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="company_reg_no">No. Pendaftaran Syarikat Berhak Untuk Penggunaan Jenama</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" value="" autocomplete="company_reg_no" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="franchise_type"><span class="text-danger">* </span>Peranan (Pemberi Francais / Francaisi Induk)</label>
                                </div>
                                <div class="col-sm-8">
                                    {{ Form::select('franchise_type', $franchiseTypeList, false, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="myipo_ref_no"><span class="text-danger">* </span>No. Rujukan MyIPO</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="myipo_ref_no" name="myipo_ref_no" value="{{ old('myipo_ref_no') }}" autocomplete="myipo_ref_no" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="deed_of_assigment"><span class="text-danger">* </span>Deed of Assignment (DoA)</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control-file" id="deed_of_assigment" name="deed_of_assigment" data-input="true" data-buttonname="btn-secondary" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="start_date"><span class="text-danger">* </span>Tarikh Mula DoA</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}" autocomplete="start_date" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="end_date"><span class="text-danger">* </span>Tarikh Akhir DoA</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date') }}" autocomplete="end_date" required>
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

                        @if (Auth::user()->isPPU())
                        <h6>Maklumat Jenama</h6>                        
                        <dl class="row">
                            <dt class="col-sm-4">Nama Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->name }}</dd>

                            <dt class="col-sm-4">Nama Syarikat Pemegang Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->company }}</dd>

                            <dt class="col-sm-4">Negara Asal Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->country->nicename }}</dd>
                        </dl>

                        <h6>Maklumat Hak Penggunaan Jenama di Malaysia</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Nama Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->name }}</dd>

                            <dt class="col-sm-4">No. Pendaftaran Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->reg_no }}</dd>

                            <dt class="col-sm-4">Peranan (Pemberi Francais / Francaisi Induk)</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFranchiseType($brandRights->franchise_type_id) }}</dd>

                            <dt class="col-sm-4">No. Rujukan MyIPO</dt>
                            <dd class="col-sm-8">{{ $brandRights->myipo_ref_no }}</dd>

                            <dt class="col-sm-4">Deed of Assignment (DoA)</dt>
                            <dd class="col-sm-8">
                                <a href="{{ asset($brandRights->deed_of_assigment) }}" target="_blank">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $brandRights->deed_of_assigment }}
                                </a>
                            </dd>

                            <dt class="col-sm-4">Tarikh Mula DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->start_date, 'date') }}</dd>

                            <dt class="col-sm-4">Tarikh Akhir DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->end_date, 'date') }}</dd>
                        </dl>

                        <h6>Maklumat Permohonan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Tarikh Permohonan</dt>
                            <dd class="col-sm-8">{{ $brandRights->created_at->format('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Status Permohonan</dt>
                            <dd class="col-sm-8">{!! $brandRights->getStatus() !!}</dd>
                        </dl>

                        @if ($brandRights->status == App\Models\BrandRights::BARU)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">
                                <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Ulasan Disyor" required></textarea>
                                    </div>
                                    <div class="form-group row m-t-10">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DISYOR)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DISOKONG)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DIPERAKUI)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DILULUS)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>

                        <h6>Maklumat Kelulusan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Kelulusan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Kelulusan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Kelulusan</dt>
                            <dd class="col-sm-8">Maklumat lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DITOLAK)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan  tidak disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Penolakan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Penolakan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Penolakan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Penolakan</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                        </dl>
                        @endif
                        @endif
                        <!-- END PPU -->

                        @if (Auth::user()->isKPP())
                        <h6>Maklumat Jenama</h6>                        
                        <dl class="row">
                            <dt class="col-sm-4">Nama Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->name }}</dd>

                            <dt class="col-sm-4">Nama Syarikat Pemegang Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->company }}</dd>

                            <dt class="col-sm-4">Negara Asal Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->country->nicename }}</dd>
                        </dl>

                        <h6>Maklumat Hak Penggunaan Jenama di Malaysia</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Nama Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->name }}</dd>

                            <dt class="col-sm-4">No. Pendaftaran Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->reg_no }}</dd>

                            <dt class="col-sm-4">Peranan (Pemberi Francais / Francaisi Induk)</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFranchiseType($brandRights->franchise_type_id) }}</dd>

                            <dt class="col-sm-4">No. Rujukan MyIPO</dt>
                            <dd class="col-sm-8">{{ $brandRights->myipo_ref_no }}</dd>

                            <dt class="col-sm-4">Deed of Assignment (DoA)</dt>
                            <dd class="col-sm-8">
                                <a href="{{ asset($brandRights->deed_of_assigment) }}" target="_blank">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $brandRights->deed_of_assigment }}
                                </a>
                            </dd>

                            <dt class="col-sm-4">Tarikh Mula DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->start_date, 'date') }}</dd>

                            <dt class="col-sm-4">Tarikh Akhir DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->end_date, 'date') }}</dd>
                        </dl>

                        <h6>Maklumat Permohonan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Tarikh Permohonan</dt>
                            <dd class="col-sm-8">{{ $brandRights->created_at->format('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Status Permohonan</dt>
                            <dd class="col-sm-8">{!! $brandRights->getStatus() !!}</dd>
                        </dl>

                        @if ($brandRights->status == App\Models\BrandRights::DISYOR)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">
                                <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Ulasan Disokong" required></textarea>
                                    </div>
                                    <div class="form-group row m-t-10">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DISOKONG)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DIPERAKUI)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DILULUS)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>

                        <h6>Maklumat Kelulusan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Kelulusan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Kelulusan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Kelulusan</dt>
                            <dd class="col-sm-8">Maklumat lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DITOLAK)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan  tidak disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Penolakan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Penolakan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Penolakan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Penolakan</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                        </dl>
                        @endif
                        @endif
                        <!-- END KPP -->

                        @if (Auth::user()->isPengarah())
                        <h6>Maklumat Jenama</h6>                        
                        <dl class="row">
                            <dt class="col-sm-4">Nama Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->name }}</dd>

                            <dt class="col-sm-4">Nama Syarikat Pemegang Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->company }}</dd>

                            <dt class="col-sm-4">Negara Asal Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->country->nicename }}</dd>
                        </dl>

                        <h6>Maklumat Hak Penggunaan Jenama di Malaysia</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Nama Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->name }}</dd>

                            <dt class="col-sm-4">No. Pendaftaran Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->reg_no }}</dd>

                            <dt class="col-sm-4">Peranan (Pemberi Francais / Francaisi Induk)</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFranchiseType($brandRights->franchise_type_id) }}</dd>

                            <dt class="col-sm-4">No. Rujukan MyIPO</dt>
                            <dd class="col-sm-8">{{ $brandRights->myipo_ref_no }}</dd>

                            <dt class="col-sm-4">Deed of Assignment (DoA)</dt>
                            <dd class="col-sm-8">
                                <a href="{{ asset($brandRights->deed_of_assigment) }}" target="_blank">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $brandRights->deed_of_assigment }}
                                </a>
                            </dd>

                            <dt class="col-sm-4">Tarikh Mula DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->start_date, 'date') }}</dd>

                            <dt class="col-sm-4">Tarikh Akhir DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->end_date, 'date') }}</dd>
                        </dl>

                        <h6>Maklumat Permohonan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Tarikh Permohonan</dt>
                            <dd class="col-sm-8">{{ $brandRights->created_at->format('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Status Permohonan</dt>
                            <dd class="col-sm-8">{!! $brandRights->getStatus() !!}</dd>
                        </dl>

                        @if ($brandRights->status == App\Models\BrandRights::DISOKONG)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">
                                <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Ulasan Diperakui" required></textarea>
                                    </div>
                                    <div class="form-group row m-t-10">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DIPERAKUI)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DILULUS)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>

                        <h6>Maklumat Kelulusan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Kelulusan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Kelulusan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Kelulusan</dt>
                            <dd class="col-sm-8">Maklumat lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DITOLAK)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan  tidak disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Penolakan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Penolakan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Penolakan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Penolakan</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                        </dl>
                        @endif
                        @endif
                        <!-- END Pengarah -->

                        @if (Auth::user()->isPendaftar())
                        <h6>Maklumat Jenama</h6>                        
                        <dl class="row">
                            <dt class="col-sm-4">Nama Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->name }}</dd>

                            <dt class="col-sm-4">Nama Syarikat Pemegang Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->company }}</dd>

                            <dt class="col-sm-4">Negara Asal Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->brand->country->nicename }}</dd>
                        </dl>

                        <h6>Maklumat Hak Penggunaan Jenama di Malaysia</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Nama Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->name }}</dd>

                            <dt class="col-sm-4">No. Pendaftaran Syarikat Berhak Untuk Penggunaan Jenama</dt>
                            <dd class="col-sm-8">{{ $brandRights->company->reg_no }}</dd>

                            <dt class="col-sm-4">Peranan (Pemberi Francais / Francaisi Induk)</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFranchiseType($brandRights->franchise_type_id) }}</dd>

                            <dt class="col-sm-4">No. Rujukan MyIPO</dt>
                            <dd class="col-sm-8">{{ $brandRights->myipo_ref_no }}</dd>

                            <dt class="col-sm-4">Deed of Assignment (DoA)</dt>
                            <dd class="col-sm-8">
                                <a href="{{ asset($brandRights->deed_of_assigment) }}" target="_blank">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $brandRights->deed_of_assigment }}
                                </a>
                            </dd>

                            <dt class="col-sm-4">Tarikh Mula DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->start_date, 'date') }}</dd>

                            <dt class="col-sm-4">Tarikh Akhir DoA</dt>
                            <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($brandRights->end_date, 'date') }}</dd>
                        </dl>

                        <h6>Maklumat Permohonan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Tarikh Permohonan</dt>
                            <dd class="col-sm-8">{{ $brandRights->created_at->format('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Status Permohonan</dt>
                            <dd class="col-sm-8">{!! $brandRights->getStatus() !!}</dd>
                        </dl>

                        @if ($brandRights->status == App\Models\BrandRights::DIPERAKUI)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
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
                        @elseif ($brandRights->status == App\Models\BrandRights::DILULUS)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan lengkap dan disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui lengkap</dd>
                        </dl>

                        <h6>Maklumat Kelulusan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Kelulusan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Kelulusan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Kelulusan</dt>
                            <dd class="col-sm-8">Maklumat lengkap</dd>
                        </dl>
                        @elseif ($brandRights->status == App\Models\BrandRights::DITOLAK)
                        <h6>Maklumat Disyor</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disyor Oleh</dt>
                            <dd class="col-sm-8">Pegawai Proses Utama</dd>

                            <dt class="col-sm-4">Tarikh Disyor</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disyor</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan  tidak disyorkan untuk disokong</dd>
                        </dl>

                        <h6>Maklumat Disokong</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Disokong Oleh</dt>
                            <dd class="col-sm-8">Ketua Pegawai Proses</dd>

                            <dt class="col-sm-4">Tarikh Disokong</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Disokong</dt>
                            <dd class="col-sm-8">Maklumat permohonan disokong tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Diperakui</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Diperakui Oleh</dt>
                            <dd class="col-sm-8">Pengarah</dd>

                            <dt class="col-sm-4">Tarikh Diperakui</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Diperakui</dt>
                            <dd class="col-sm-8">Maklumat permohonan diperakui tidak lengkap</dd>
                        </dl>

                        <h6>Maklumat Penolakan</h6>
                        <dl class="row">
                            <dt class="col-sm-4">Penolakan Oleh</dt>
                            <dd class="col-sm-8">Pendaftar</dd>

                            <dt class="col-sm-4">Tarikh Penolakan</dt>
                            <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                            <dt class="col-sm-4">Ulasan Penolakan</dt>
                            <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                        </dl>
                        @endif
                        @endif
                        <!-- END Pendaftar -->
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>
<!-- end wrapper -->
@endsection

@section('script')
<script>
    function getRegNo() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('brandRights.getRegNo') }}",
            type: "post",
            data: {
                id: $('#company_name').val()
            },
            success: function (response) {
                $('#company_reg_no').val(response);
            }
        });
    }
</script>
@endsection