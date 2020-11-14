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
                            <a class="nav-link active" data-toggle="tab" href="#financial" role="tab">Maklumat Kewangan</a>
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
                        <div class="tab-pane active p-3" id="financial" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#finance_report" role="tab">Laporan Kewangan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('amendment.startingCost', [$amendment->id]) }}" role="tab">Kos Perlaburan Permulaan</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="finance_report" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

                                        <div class="row card">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label for=""><span class="text-danger">* </span>Mata Wang</label>
                                                    <select class="form-control select2" id="" name="" required>
                                                        <option value=""> - Sila Pilih - </option>
                                                        <option value="AED100">AED100</option>
                                                        <option value="AUD">AUD</option>
                                                        <option value="BND">BND</option>
                                                        <option value="CAD">CAD</option>
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
                                                    <input type="file" class="form-control-file" id="" name=""/>
                                                </div>
                                                
                                                 <div class="form-group">
                                                    <label for="">Nyatakan sebab Kerugian Bagi Kes Rayuan</label>
                                                    <textarea class="form-control" id="" name="" rows="7"></textarea>
                                                    <br/>
                                                    <small class="text-danger">Sila muat-naik dokumen berkaitan yang telah disahkan oleh Pesuruhjaya Sumpah, Majistret atau Notari Awam sebagai bukti.</small>
                                                    <input type="file" class="form-control-file" id="" name=""/>
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
                    window.location.href = "{{ route('amendment.capitalEquity', [$amendment->id]) }}";
                });
            }
        });
    });
</script>
@endsection
