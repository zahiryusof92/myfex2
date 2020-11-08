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
                            <a class="nav-link active" data-toggle="tab" href="#company_information" role="tab">Profil Syarikat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('application.franchiseeObligation', [$application->id]) }}" role="tab">Obligasi Perniagaan Francais</a>
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
                        <div class="tab-pane active p-3" id="company_information" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#company_information" role="tab">Maklumat Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('application.capitalEquity', [$application->id]) }}" role="tab">Modal dan Ekuiti</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('application.businessOperation', [$application->id]) }}" role="tab">Operasi Perniagaan Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('application.businessInformation', [$application->id]) }}" role="tab">Maklumat Perniagaan Francais</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="company_information" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

                                        <div class="row card">
                                            <div class="card-body">
                                                @php $count = 0; @endphp

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for="">No. Pendaftaran Syarikat</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->reg_no }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for="">Nama Syarikat</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->name }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for="">Alamat Pendaftaran Syarikat</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->reg_address }}" autocomplete="" readonly>
                                                        <input type="text" class="form-control m-t-5" id="" name="" value="{{ Auth::user()->company->reg_address2 }}" autocomplete="" readonly>
                                                        <input type="text" class="form-control m-t-5" id="" name="" value="{{ Auth::user()->company->reg_address3 }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-11">
                                                        <label for="">Poskod</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->reg_postcode }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-11">
                                                        <label for="">Bandar</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->reg_city }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-11">
                                                        <label for="">Negeri</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->reg_country }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for="">Alamat Perniagaan Syarikat</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->buss_address }}" placeholder="" autocomplete="" readonly>
                                                        <input type="text" class="form-control m-t-5" id="" name="" value="{{ Auth::user()->company->buss_address2 }}" placeholder="" autocomplete="" readonly>
                                                        <input type="text" class="form-control m-t-5" id="" name="" value="{{ Auth::user()->company->buss_address3 }}" placeholder="" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-11">
                                                        <label for="">Poskod</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->buss_postcode }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-11">
                                                        <label for="">Bandar</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->buss_city }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-11">
                                                        <label for="">Negeri</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->buss_country }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Alamat Surat-menyurat</label>
                                                        <input type="text" class="form-control" id="" name="" value="" placeholder="" autocomplete="" required>
                                                        <input type="text" class="form-control m-t-5" id="" name="" value="" placeholder="" autocomplete="">
                                                        <input type="text" class="form-control m-t-5" id="" name="" value="" placeholder="" autocomplete="">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Poskod</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Bandar</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Negeri</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for="">No. Telefon</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->phone_no }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>No. Faks</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for="">E-mel</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ Auth::user()->company->email }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Laman Web</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Tarikh Diperbadankan</label>
                                                        <input type="date" class="form-control" id="" name="" value="" autocomplete="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Bidang Perniagaan</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for="">No. Rujukan MyIPO</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ $application->brandRight->myipo_ref_no }}" autocomplete="" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Adakah Cap Dagangan Didaftarkan Atas Nama Syarikat Pemohon?</label>
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
                                                        <small class="text-danger">Jika tidak, sila muat naik Surat Ikatan Penyerahan</small>
                                                        <input type="file" class="form-control-file m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for="">Jenama</label>
                                                        <input type="text" class="form-control" id="" name="" value="{{ $application->brandRight->brand->name }}" readonly>
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
                                                        <label for=""><span class="text-danger">* </span>Maklumat Pengurusan / Staf</label>
                                                        <table class="table table-bordered table-primary">
                                                            <thead>
                                                                <tr>
                                                                    <th>Kategori Kerja</th>
                                                                    <th>Bumiputera (Bil. Orang)</th>
                                                                    <th>Bukan Bumiputera (Bil. Orang)</th>
                                                                    <th>Warganegara Asing (Bil. Orang)</th>
                                                                    <th>Jumlah</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th colspan="5">A) Pengurusan</th>                                                        
                                                                </tr>
                                                                <tr>
                                                                    <th><span class="m-l-15">(i) Profesional</span></th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><span class="m-l-15">(ii) Pentadbiran</span></th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="5">B) Eksekutif</th>                                                        
                                                                </tr>
                                                                <tr>
                                                                    <th><span class="m-l-15">(i) Teknikal</span></th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><span class="m-l-15">(ii) Pentadbiran</span></th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>C) Pekerja Mahir</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>D) Pengkeranian</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>E) Pekerja Am / Lain-lain</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>Jumlah</th>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">                       
                                                        <label for=""><span class="text-danger">* </span>Maklumat Konsultan / Broker</label>
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
                                                        <small class="text-danger">Jika ya, sila isikan maklumat berikut</small>
                                                        <br/>
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Konsultan / Broker</button>

                                                        <table class="table table-bordered table-hover m-t-10">
                                                            <thead>
                                                                <tr class="table-active">
                                                                    <th colspan="7">Tambah Konsultan / Broker</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bil.</th>
                                                                    <th>No. Pendaftaran Syarikat</th>
                                                                    <th>Nama Syarikat</th>
                                                                    <th>Alamat</th>
                                                                    <th>No. Telefon</th>
                                                                    <th>E-mel</th>
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
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">                       
                                                        <label for=""><span class="text-danger">* </span>Maklumat Outlet</label>
                                                        <br/>
                                                        <button class="btn btn-success w-md waves-effect waves-light">Maklumat Outlet</button>

                                                        <table class="table table-bordered table-hover m-t-10">
                                                            <thead>
                                                                <tr class="table-active">
                                                                    <th colspan="10">Maklumat Outlet</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bil.</th>
                                                                    <th>Nama</th>
                                                                    <th>Alamat</th>
                                                                    <th>No. Telefon</th>
                                                                    <th>No. Fax</th>
                                                                    <th>Kategori Perniagaan</th>
                                                                    <th>Tarikh Buka</th>
                                                                    <th>Tarikh Tutup</th>
                                                                    <th>Jenis Hak Milik</th>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
                    window.location.href = "{{ route('application.capitalEquity', [$application->id]) }}";
                });
            }
        });
    });
</script>
@endsection
