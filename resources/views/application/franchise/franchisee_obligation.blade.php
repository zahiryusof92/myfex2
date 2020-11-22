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
                            <a class="nav-link active" data-toggle="tab" href="#obligations" role="tab">Obligasi Perniagaan Francais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('application.financeReport', [$application->id]) }}" role="tab">Maklumat Kewangan</a>
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
                        <div class="tab-pane active p-3" id="obligations" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#franchisee_obligation" role="tab">Obligasi Francaisi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('application.franchisorObligation', [$application->id]) }}" role="tab">Obligasi Francaisor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('application.rightsObligation', [$application->id]) }}" role="tab">Hak Dan Obligasi</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="franchisee_obligation" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

                                        <div class="row card">
                                            <div class="card-body">
                                                @php $count = 0; @endphp

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Adakah Francaisi Diwajibkan Untuk Membeli / Menyewa Benda Dan Peralatan / Perkhidmatan Daripada Francaisor Atau Sumber Yang Ditetapkan Oleh Francaisor?</label>
                                                        <br/>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio1" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio1" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <br/>
                                                        <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                        <br/>
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Spesifikasi</button>

                                                        <table class="table table-bordered table-hover m-t-10">
                                                            <thead>
                                                                <tr class="table-active">
                                                                    <th colspan="6">Spesifikasi Untuk Benda / Peralatan / Perkhidmatan</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bil.</th>
                                                                    <th>Spesifikasi Untuk Benda / Peralatan / Perkhidmatan</th>
                                                                    <th>Method of Procument</th>
                                                                    <th>Sumber</th>
                                                                    <th>Nama Pembekal / Syarikat</th>
                                                                    <th>Tindakan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">                                          
                                                        <label for=""><span class="text-danger">* </span>Margin Pendapatan (%) Francaisor</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Adakah Spesifikasi Untuk Peralatan Atau Perkhidmatan Untuk Perniagaan Francaisi Akan Ditetapkan Oleh Francaisor?</label>
                                                        <br/>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio2" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio2" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <br/>
                                                        <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Adakah Francaisi Dibenarkan Untuk Mengubahsuai Spesifikasi Francaisor?</label>
                                                        <br/>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio3" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio3" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <br/>
                                                        <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Adakah Francaisi Diwajibkan Menumpukan Sepenuh Masa Kepada Perniagaan Francais?</label>
                                                        <br/>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio4" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio4" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <br/>
                                                        <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Adakah Francaisi Diwajibkan Untuk Memberi Jaminan Bertulis Bagi Merahsiakan Maklumat Francais?</label>
                                                        <br/>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio5" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio5" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <br/>
                                                        <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Adakah Francaisi Dilarang Untuk Menjalankan Perniagaan Yang Serupa?</label>
                                                        <br/>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio6" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio6" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <br/>
                                                        <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Adakah Francaisi Dilarang Menjual Barangan Dan Perkhidmatan Selain Daripada Yang Difrancaiskan?</label>
                                                        <br/>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio7" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio7" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <br/>
                                                        <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
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
