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
                            <a class="nav-link active" data-toggle="tab" href="#obligations" role="tab">Obligasi Perniagaan Francais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('amendment.financeReport', [$amendment->id]) }}" role="tab">Maklumat Kewangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('amendment.filesUpload', [$amendment->id]) }}" role="tab">Muat Naik Fail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('amendment.declaration', [$amendment->id]) }}" role="tab">Deklarasi</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="obligations" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('amendment.franchiseeObligation', [$amendment->id]) }}" role="tab">Obligasi Francaisi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('amendment.franchisorObligation', [$amendment->id]) }}" role="tab">Obligasi Francaisor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#rights_obligation" role="tab">Hak Dan Obligasi</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="rights_obligation" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

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
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Hak Wilayah</button>

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
                                                        <select class="form-control select2" id="" name="" required>
                                                            <option value=""> - Sila Pilih - </option>
                                                            <option value="1">1 Year</option>
                                                            <option value="2">2 Years</option>
                                                            <option value="3">3 Years</option>
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
                                                        <label for=""><span class="text-danger">* </span>Tempoh Pelanjutan Ke Atas Tempoh Asal Perjanjian Francais (Sekiranya Berkaitan)</label>
                                                        <br/>
                                                        <select class="form-control select2" id="" name="" required>
                                                            <option value=""> - Sila Pilih - </option>
                                                            <option value="1">1 Year</option>
                                                            <option value="2">2 Years</option>
                                                            <option value="3">3 Years</option>
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
                                                        <input type="file" class="form-control-file" id="" name="" value="" required>                                            
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
                    window.location.href = "{{ route('amendment.capitalEquity', [$amendment->id]) }}";
                });
            }
        });
    });
</script>
@endsection
