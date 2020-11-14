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
                            <a class="nav-link active" data-toggle="tab" href="#company_information" role="tab">Profil Syarikat</a>
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
                            <a class="nav-link" href="{{ route('amendment.declaration', [$amendment->id]) }}" role="tab">Deklarasi</a>
                        </li>
                    </ul>


                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="company_information" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('amendment.companyInformation', [$amendment->id]) }}" role="tab">Maklumat Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('amendment.capitalEquity', [$amendment->id]) }}" role="tab">Modal dan Ekuiti</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('amendment.businessOperation', [$amendment->id]) }}" role="tab">Operasi Perniagaan Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#business_information" role="tab">Maklumat Perniagaan Francais</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="business_information" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

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
                                                        <select class="form-control select2" id="" name="" required>
                                                            <option value=""> - Sila Pilih - </option>
                                                            <optgroup label="Makanan dan Minuman">
                                                                <option value="sektor-1-a">Restoran</option>
                                                                <option value="sektor-1-b">Kopitiam</option>
                                                                <option value="sektor-1-c">Medan Selera</option>
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
                                                        <select class="form-control select2" id="" name="" required>
                                                            <option value=""> - Sila Pilih - </option>
                                                            <option value="agensi-3">Badan Pertauliahan yang Berkaitan</option>
                                                            <option value="agensi-4">Ministry of Education</option>
                                                            <option value="agensi-2">Ministry of Health</option>
                                                            <option value="agensi-5">Ministry of Higher Education</option>
                                                            <option value="agensi-x">Not Applicable</option>
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
                                                        <textarea class="form-control" id="" name="" rows="5" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Konsep Perniagaan</label>
                                                        <br/>
                                                        <button class="btn btn-success w-md waves-effect waves-light">Tambah Konsep Perniagaan</button>

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
                                                            <input class="form-check-input" type="radio" name="radio1" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio1" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
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
