@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">

                <h4 class="page-title">Daftar Pemberi Francais</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('amendment.index') }}">Senarai Permohonan</a></li>
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
                            <a class="nav-link active" data-toggle="tab" href="#files_upload" role="tab">Muat Naik Fail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('amendment.declaration', [$amendment->id]) }}" role="tab">Deklarasi</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="files_upload" role="tabpanel">
                            <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>
                                @php $count = 0; @endphp
                                <div class="row card">
                                    <div class="card-body">

                                        <h6>SIJIL / BORANG / SURAT</h6>

                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for="">Adakah Cap Dagangan Didaftarkan Atas Nama Syarikat Pemohon?</label>
                                                <br/>
                                                <small class="text-danger">Sila muat-naik Surat Ikatan Penyerahan (jika tidak)</small>
                                                <br/>
                                                <span>Tidak berkenaan</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Carta Organisasi</label>
                                                <input type="file" class="form-control-file" id="" name="" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">                                            
                                                <label for="">Adakah Terdapat Perubahan Kepada Senarai Nama Pemegang Saham (Pemindahan Saham)?</label>
                                                <br/>
                                                <small class="text-danger">Jika ya, sila muat-naik Borang 32 A</small>
                                                <br/>
                                                <span>Tidak berkenaan</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Syarikat Dan Ahli Lembaga Pengarah Adalah Bebas Dari Kebankrapan</label>
                                                <br/>
                                                <small class="text-danger">Sila muat-naik Surat Jabatan Insolvensi</small>
                                                <input type="file" class="form-control-file" id="" name="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for="">Sijil Pendaftaran Dengan Agensi Berkaitan</label>
                                                <br/>
                                                <span>Tidak berkenaan</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Brosur Perniagaan / Profil Syarikat</label>
                                                <input type="file" class="form-control-file" id="" name="" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Gambar Outlet Yang Akan Dijadikan Sebagai Prototaip</label>
                                                <input type="file" class="form-control-file" id="" name="" value="">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Manual Latihan</label>
                                                <input type="file" class="form-control-file" id="" name="" value="">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Manual Operasi</label>
                                                <input type="file" class="form-control-file" id="" name="" value="">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Contoh Perjanjian Francais</label>
                                                <input type="file" class="form-control-file" id="" name="" value="">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Halaman Laporan Kewangan Berkaitan</label>
                                                <br/>
                                                <small class="text-danger">Sila muat-naik akaun teraudit/akaun pengurusan serta nota kepada akaun yang telah disahkan oleh Pesuruhjaya Sumpah, Majistret atau Notari Awam.</small>
                                                <input type="file" class="form-control-file" id="" name="" value="">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Akaun Pengurusan Outlet Prototaip</label>
                                                <br/>
                                                <small class="text-danger">Sila muat-naik akaun pengurusan bagi outlet prototaip untuk tempoh sekurang-kurangnya enam(6) bulan beroperasi.</small>
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
                }).then(function () {
                    window.location.href = "{{ route('amendment.capitalEquity', [$amendment->id]) }}";
                });
            }
        });
    });
</script>
@endsection