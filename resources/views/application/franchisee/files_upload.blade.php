@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Daftar Pemegang Francais</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="{{ route('application.index') }}">Senarai Permohonan</a></li>
    <li class="breadcrumb-item active">Daftar Pemegang Francais</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

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
                            <a class="nav-link" href="{{ route('application.companyInformation', [$application->id]) }}" role="tab">Profil Syarikat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#files_upload" role="tab">Muat Naik Fail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('application.declaration', [$application->id]) }}" role="tab">Deklarasi</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="files_upload" role="tabpanel">
                            <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

                                @php $count = 0; @endphp

                                <h6>SIJIL / BORANG / SURAT</h6>

                                <div class="form-group row">
                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                    <div class="col-sm-11">
                                        <label for=""><span class="text-danger">* </span>Salinan Perjanjian Francais</label>
                                        <input type="file" class="form-control-file" id="" name="" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                    <div class="col-sm-11">
                                        <label for=""><span class="text-danger">* </span>Lain-lain Dokumen Sokongan</label>
                                        <input type="file" class="form-control-file" id="" name="" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                    <div class="col-sm-11">
                                        <label for=""><span class="text-danger">* </span>Surat Tawaran Kepada Francaisor</label>
                                        <input type="file" class="form-control-file" id="" name="" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                    <div class="col-sm-11">
                                        <label for=""><span class="text-danger">* </span>Sijil Pendaftaran SSM (Bagi syarikat berstatus ROB)</label>
                                        <input type="file" class="form-control-file" id="" name="" value="">
                                    </div>
                                </div>    

                                <div class="form-group row">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-info w-md waves-effect waves-light" type="button">Simpan Draf <i class="mdi mdi-content-save-all"></i></button>
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Simpan dan Teruskan <i class="mdi mdi-send"></i></button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                    @elseif (Auth::user()->isConsultant())

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
                }).then(function () {
                    window.location.href = "{{ route('application.capitalEquity', [$application->id]) }}";
                });
            }
        });
    });
</script>
@endsection