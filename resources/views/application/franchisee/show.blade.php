@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Maklumat Pemegang Francais</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="{{ route('application.index') }}">Senarai Permohonan</a></li>
    <li class="breadcrumb-item active">Maklumat Pemegang Francais</li>
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
                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profil Syarikat</a>
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
                        <div class="tab-pane active p-3" id="profile" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#company_information" role="tab">Maklumat Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#capital_equity" role="tab">Maklumat Francaisi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#business_information" role="tab">Maklumat Perniagaan Francais</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="company_information" role="tabpanel">
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
                                            <label for=""><span class="text-danger">* </span>Tarikh Daftar</label>
                                            <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
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

                                </div>

                                <div class="tab-pane p-3" id="capital_equity" role="tabpanel">
                                    @php $count = 0; @endphp
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
                                            <label for=""><span class="text-danger">* </span>Nama Francaisor</label>
                                            <br/>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio1" id="" value="yes" disabled>
                                                <label class="form-check-label" for="">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio1" id="" value="no" checked disabled>
                                                <label class="form-check-label" for="">Tidak Berkaitan</label>
                                            </div>
                                            <br/>
                                            <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                            <br/>

                                            <table class="table table-bordered table-hover m-t-10">
                                                <thead>
                                                    <tr class="table-active">
                                                        <th colspan="7">Senarai Francaisor</th>
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
                                            <label for=""><span class="text-danger">* </span>Tarikh Perjanjian Dibuat</label>
                                            <input type="text" class="form-control" id="" name="" value="" readonly>                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Tempoh Perjanjian</label>
                                            <input type="text" class="form-control" id="" name="" value="" readonly>                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Jenis Perniagaan Francais Yang Dijalankan</label>
                                            <textarea class="form-control" id="" name="" value="" rows="3" readonly></textarea>                                         
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Konsep Perniagaan Francais Yang Dijalankan</label>
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
                                            <label for=""><span class="text-danger">* </span>Sektor Perniagaan Yang Ingin Difrancaiskan</label>
                                            <select class="form-control select2" id="" name="" disabled>
                                                <option value=""> - Sila Pilih - </option>
                                                <optgroup label="Makanan dan Minuman">
                                                    <option value="sektor-1-a">Restoran</option>
                                                    <option value="sektor-1-b">Kopitiam</option>
                                                    <option value="sektor-1-c">Medan Selera</option>
                                                    <option value="sektor-1-d" selected>Outlet Makanan Segera</option>
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
                                                <option value="agensi-5" selected>Ministry of Higher Education</option>
                                                <option value="agensi-x">Not Applicable</option>
                                                <option value="agensi-99">Other Agencies</option>
                                                <option value="agensi-6">Social Welfare Department</option>
                                                <option value="agensi-1">Suruhanjaya Pengangkutan Awam Darat [SPAD)</option>
                                            </select>
                                            <input type="file" class="form-control-file m-t-10" id="" name="" value="" disabled>  
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">        
                                            <label for=""><span class="text-danger">* </span>Salinan Perjanjian Francais</label>
                                            <input type="file" class="form-control-file" id="" name="" value="" disabled>                                            
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane p-3" id="business_information" role="tabpanel">
                                    @php $count = 0; @endphp

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Jualan Kasar (RM)</label>
                                            <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Keuntungan Sebelum Cukai (RM)</label>
                                            <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>Tarikh Mula Perniagaan Beroperasi</label>
                                            <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
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

                                    <div class="form-group row">
                                        <div class="col-sm-1">{{ ++$count }}.</div>
                                        <div class="col-sm-11">
                                            <label for=""><span class="text-danger">* </span>No. Pekerja</label>
                                            <div class="form-group col-6">
                                                <label>Bumiputera</label>
                                                <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Bukan Bumiputera</label>
                                                <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Warganegara Asing</label>
                                                <input type="text" class="form-control" id="" name="" value="" autocomplete="" readonly>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="tab-pane p-3" id="files_upload" role="tabpanel">
                            @php $count = 0; @endphp

                            <h6>SIJIL / BORANG / SURAT</h6>

                            <div class="form-group row">
                                <div class="col-sm-1">{{ ++$count }}.</div>
                                <div class="col-sm-11">
                                    <label for=""><span class="text-danger">* </span>Salinan Perjanjian Francais</label>
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

                            <div class="form-group row">
                                <div class="col-sm-1">{{ ++$count }}.</div>
                                <div class="col-sm-11">
                                    <label for=""><span class="text-danger">* </span>Surat Tawaran Kepada Francaisor</label>
                                    <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-1">{{ ++$count }}.</div>
                                <div class="col-sm-11">
                                    <label for=""><span class="text-danger">* </span>Sijil Pendaftaran SSM (Bagi syarikat berstatus ROB)</label>
                                    <input type="file" class="form-control-file" id="" name="" value="" disabled>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane p-3" id="declaration" role="tabpanel">
                            <h6>Dekalarasi</h6>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="declare" name="declare" checked disabled>
                                    <label class="custom-control-label" for="declare">Saya mengaku segala maklumat yang diberikan adalah benar dan tepat dan saya memahami bahawa saya akan dikenakan tindakan undang-undang sekiranya Pendaftar Francais pada bila-bila masa mendapati maklumat pendaftaran yang dimaklumkan adalah palsu.</label>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="">Makluman kepada Pendaftar Francais (jika ada)</label>
                                <textarea class="form-control" id="" name="" rows="7"></textarea>
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