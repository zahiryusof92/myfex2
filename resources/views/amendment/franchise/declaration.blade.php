@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Daftar Pindaan Matan</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="{{ route('amendment.index') }}">Senarai Pindaan Matan</a></li>
    <li class="breadcrumb-item active">Daftar Pindaan Matan</li>
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
                            <a href="{{ route('amendment.index') }}" class="btn btn-danger w-md waves-effect waves-light">
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
                            <a class="nav-link" href="{{ route('amendment.companyInformation', [$amendment->id]) }}" role="tab">Profil Syarikat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('amendment.franchiseeObligation', [$amendment->id]) }}" role="tab">Obligasi Perniagaan Francais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('amendment.financeReport', [$amendment->id]) }}" role="tab">Maklumat Kewangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('amendment.filesUpload', [$amendment->id]) }}" role="tab">Muat Naik Fail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#declaration" role="tab">Deklarasi</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="declaration" role="tabpanel">
                            <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

                                <div class="row card">
                                    <div class="card-body">

                                        <h6>Dekalarasi</h6>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="declare" name="declare" required>
                                                <label class="custom-control-label" for="declare">Saya mengaku segala maklumat yang diberikan adalah benar dan tepat dan saya memahami bahawa saya akan dikenakan tindakan undang-undang sekiranya Pendaftar Francais pada bila-bila masa mendapati maklumat pendaftaran yang dimaklumkan adalah palsu.</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Makluman kepada Pendaftar Francais (jika ada)</label>
                                            <textarea class="form-control" id="" name="" rows="7"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <p class="text-danger">Peringatan: Sila Membuat Pembayaran Fi, sebelum permohonan diproses</p>
                                            <label for="">Jumlah Bayaran Yuran Proses Permohonan: RM 50.00</label>
                                            <br/>
                                            <button class="btn btn-warning w-md waves-effect waves-light" type="button">Bayar Yuran Proses Permohonan</button>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Simpan dan Hantar <i class="mdi mdi-send"></i></button>
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
                    window.location.href = "{{ route('amendment.capitalEquity', [$amendment->id]) }}";
                });
            }
        });
    });
</script>
@endsection