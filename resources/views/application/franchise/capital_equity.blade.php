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
                                    <a class="nav-link" href="{{ route('application.companyInformation', [$application->id]) }}" role="tab">Maklumat Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#capital_equity" role="tab">Modal dan Ekuiti</a>
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
                                <div class="tab-pane active p-3" id="capital_equity" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

                                        <div class="row card">
                                            <div class="card-body">
                                                @php $count = 0; @endphp

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Modal Dibenarkan</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Modal Berbayar</label>
                                                        <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Tuntutan Kewangan</label>
                                                        <br/>
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tuntutan Kewangan</button>

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
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Akaun Syarikat</button>

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
                                                            <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                        </div>
                                                        <div class="form-group col-6">
                                                            <label>Bukan Bumiputera: RM</label>
                                                            <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                        </div>
                                                        <div class="form-group col-6">
                                                            <label>Warganegara Asing: RM</label>
                                                            <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Maklumat Pengarah</label>
                                                        <br/>
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Pengarah</button>

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
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Pemegang Saham</button>

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
                                                            <input class="form-check-input" type="radio" name="radio1" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio1" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <br/>
                                                        <small class="text-danger">Jika ya, sila muat naik Borang 32 A</small>
                                                        <input type="file" class="form-control-file m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Syarikat Dan Ahli Lembaga Pengarah Adalah Bebas Daripada Tindakan Undang-undang</label>
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
                                                        <small class="text-danger">Jika tidak, sila isikan tindakan</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Syarikat Dan Ahli Lembaga Pengarah Adalah Bebas Dari Kebankrapan</label>
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
                                                        <small class="text-danger">Jika tidak, sila muat naik Surat Jabatan Insolvensi</small>
                                                        <input type="file" class="form-control-file m-t-10" id="" name="" value="">                                            
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
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Pengecualian</button>

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
                });
            }
        });
    });
</script>
@endsection
