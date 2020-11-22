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
                                    <a class="nav-link" href="{{ route('application.franchiseeObligation', [$application->id]) }}" role="tab">Obligasi Francaisi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#franchisor_obligation" role="tab">Obligasi Francaisor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('application.rightsObligation', [$application->id]) }}" role="tab">Hak Dan Obligasi</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="franchisor_obligation" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

                                        <div class="row card">
                                            <div class="card-body">
                                                @php $count = 0; @endphp

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">        
                                                        <label for=""><span class="text-danger">* </span>Kemudahan Yang Akan Disediakan Kepada Francaisi</label>
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
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Kemudahan</button>

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
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Obligasi</button>

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
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Obligasi</button>

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
                                                        <label for=""><span class="text-danger">* </span>Adakah Tempoh Bertenang Tidak Kurang Dari 7 Hari Bekerja Seperti Termaktub Dalam Akta Francais 1998?</label>
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
                                                        <label for=""><span class="text-danger">* </span>Nyatakan Tempoh Masa Untuk Perniagaan Francais Beroperasi Selepas Perjanjian Ditandatangani</label>
                                                        <br/>
                                                        <select class="form-control select2" id="" name="" required>
                                                            <option value=""> - Sila Pilih - </option>
                                                            <option value="1">1 Month</option>
                                                            <option value="2">2 Month</option>
                                                            <option value="3">3 Month</option>
                                                            <option value="4">4 Month</option>
                                                            <option value="5">5 Month</option>
                                                            <option value="6">6 Month</option>
                                                            <option value="7">7 Month</option>
                                                            <option value="8">8 Month</option>
                                                            <option value="9">9 Month</option>
                                                            <option value="10">10 Month</option>
                                                            <option value="11">11 Month</option>
                                                            <option value="12">12 Month</option>
                                                            <option value="999">Others</option>
                                                        </select>
                                                        <small class="text-danger">Jika ya, sila nyatakan no. klausa yang berkaitan</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">        
                                                        <label for=""><span class="text-danger">* </span>Adakah Syarikat Mengenakan Fi Pengiklanan? Sekiranya Ya, Nyatakan Klausa Di Mana Francaisor Mewujudkan Kumpulan Wang Promosi Secara Berasingan</label>
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
                                                        <label for=""><span class="text-danger">* </span>Adakah Francaisor Menyediakan Latihan Kepada Francaisi Secara Percuma?</label>
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
                                                        <small class="text-danger">Jika ya, sila Lengkapkan Jadual Latihan di Bawah</small>
                                                        <br/>
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Latihan</button>

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
                                                        <small class="text-danger">Jika ya, sila jelaskan jenis latihan, tempoh masa dan fi.</small>
                                                        <br/>
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Latihan Fi</button>

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
                                                        <input type="file" class="form-control-file" id="" name="" value="" required>
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
                                                        <input type="file" class="form-control-file" id="" name="" value="" required>
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
