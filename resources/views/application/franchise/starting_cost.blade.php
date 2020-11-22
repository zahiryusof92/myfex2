@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Daftar Pemberi Francais</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="{{ route('application.index') }}">Senarai Permohonan</a></li>
    <li class="breadcrumb-item active">Daftar Pemberi Francais</li>
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
                            <a class="nav-link" href="{{ route('application.franchiseeObligation', [$application->id]) }}" role="tab">Obligasi Perniagaan Francais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#financial" role="tab">Maklumat Kewangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('application.filesUpload', [$application->id]) }}" role="tab">Muat Naik Fail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('application.declaration', [$application->id]) }}" role="tab">Deklarasi</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="financial" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('application.financeReport', [$application->id]) }}" role="tab">Laporan Kewangan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#starting_cost" role="tab">Kos Perlaburan Permulaan</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="starting_cost" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

                                        <div class="row card">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <button class="btn btn-success w-md waves-effect waves-light">Tambah Maklumat Pakej</button>
                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;">Perkara</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Fi Francais</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kos Pengubahsuaian</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perabot Lekapan Dan Kelengkapan</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Peralatan Pejabat</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sistem POS</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Stok Permulaan</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kos Penubuhan Syarikat</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Modal Kerja (Gaji, Sewa Dan Utiliti Untuk Tempoh 3 Bulan)</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Deposit Sewa Dan Utiliti</td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Jumlah</th>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tindakan</th>
                                                                <td></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-success w-md waves-effect waves-light">Tambah Maklumat Pakej</button>
                                                    <br/>
                                                    <small class="text-danger">Sila isikan justifikasi dan maklumat terperinci bagi fi yang dikenakan oleh syarikat.</small>
                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr>
                                                                <th>Maklumat Fi</th>
                                                                <th>Tujuan Fi Dikenakan</th>
                                                                <th>Justifikasi</th>
                                                                <th>Bila Bayaran Perlu Dibuat	</th>
                                                                <th>Nyatakan Klausa Berkaitan</th>
                                                                <th>Sama Ada Fi Boleh Dikembalikan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    Fi Francais<br/>
                                                                    <a href="#">Kemaskini</a><br/>
                                                                    <a href="#">Padam</a>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Tidak</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Fi Pengiklanan<br/>
                                                                    <a href="#">Kemaskini</a><br/>
                                                                    <a href="#">Padam</a>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Tidak</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Royalti<br/>
                                                                    <a href="#">Kemaskini</a><br/>
                                                                    <a href="#">Padam</a>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Tidak</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Latihan Fi<br/>
                                                                    <a href="#">Kemaskini</a><br/>
                                                                    <a href="#">Padam</a>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Tidak</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Fi Perkhidmatan<br/>
                                                                    <a href="#">Kemaskini</a><br/>
                                                                    <a href="#">Padam</a>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Tidak</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>                                                    
                                                </div>

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