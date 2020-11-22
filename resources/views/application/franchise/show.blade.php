@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Maklumat Pemberi Francais</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="{{ route('application.index') }}">Senarai Permohonan</a></li>
    <li class="breadcrumb-item active">Maklumat Pemberi Francais</li>
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
                            <a class="nav-link active" data-toggle="tab" href="#company_information" role="tab">Profil Syarikat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#obligations" role="tab">Obligasi Perniagaan Francais</a>;
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#financial" role="tab">Maklumat Kewangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#files_upload" role="tab">Muat Naik Fail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#declaration" role="tab">Deklarasi</a>
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
                                    <a class="nav-link" data-toggle="tab" href="#capital_equity" role="tab">Modal dan Ekuiti</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#business_operation" role="tab">Operasi Perniagaan Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#business_information" role="tab">Maklumat Perniagaan Francais</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="company_information" role="tabpanel">

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
                                                    <input type="text" class="form-control" id="" name="" value="" placeholder="" autocomplete="" readonly>
                                                    <input type="text" class="form-control m-t-5" id="" name="" value="" placeholder="" autocomplete="" readonly>
                                                    <input type="text" class="form-control m-t-5" id="" name="" value="" placeholder="" autocomplete="" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Poskod</label>
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Bandar</label>
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Negeri</label>
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
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
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
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
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Tarikh Diperbadankan</label>
                                                    <input type="date" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Bidang Perniagaan</label>
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
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
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika tidak, sila muat naik Surat Ikatan Penyerahan</small>
                                                    <input type="file" class="form-control-file m-t-10" id="" name="" value="" disabled>                                            
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
                                                    <input type="file" class="form-control-file" id="" name="" value="" disabled>
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
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th><span class="m-l-15">(ii) Pentadbiran</span></th>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="5">B) Eksekutif</th>                                                        
                                                            </tr>
                                                            <tr>
                                                                <th><span class="m-l-15">(i) Teknikal</span></th>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th><span class="m-l-15">(ii) Pentadbiran</span></th>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly ></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>C) Pekerja Mahir</th>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>D) Pengkeranian</th>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>E) Pekerja Am / Lain-lain</th>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
                                                                <td><input type="text" class="form-control" readonly></td>
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
                                                        <input class="form-check-input" type="radio" name="radio2" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio2" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila isikan maklumat berikut</small>
                                                    <br/>

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
                                </div>

                                <div class="tab-pane p-3" id="capital_equity" role="tabpanel">
                                    <div class="row card">
                                        <div class="card-body">
                                            @php $count = 0; @endphp

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Modal Dibenarkan</label>
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Modal Berbayar</label>
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Tuntutan Kewangan</label>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="6">Tuntutan Kewangan</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>No. Tuntutan</th>
                                                                <th>Jumlah (RM)</th>
                                                                <th>Tarikh Daftar</th>
                                                                <th>Tuntutan Oleh</th>
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
                                                    <label for=""><span class="text-danger">* </span>Akaun Syarikat</label>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="6">Akaun Syarikat</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Nama Syarikat</th>
                                                                <th>Cawangan Bank</th>
                                                                <th>No. Akaun</th>
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
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Penyertaan Ekuiti / Modal Berbayar</label>
                                                    <div class="form-group col-6">
                                                        <label>Bumiputera: RM</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label>Bukan Bumiputera: RM</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label>Warganegara Asing: RM</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Maklumat Pengarah</label>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="7">Maklumat Pengarah</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Nama</th>
                                                                <th>MyKad</th>
                                                                <th>Alamat</th>
                                                                <th>Tarikh Mula</th>
                                                                <th>Kewarganegaraan</th>
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
                                                    <label for=""><span class="text-danger">* </span>Maklumat Pemegang Saham</label>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="6">Maklumat Pemegang Saham</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Nama</th>
                                                                <th>MyKad</th>
                                                                <th>Jumlah Saham</th>
                                                                <th>Kewarganegaraan</th>
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
                                                    <label for=""><span class="text-danger">* </span>Adakah Terdapat Perubahan Kepada Senarai Nama Pemegang Saham (Pemindahan Saham)</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila muat naik Borang 32 A</small>
                                                    <input type="file" class="form-control-file m-t-10" id="" name="" value="" disabled>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Syarikat Dan Ahli Lembaga Pengarah Adalah Bebas Daripada Tindakan Undang-undang</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio2" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio2" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika tidak, sila isikan tindakan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Syarikat Dan Ahli Lembaga Pengarah Adalah Bebas Dari Kebankrapan</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio3" id="" value="yes" checked disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio3" id="" value="no" disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika tidak, sila muat naik Surat Jabatan Insolvensi</small>
                                                    <input type="file" class="form-control-file m-t-10" id="" name="" value="" disabled>                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row card">
                                        <div class="card-body">

                                            <div class="form-group row">
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-11">
                                                    <label for="">Tandakan Jika Syarikat Tidak Memenuhi Syarat Pendaftaran Francais</label>
                                                    <br/>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="">
                                                        <label class="form-check-label" for="">Outlet Prototaip</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="">
                                                        <label class="form-check-label" for="">Laporan Kewangan</label>
                                                    </div>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="4">Maklumat Pengecualian</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Perkara</th>
                                                                <th>Justifikasi</th>
                                                                <th>Tindakan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
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
                                </div>

                                <div class="tab-pane p-3" id="business_operation" role="tabpanel">
                                    <div class="row card">                                            
                                        <div class="card-header">
                                            <h6>KEUNIKAN PERNIAGAAN</h6>
                                        </div>
                                        <div class="card-body">
                                            @php $count = 0; @endphp

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Nyatakan Dengan Ringkas Keunikan Produk / Perkhidmatan Syarikat Anda</label>
                                                    <textarea class="form-control" id="" name="" rows="5" readonly></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Nyatakan Dengan Ringkas Kriteria Pemilihan Jenis Lokasi Perniagaan Francais</label>
                                                    <textarea class="form-control" id="" name="" rows="5" readonly></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Nyatakan Dengan Ringkas Keunikan Sistem Perniagaan Francais Yang Ditawarkan</label>
                                                    <textarea class="form-control" id="" name="" rows="5" readonly></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Brosur Perniagaan / Profil Syarikat</label>
                                                    <input type="file" class="form-control-file" id="" name="" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Gambar Outlet Yang Akan Dijadikan Sebagai Prototaip</label>
                                                    <input type="file" class="form-control-file" id="" name="" disabled>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row card">
                                        <div class="card-header">
                                            <h6>INFRASTRUKTUR / TEKNOLOGI YANG MEMBANTU OPERASI PERNIAGAAN</h6>
                                        </div>
                                        <div class="card-body">
                                            @php $count = 0; @endphp

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Sistem Point of Sale Atau Yang Seumpama</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Sistem Perakaunan Berkomputer</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio2" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio2" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Sistem Keselamatan</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio3" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio3" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Sistem Dapur Berpusat</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio4" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio4" id="" value="no" disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio4" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak Berkenaan</label>
                                                    </div>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Kemudahan Teknologi Lain</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio5" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio5" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Tambahan Inovasi Dan Kreativiti Kepada Perniagaan</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio6" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio6" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row card">
                                        <div class="card-header">
                                            <h6>STRATEGI PEMASARAN</h6>
                                        </div>
                                        <div class="card-body">
                                            @php $count = 0; @endphp

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Nyatakan Dengan Ringkas Pelan Pemasaran Bagi Mempromosikan Sistem Perniagaan Francais Anda</label>
                                                    <textarea class="form-control" id="" name="" rows="5" readonly></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Nyatakan Dengan Ringkas Pelan Pemasaran Bagi Mempromosikan Produk / Perkhidmatan</label>
                                                    <textarea class="form-control" id="" name="" rows="5" readonly></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Nyatakan Jumlah Dana Yang Akan Diperuntukkan Bagi Tujuan Promosi Oleh Francaisor (RM)</label>
                                                    <textarea class="form-control" id="" name="" rows="5" readonly></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane p-3" id="business_information" role="tabpanel">
                                    <div class="row card">
                                        <div class="card-body">
                                            @php $count = 0; @endphp

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Tempoh Perniagaan Telah Beroperasi Sebelum Dikemukakan Untuk Permohonan Francais</label>
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Sektor Perniagaan Yang Ingin Difrancaiskan</label>
                                                    <select class="form-control select2" id="" name="" disabled>
                                                        <option value=""> - Sila Pilih - </option>
                                                        <optgroup label="Makanan dan Minuman">
                                                            <option value="sektor-1-a">Restoran</option>
                                                            <option value="sektor-1-b">Kopitiam</option>
                                                            <option value="sektor-1-c" selected>Medan Selera</option>
                                                            <option value="sektor-1-d">Outlet Makanan Segera</option>
                                                            <option value="sektor-1-e">Kiosk Makanan dan Minuman</option>
                                                            <option value="sektor-1-f">Bistro / Pub</option>
                                                            <option value="sektor-1-g">Bakeri</option>
                                                        </optgroup>
                                                        <optgroup label="Pakaian dan Aksesori">
                                                            <option value="sektor-2-a">Butik</option>
                                                            <option value="sektor-2-b">Tekstil</option>
                                                            <option value="sektor-2-c">Fabrik Hiasan Dalaman</option>
                                                            <option value="sektor-2-d">Aksesori</option>
                                                            <option value="sektor-2-e">Barangan Kemas</option>
                                                        </optgroup>
                                                        <optgroup label="usat Kesihatan dan Rawatan Kecantikan">
                                                            <option value="must|sektor-8-a">Spa</option>
                                                            <option value="must|sektor-8-b">Rawatan Kecantikan</option>
                                                            <option value="must|sektor-8-c">Kosmetik</option>
                                                            <option value="must|sektor-8-d">Gimnasium</option>
                                                            <option value="must|sektor-8-e">Pusat Urut dan Refleksologi</option>
                                                            <option value="must|sektor-8-f">Farmasi</option>
                                                            <option value="must|sektor-8-g">Pusat Dialisis</option>
                                                            <option value="must|sektor-8-h">Klinik / Hospital</option>
                                                            <option value="must|sektor-8-i">Pusat Rawatan Kesihatan</option>
                                                            <option value="must|sektor-8-j">Pertanian</option>
                                                            <option value="must|sektor-8-k">Perikanan</option>
                                                            <option value="must|sektor-8-l">Perkhidmatan Veterinar</option>
                                                            <option value="must|sektor-8-m">Optometri</option>
                                                        </optgroup>
                                                        <optgroup label="IT, Telekomunikasi dan Elektrik">
                                                            <option value="sektor-6-a">IT</option>
                                                            <option value="sektor-6-b">Cyber Cafe</option>
                                                            <option value="sektor-6-c">Gadget</option>
                                                            <option value="sektor-6-d">Elektrik dan Elektronik</option>
                                                        </optgroup>
                                                        <optgroup label="Kedai Serbaneka dan Pasaraya">
                                                            <option value="sektor-7-a">Peruncitan dan Kedai Serbaneka</option>
                                                            <option value="sektor-7-b">Pasaraya</option>
                                                            <option value="sektor-7-c">Produk dan Perkhidmatan Hijau</option>
                                                        </optgroup>
                                                        <optgroup label="Pendidikan dan Pusat Pembelajaran">
                                                            <option value="sektor-11-a">Pusat Pengembangan Minda dan Kreativiti</option>
                                                            <option value="must|sektor-11-b">Pusat Bahasa</option>
                                                            <option value="must|sektor-11-c">Pusat Tuisyen</option>
                                                            <option value="must|sektor-11-d">Kolej dan Universiti</option>
                                                            <option value="must|sektor-11-e">Sekolah</option>
                                                            <option value="must|sektor-11-f">Kemahiran Khusus [komputer, muzik, tarian, seni mempertahankan diri)</option>
                                                            <option value="must|sektor-11-g">Pusat Asuhan Kanak-kanak / Taska / Tadika</option>
                                                        </optgroup>
                                                        <optgroup label="Perkhidmatan dan Penyelenggaraan">
                                                            <option value="sektor-3-a">Pusat Servis</option>
                                                            <option value="sektor-3-b">Penyelenggaraan</option>
                                                        </optgroup>
                                                        <optgroup label="Kewangan">
                                                            <option value="sektor-4-a">Insurans</option>
                                                            <option value="sektor-4-b">Pengurup Wang Asing Berlesen</option>
                                                            <option value="sektor-4-c">Pajak Gadai / Ar-Rahnu</option>
                                                            <option value="sektor-4-d">Syarikat Kewangan Berlesen</option>
                                                        </optgroup>
                                                        <optgroup label="Pengangkutan">
                                                            <option value="must|sektor-5-a">Pengangkutan Darat</option>
                                                            <option value="must|sektor-5-b">Pengangkutan Air</option>
                                                            <option value="must|sektor-5-c">Pengangkutan Udara</option>
                                                        </optgroup>
                                                        <optgroup label="Perkhidmatan Profesional">
                                                            <option value="sektor-10-a">Perunding</option>
                                                            <option value="sektor-10-b">Khidmat Guaman</option>
                                                            <option value="sektor-10-c">Khidmat Perakaunan dan Pengauditan</option>
                                                            <option value="sektor-10-d">Khidmat Kesetiausahaan Syarikat</option>
                                                        </optgroup>
                                                        <optgroup label="Perkhidmatan Masyarakat, Sosial dan Peribadi">
                                                            <option value="must|sektor-14-a">Taman Rekreasi</option>
                                                            <option value="must|sektor-14-b">Pusat Jagaan [orang tua, anak yatim, down syndrome, haiwan)</option>
                                                            <option value="must|sektor-14-c">Galeri Pameran</option>
                                                        </optgroup>
                                                        <optgroup label="Pembinaan, Pengubahsuaian dan Rekaan Dalaman">
                                                            <option value="sektor-15-a">Pertukangan</option>
                                                            <option value="sektor-15-b">Khidmat Pengubahsuaian</option>
                                                            <option value="sektor-15-c">Khidmat Rekaan Dalaman</option>
                                                        </optgroup>
                                                        <optgroup label="Penginapan dan Pelancongan">
                                                            <option value="sektor-16-a">Hotel</option>
                                                            <option value="sektor-16-b">Guesthouse</option>
                                                            <option value="sektor-16-c">Homestay</option>
                                                            <option value="sektor-16-d">Agro Pelancongan</option>
                                                            <option value="sektor-16-e">Pelancongan Perubatan</option>
                                                            <option value="sektor-16-f">Motel</option>
                                                            <option value="sektor-16-g">Resort</option>
                                                        </optgroup>
                                                        <optgroup label="Lain-lain Perniagaan">
                                                            <option value="sektor-17-a">Lain-lain Perniagaan</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Sijil Pendaftaran Dengan Agensi Berkaitan</label>
                                                    <select class="form-control select2" id="" name="" disabled>
                                                        <option value=""> - Sila Pilih - </option>
                                                        <option value="agensi-3">Badan Pertauliahan yang Berkaitan</option>
                                                        <option value="agensi-4">Ministry of Education</option>
                                                        <option value="agensi-2">Ministry of Health</option>
                                                        <option value="agensi-5">Ministry of Higher Education</option>
                                                        <option value="agensi-x" selected>Not Applicable</option>
                                                        <option value="agensi-99">Other Agencies</option>
                                                        <option value="agensi-6">Social Welfare Department</option>
                                                        <option value="agensi-1">Suruhanjaya Pengangkutan Awam Darat [SPAD)</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Jenis Perniagaan Yang Ingin Difrancaiskan</label>
                                                    <textarea class="form-control" id="" name="" rows="5" readonly></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Konsep Perniagaan</label>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="4">Konsep Perniagaan Yang Ingin Difrancaiskan</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Nama Pakej</th>
                                                                <th>Kategori Perniagaan</th>
                                                                <th>Tindakan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
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
                                                    <label for=""><span class="text-danger">* </span>Adakah Perniagaan Francais Akan Diuruskan Oleh Syarikat Pengurusan / Subsidiari / Seumpamanya?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane p-3" id="obligations" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#franchisee_obligation" role="tab">Obligasi Francaisi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#franchisor_obligation" role="tab">Obligasi Francaisor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#rights_obligation" role="tab">Hak Dan Obligasi</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="franchisee_obligation" role="tabpanel">
                                    <div class="row card">
                                        <div class="card-body">
                                            @php $count = 0; @endphp

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisi Diwajibkan Untuk Membeli / Menyewa Benda Dan Peralatan / Perkhidmatan Daripada Francaisor Atau Sumber Yang Ditetapkan Oleh Francaisor?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                    <br/>

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
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Adakah Spesifikasi Untuk Peralatan Atau Perkhidmatan Untuk Perniagaan Francaisi Akan Ditetapkan Oleh Francaisor?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio2" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio2" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisi Dibenarkan Untuk Mengubahsuai Spesifikasi Francaisor?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio3" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio3" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisi Diwajibkan Menumpukan Sepenuh Masa Kepada Perniagaan Francais?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio4" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio4" id="" value="no" checked readonly>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisi Diwajibkan Untuk Memberi Jaminan Bertulis Bagi Merahsiakan Maklumat Francais?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio5" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio5" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisi Dilarang Untuk Menjalankan Perniagaan Yang Serupa?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio6" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio6" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisi Dilarang Menjual Barangan Dan Perkhidmatan Selain Daripada Yang Difrancaiskan?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio7" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio7" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane p-3" id="franchisor_obligation" role="tabpanel">
                                    <div class="row card">
                                        <div class="card-body">
                                            @php $count = 0; @endphp

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Kemudahan Yang Akan Disediakan Kepada Francaisi</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio1" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="4">Senarai Kemudahan</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Jenis Kemudahan</th>
                                                                <th>Keterangan</th>
                                                                <th>Tindakan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Obligasi Francaisor Sebelum Operasi</label>
                                                    <br/>
                                                    <small class="text-danger">Sila senaraikan obligasi dan nyatakan klausa yang berkaitan</small>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="4">Obligasi Francaisor Sebelum Operasi</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Jenis Obligasi</th>
                                                                <th>Nyatakan Klausa Berkaitan</th>
                                                                <th>Tindakan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Obligasi Francaisor Semasa Beroperasi</label>
                                                    <br/>
                                                    <small class="text-danger">Sila senaraikan obligasi dan nyatakan klausa yang berkaitan</small>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="4">Obligasi Francaisor Semasa Beroperasi</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Jenis Obligasi</th>
                                                                <th>Nyatakan Klausa Berkaitan</th>
                                                                <th>Tindakan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisor Akan Membantu Francaisi Dalam Pemilihan Tapak Perniagaan?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio2" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio2" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Adakah Tempoh Bertenang Tidak Kurang Dari 7 Hari Bekerja Seperti Termaktub Dalam Akta Francais 1998?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio3" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio3" id="" value="no" checked disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" disabled>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Nyatakan Tempoh Masa Untuk Perniagaan Francais Beroperasi Selepas Perjanjian Ditandatangani</label>
                                                    <br/>
                                                    <select class="form-control select2" id="" name="" disabled>
                                                        <option value=""> - Sila Pilih - </option>
                                                        <option value="1">1 Month</option>
                                                        <option value="2">2 Month</option>
                                                        <option value="3">3 Month</option>
                                                        <option value="4">4 Month</option>
                                                        <option value="5">5 Month</option>
                                                        <option value="6" selected>6 Month</option>
                                                        <option value="7">7 Month</option>
                                                        <option value="8">8 Month</option>
                                                        <option value="9">9 Month</option>
                                                        <option value="10">10 Month</option>
                                                        <option value="11">11 Month</option>
                                                        <option value="12">12 Month</option>
                                                        <option value="999">Others</option>
                                                    </select>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" readonly>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Adakah Syarikat Mengenakan Fi Pengiklanan? Sekiranya Ya, Nyatakan Klausa Di Mana Francaisor Mewujudkan Kumpulan Wang Promosi Secara Berasingan</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio4" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio4" id="" value="no" checked disabled>
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
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisor Menyediakan Latihan Kepada Francaisi Secara Percuma?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio5" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio5" id="" value="no" disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    <small class="text-danger">Jika ya, sila Lengkapkan Jadual Latihan di Bawah</small>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="5">Penyediaan Latihan</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Penerima Latihan</th>
                                                                <th>Bilangan Penerima Latihan</th>
                                                                <th>Tempoh Latihan</th>
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
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisor Mengenakan Bayaran Ke Atas Latihan Berikutnya?</label>
                                                    <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio6" id="" value="yes" disabled>
                                                        <label class="form-check-label" for="">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radio6" id="" value="no" disabled>
                                                        <label class="form-check-label" for="">Tidak</label>
                                                    </div>
                                                    <br/>
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    <small class="text-danger">Jika ya, sila jelaskan jenis latihan, tempoh masa dan fi.</small>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="6">Latihan</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Penerima Latihan</th>
                                                                <th>Jenis Latihan</th>
                                                                <th>Tempoh Latihan</th>
                                                                <th>Latihan Fi</th>
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
                                                    <label for=""><span class="text-danger">* </span>Manual Latihan</label>
                                                    <br/>
                                                    <small class="text-danger">Sila muat naik fail</small>
                                                    <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                                    <br/>
                                                    <small class="text-danger">Sila pastikan perkara wajib berikut terkandung dalam manual latihan.</small>
                                                    <div class="row col-8">
                                                        <table class="table table-bordered table-primary">
                                                            <thead>
                                                                <tr>
                                                                    <th>Perkara</th>
                                                                    <th>Muka Surat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Program Latihan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tempoh Latihan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Penerima Latihan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Kelayakan Pemberi Latihan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Kandungan Latihan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Non Disclosure Manual of Training</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">                                                  
                                                    <label for=""><span class="text-danger">* </span>Manual Operasi</label>
                                                    <br/>
                                                    <small class="text-danger">Sila muat naik fail</small>
                                                    <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                                    <br/>
                                                    <small class="text-danger">Sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control" id="" name="" value="">
                                                    <br/>
                                                    <small class="text-danger">Sila pastikan perkara wajib berikut terkandung dalam manual operasi.</small>
                                                    <div class="row col-8">
                                                        <table class="table table-bordered table-primary">
                                                            <thead>
                                                                <tr>
                                                                    <th>Perkara</th>
                                                                    <th>Muka Surat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Latar Belakang Syarikat</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Sistem Francais Yang Ditawarkan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Non Disclosure Content Of Manual</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Human Resource Management</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Pengurusan Stok Dan Inventori </th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Sistem Point of Sale</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Sistem Keselamatan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Prosedur Pembukaan Dan Penutupan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Advertisement and Promotion</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Sales and Purchase</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Customer Service</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Identiti Korporat</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Pengubahsuaian Peralatan Dan Kelengkapan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Penyelenggaraan Dan Kebersihan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Prosedur Penyediaan Makanan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Prosedur Penyampaian Perkhidmatan</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Pengesahan Penerimaan dan Manual Operasi Oleh Francaisi</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Manual Operasi Oleh Francaisi</th>
                                                                    <td><input type="text" class="form-control"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane p-3" id="rights_obligation" role="tabpanel">
                                    <div class="row card">
                                        <div class="card-header">
                                            <h6>HAK WILAYAH DAN CAP DAGANGAN</h6>
                                        </div>
                                        <div class="card-body">
                                            @php $count = 0; @endphp

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Jadual Hak Kewilayahan</label>
                                                    <br/>

                                                    <table class="table table-bordered table-hover m-t-10">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th colspan="8">Senarai Hak Wilayah</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Bil.</th>
                                                                <th>Nama Pakej</th>
                                                                <th>Hak Wilayah</th>
                                                                <th>Francaisor Boleh Beroperasi Di Wilayah Francaisi</th>
                                                                <th>Sempadan Wilayah Boleh Diubah</th>
                                                                <th>Syarat Sempadan Wilayah Boleh Diubah</th>
                                                                <th>Nyatakan Klausa Berkaitan</th>
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
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Terma Dan Syarat Kepada Francaisi Untuk Menggunakan Cap Dagangan Dan Harta Intelek</label>
                                                    <br/>
                                                    <small class="text-danger">Sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row card">
                                        <div class="card-header">
                                            <h6>FRANCHISE AGREEMENT</h6>
                                        </div>
                                        <div class="card-body">
                                            @php $count = 0; @endphp

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Tempoh Perjanjian Francais</label>
                                                    <br/>
                                                    <select class="form-control select2" id="" name="" disabled="">
                                                        <option value=""> - Sila Pilih - </option>
                                                        <option value="1">1 Year</option>
                                                        <option value="2">2 Years</option>
                                                        <option value="3">3 Years</option>
                                                        <option value="4">4 Years</option>
                                                        <option value="5">5 Years</option>
                                                        <option value="6">6 Years</option>
                                                        <option value="7" selected="">7 Years</option>
                                                        <option value="8">8 Years</option>
                                                        <option value="9">9 Years</option>
                                                        <option value="10">10 Years</option>
                                                        <option value="11">11 Years</option>
                                                        <option value="12">12 Years</option>
                                                        <option value="13">13 Years</option>
                                                        <option value="14">14 Years</option>
                                                        <option value="15">15 Years</option>
                                                        <option value="16">16 Years</option>
                                                        <option value="17">17 Years</option>
                                                        <option value="18">18 Years</option>
                                                        <option value="19">19 Years</option>
                                                        <option value="20">20 Years</option>
                                                        <option value="21">21 Years</option>
                                                        <option value="22">22 Years</option>
                                                        <option value="23">23 Years</option>
                                                        <option value="24">24 Years</option>
                                                        <option value="25">25 Years</option>
                                                        <option value="26">26 Years</option>
                                                        <option value="27">27 Years</option>
                                                        <option value="28">28 Years</option>
                                                        <option value="29">29 Years</option>
                                                        <option value="30">30 Years</option>
                                                        <option value="31">31 Years</option>
                                                        <option value="32">32 Years</option>
                                                        <option value="33">33 Years</option>
                                                        <option value="34">34 Years</option>
                                                        <option value="35">35 Years</option>
                                                        <option value="36">36 Years</option>
                                                        <option value="37">37 Years</option>
                                                        <option value="38">38 Years</option>
                                                        <option value="39">39 Years</option>
                                                        <option value="40">40 Years</option>
                                                        <option value="41">41 Years</option>
                                                        <option value="42">42 Years</option>
                                                        <option value="43">43 Years</option>
                                                        <option value="44">44 Years</option>
                                                        <option value="45">45 Years</option>
                                                        <option value="46">46 Years</option>
                                                        <option value="47">47 Years</option>
                                                        <option value="48">48 Years</option>
                                                        <option value="49">49 Years</option>
                                                        <option value="50">50 Years</option>
                                                        <option value="51">51 Years</option>
                                                        <option value="52">52 Years</option>
                                                        <option value="53">53 Years</option>
                                                        <option value="54">54 Years</option>
                                                        <option value="55">55 Years</option>
                                                        <option value="56">56 Years</option>
                                                        <option value="57">57 Years</option>
                                                        <option value="58">58 Years</option>
                                                        <option value="59">59 Years</option>
                                                        <option value="60">60 Years</option>
                                                        <option value="61">61 Years</option>
                                                        <option value="62">62 Years</option>
                                                        <option value="63">63 Years</option>
                                                        <option value="64">64 Years</option>
                                                        <option value="65">65 Years</option>
                                                        <option value="66">66 Years</option>
                                                        <option value="67">67 Years</option>
                                                        <option value="68">68 years</option>
                                                        <option value="69">69 Years</option>
                                                        <option value="70">70 Years</option>
                                                        <option value="71">71 Years</option>
                                                        <option value="72">72 Years</option>
                                                        <option value="73">73 Years</option>
                                                        <option value="74">74 years</option>
                                                        <option value="75">75 Years</option>
                                                        <option value="76">76 Years</option>
                                                        <option value="77">77 Years</option>
                                                        <option value="78">78 Years</option>
                                                        <option value="79">79 Years</option>
                                                        <option value="80">80 Years</option>
                                                        <option value="81">81 Years</option>
                                                        <option value="82">82 Years</option>
                                                        <option value="83">83 Years</option>
                                                        <option value="84">84 Years</option>
                                                        <option value="85">85 Years</option>
                                                        <option value="86">86 Years</option>
                                                        <option value="87">87 Years</option>
                                                        <option value="88">88 Years</option>
                                                        <option value="89">89 Years</option>
                                                        <option value="90">90 Years</option>
                                                        <option value="91">91 Years</option>
                                                        <option value="92">92 Years</option>
                                                        <option value="93">93 Years</option>
                                                        <option value="94">94 Years</option>
                                                        <option value="95">95 Years</option>
                                                        <option value="96">96 Years</option>
                                                        <option value="97">97 Years</option>
                                                        <option value="98">98 Years</option>
                                                        <option value="99">99 Years</option>
                                                    </select>
                                                    <small class="text-danger">Sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Tempoh Pelanjutan Ke Atas Tempoh Asal Perjanjian Francais (Sekiranya Berkaitan)</label>
                                                    <br/>
                                                    <select class="form-control select2" id="" name="" disabled="">
                                                        <option value=""> - Sila Pilih - </option>
                                                        <option value="1">1 Year</option>
                                                        <option value="2">2 Years</option>
                                                        <option value="3" selected="">3 Years</option>
                                                        <option value="4">4 Years</option>
                                                        <option value="5">5 Years</option>
                                                        <option value="6">6 Years</option>
                                                        <option value="7">7 Years</option>
                                                        <option value="8">8 Years</option>
                                                        <option value="9">9 Years</option>
                                                        <option value="10">10 Years</option>
                                                        <option value="11">11 Years</option>
                                                        <option value="12">12 Years</option>
                                                        <option value="13">13 Years</option>
                                                        <option value="14">14 Years</option>
                                                        <option value="15">15 Years</option>
                                                        <option value="16">16 Years</option>
                                                        <option value="17">17 Years</option>
                                                        <option value="18">18 Years</option>
                                                        <option value="19">19 Years</option>
                                                        <option value="20">20 Years</option>
                                                        <option value="21">21 Years</option>
                                                        <option value="22">22 Years</option>
                                                        <option value="23">23 Years</option>
                                                        <option value="24">24 Years</option>
                                                        <option value="25">25 Years</option>
                                                        <option value="26">26 Years</option>
                                                        <option value="27">27 Years</option>
                                                        <option value="28">28 Years</option>
                                                        <option value="29">29 Years</option>
                                                        <option value="30">30 Years</option>
                                                        <option value="31">31 Years</option>
                                                        <option value="32">32 Years</option>
                                                        <option value="33">33 Years</option>
                                                        <option value="34">34 Years</option>
                                                        <option value="35">35 Years</option>
                                                        <option value="36">36 Years</option>
                                                        <option value="37">37 Years</option>
                                                        <option value="38">38 Years</option>
                                                        <option value="39">39 Years</option>
                                                        <option value="40">40 Years</option>
                                                        <option value="41">41 Years</option>
                                                        <option value="42">42 Years</option>
                                                        <option value="43">43 Years</option>
                                                        <option value="44">44 Years</option>
                                                        <option value="45">45 Years</option>
                                                        <option value="46">46 Years</option>
                                                        <option value="47">47 Years</option>
                                                        <option value="48">48 Years</option>
                                                        <option value="49">49 Years</option>
                                                        <option value="50">50 Years</option>
                                                        <option value="51">51 Years</option>
                                                        <option value="52">52 Years</option>
                                                        <option value="53">53 Years</option>
                                                        <option value="54">54 Years</option>
                                                        <option value="55">55 Years</option>
                                                        <option value="56">56 Years</option>
                                                        <option value="57">57 Years</option>
                                                        <option value="58">58 Years</option>
                                                        <option value="59">59 Years</option>
                                                        <option value="60">60 Years</option>
                                                        <option value="61">61 Years</option>
                                                        <option value="62">62 Years</option>
                                                        <option value="63">63 Years</option>
                                                        <option value="64">64 Years</option>
                                                        <option value="65">65 Years</option>
                                                        <option value="66">66 Years</option>
                                                        <option value="67">67 Years</option>
                                                        <option value="68">68 years</option>
                                                        <option value="69">69 Years</option>
                                                        <option value="70">70 Years</option>
                                                        <option value="71">71 Years</option>
                                                        <option value="72">72 Years</option>
                                                        <option value="73">73 Years</option>
                                                        <option value="74">74 years</option>
                                                        <option value="75">75 Years</option>
                                                        <option value="76">76 Years</option>
                                                        <option value="77">77 Years</option>
                                                        <option value="78">78 Years</option>
                                                        <option value="79">79 Years</option>
                                                        <option value="80">80 Years</option>
                                                        <option value="81">81 Years</option>
                                                        <option value="82">82 Years</option>
                                                        <option value="83">83 Years</option>
                                                        <option value="84">84 Years</option>
                                                        <option value="85">85 Years</option>
                                                        <option value="86">86 Years</option>
                                                        <option value="87">87 Years</option>
                                                        <option value="88">88 Years</option>
                                                        <option value="89">89 Years</option>
                                                        <option value="90">90 Years</option>
                                                        <option value="91">91 Years</option>
                                                        <option value="92">92 Years</option>
                                                        <option value="93">93 Years</option>
                                                        <option value="94">94 Years</option>
                                                        <option value="95">95 Years</option>
                                                        <option value="96">96 Years</option>
                                                        <option value="97">97 Years</option>
                                                        <option value="98">98 Years</option>
                                                        <option value="99">99 Years</option>
                                                    </select>
                                                    <small class="text-danger">Sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Syarat-syarat Untuk Pelanjutan / Pembaharuan Perjanjian Francais</label>
                                                    <br/>
                                                    <small class="text-danger">Sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" required>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Syarat-syarat Untuk Pembaharuan Perjanjian</label>
                                                    <br/>
                                                    <small class="text-danger">Sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="" required>                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisi Dibenarkan Untuk Menamatkan Perjanjian Sebelum Tamat Tempoh?</label>
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
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Adakah Francaisor Dibolehkan Untuk Menamatkan Perjanjian Sebelum Tamat Tempoh?</label>
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
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Obligasi Francaisi Sekiranya Perjanjian Ingin Ditamatkan</label>
                                                    <br/>
                                                    <small class="text-danger">Sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Obligasi Francaisor Sekiranya Perjanjian Ingin Ditamatkan</label>
                                                    <br/>
                                                    <small class="text-danger">Sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Adakah Perjanjian Boleh Diubahsuai Oleh Francaisi Ataupun Francaisor Dengan Persetujuan Bersama?</label>
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
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Adakah Perjanjian Mempunyai Klausa Untuk Pemindahan Hak Francais?</label>
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
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Adakah Perjanjian Mempunyai Klausa Untuk Penyelesaian Pertikaian Melalui Mediasi?</label>
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
                                                    <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                    <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-1">{{ ++$count }}.</div>
                                                <div class="col-sm-11">        
                                                    <label for=""><span class="text-danger">* </span>Contoh Perjanjian Francais</label>
                                                    <input type="file" class="form-control-file" id="" name="" value="" disabled="">                                            
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="tab-pane p-3" id="financial" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#finance_report" role="tab">Laporan Kewangan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#starting_cost" role="tab">Kos Perlaburan Permulaan</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="finance_report" role="tabpanel">
                                    <div class="row card">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for=""><span class="text-danger">* </span>Mata Wang</label>
                                                <select class="form-control select2" id="" name="" disabled="">
                                                    <option value=""> - Sila Pilih - </option>
                                                    <option value="AED100">AED100</option>
                                                    <option value="AUD">AUD</option>
                                                    <option value="BND">BND</option>
                                                    <option value="CAD" selected="">CAD</option>
                                                    <option value="CHF">CHF</option>
                                                    <option value="CNY">CNY</option>
                                                    <option value="EGP">EGP</option>
                                                    <option value="EUR">EUR</option>
                                                    <option value="GBP">GBP</option>
                                                    <option value="HKD">HKD</option>
                                                    <option value="IDR100">IDR100</option>
                                                    <option value="INR100">INR100</option>
                                                    <option value="JPY100">JPY100</option>
                                                    <option value="KHR100">KHR100</option>
                                                    <option value="KRW100">KRW100</option>
                                                    <option value="MMK100">MMK100</option>
                                                    <option value="NPR100">NPR100</option>
                                                    <option value="NZD">NZD</option>
                                                    <option value="PHP100">PHP100</option>
                                                    <option value="PKR100">PKR100</option>
                                                    <option value="PND">PND</option>
                                                    <option value="RM">RM</option>
                                                    <option value="Rupiah">Rupiah</option>
                                                    <option value="SAR100">SAR100</option>
                                                    <option value="SDR">SDR</option>
                                                    <option value="SEK">SEK</option>
                                                    <option value="SGD">SGD</option>
                                                    <option value="THB100">THB100</option>
                                                    <option value="TWD100">TWD100</option>
                                                    <option value="USD">USD</option>
                                                    <option value="VND100">VND100</option>
                                                    <option value="Yen">Yen</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <table class="table table-bordered table-primary">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Kedudukan Kewangan Pada Tahun Kewangan Berakhir..</th>
                                                            <th>Tahun Pertama</th>
                                                            <th>Tahun Kedua</th>
                                                            <th>Tahun Ketiga</th>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control" id="" name=""></td>
                                                            <td><input type="text" class="form-control" id="" name=""></td>
                                                            <td><input type="text" class="form-control" id="" name=""></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>Modal Berbayar</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Pendapatan</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Untung/(rugi) Sebelum Cukai</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Untung/(rugi) Selepas Cukai</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>EBITDA</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Rizab</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Harta Semasa</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tanggungan Semasa</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Harta Bukan Semasa</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tanggungan Bukan Semasa</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Jumlah Aset</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Jumlah Liabiliti</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Ekuiti</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Maklumat lain yang diisi oleh pemohon</th>
                                                            <td>Tahun Pertama 2013</td>
                                                            <td>Tahun Kedua 2014</td>
                                                            <td>Tahun Ketiga 2015</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Susut Nilai Aset</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Amortisasi</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Faedah</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Cukai</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Item Terkecuali Lain</th>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                            <td><input type="text" class="form-control" id="" name="" value="0"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Sila muat-naik akaun teraudit/akaun pengurusan serta nota kepada akaun yang telah disahkan oleh Pesuruhjaya Sumpah, Majistret atau Notari Awam.</label>
                                                <input type="file" class="form-control-file" id="" name="" disabled/>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Nyatakan sebab Kerugian Bagi Kes Rayuan</label>
                                                <textarea class="form-control" id="" name="" rows="7"></textarea>
                                                <br/>
                                                <small class="text-danger">Sila muat-naik dokumen berkaitan yang telah disahkan oleh Pesuruhjaya Sumpah, Majistret atau Notari Awam sebagai bukti.</small>
                                                <input type="file" class="form-control-file" id="" name="" disabled/>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane p-3" id="starting_cost" role="tabpanel">
                                    <div class="row card">
                                        <div class="card-body">

                                            <div class="form-group">
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
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane p-3" id="files_upload" role="tabpanel">
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
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>
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
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>
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
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Gambar Outlet Yang Akan Dijadikan Sebagai Prototaip</label>
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Manual Latihan</label>
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Manual Operasi</label>
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Contoh Perjanjian Francais</label>
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Halaman Laporan Kewangan Berkaitan</label>
                                            <br/>
                                            <small class="text-danger">Sila muat-naik akaun teraudit/akaun pengurusan serta nota kepada akaun yang telah disahkan oleh Pesuruhjaya Sumpah, Majistret atau Notari Awam.</small>
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Akaun Pengurusan Outlet Prototaip</label>
                                            <br/>
                                            <small class="text-danger">Sila muat-naik akaun pengurusan bagi outlet prototaip untuk tempoh sekurang-kurangnya enam(6) bulan beroperasi.</small>
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Lain-lain Dokumen Sokongan</label>
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="tab-pane p-3" id="declaration" role="tabpanel">
                            <div class="row card">
                                <div class="card-body">

                                    <h6>Dekalarasi</h6>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="declare" name="declare" checked="" disabled="">
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