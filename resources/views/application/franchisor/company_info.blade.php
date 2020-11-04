@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">

                <h4 class="page-title">Daftar Pemberi Francais</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('application.index') }}">Senarai Permohonan</a></li>
                    <li class="breadcrumb-item active">Daftar Pemberi Francais</li>
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
                            <a href="{{ route('application.index') }}" class="btn btn-danger w-md waves-effect waves-light">
                                <i class="mdi mdi-undo mdi-18px"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (Auth::user()->isUser())
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profil Syarikat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#obligations" role="tab">Obligasi Perniagaan Francais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#financial" role="tab">Maklumat Kewangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#file" role="tab">Muat Naik Fail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#declaration" role="tab">Deklarasi</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="profile" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#company" role="tab">Maklumat Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('application.capitalEquity', [$application->id]) }}" role="tab">Modal dan Ekuiti</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#operation" role="tab">Operasi Perniagaan Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#information" role="tab">Maklumat Perniagaan Francais</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="company" role="tabpanel">
                                    <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                                        <div class="form-group">
                                            <label for="company_reg_no">No. Pendaftaran Syarikat</label>
                                            <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" value="{{ Auth::user()->company->reg_no }}" autocomplete="company_reg_no" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="company_name">Nama Syarikat</label>
                                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ Auth::user()->company->name }}" autocomplete="company_name" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="reg_address"><span class="text-danger">* </span>Alamat Pendaftaran Syarikat</label>
                                            <input type="text" class="form-control" id="reg_address" name="reg_address" value="{{ old('reg_address') ? old('reg_address') : Auth::user()->company->reg_address }}" placeholder="" autocomplete="reg_address" required>
                                            <input type="text" class="form-control m-t-5" id="reg_address2" name="reg_address2" value="{{ old('reg_address2') ? old('reg_address2') : Auth::user()->company->reg_address2 }}" placeholder="" autocomplete="reg_address2">
                                            <input type="text" class="form-control m-t-5" id="reg_address3" name="reg_address3" value="{{ old('reg_address3') ? old('reg_address3') : Auth::user()->company->reg_address3 }}" placeholder="" autocomplete="reg_address3">
                                        </div>

                                        <div class="form-group">
                                            <label for="buss_address"><span class="text-danger">* </span>Alamat Perniagaan Syarikat</label>
                                            <input type="text" class="form-control" id="buss_address" name="buss_address" value="{{ old('buss_address') ? old('buss_address') : Auth::user()->company->buss_address }}" placeholder="" autocomplete="buss_address" required>
                                            <input type="text" class="form-control m-t-5" id="buss_address2" name="buss_address2" value="{{ old('buss_address2') ? old('buss_address2') : Auth::user()->company->buss_address2 }}" placeholder="" autocomplete="buss_address2">
                                            <input type="text" class="form-control m-t-5" id="buss_address3" name="buss_address3" value="{{ old('buss_address3') ? old('buss_address3') : Auth::user()->company->buss_address3 }}" placeholder="" autocomplete="buss_address3">
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
                    @elseif (Auth::user()->isConsultant())

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

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
