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
                                    <a class="nav-link active" data-toggle="tab" href="#business_operation" role="tab">Operasi Perniagaan Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('amendment.businessInformation', [$amendment->id]) }}" role="tab">Maklumat Perniagaan Francais</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="business_operation" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

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
                                                        <textarea class="form-control" id="" name="" rows="5" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Nyatakan Dengan Ringkas Kriteria Pemilihan Jenis Lokasi Perniagaan Francais</label>
                                                        <textarea class="form-control" id="" name="" rows="5" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Nyatakan Dengan Ringkas Keunikan Sistem Perniagaan Francais Yang Ditawarkan</label>
                                                        <textarea class="form-control" id="" name="" rows="5" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Brosur Perniagaan / Profil Syarikat</label>
                                                        <input type="file" class="form-control-file" id="" name="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Gambar Outlet Yang Akan Dijadikan Sebagai Prototaip</label>
                                                        <input type="file" class="form-control-file" id="" name="" required>
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
                                                            <input class="form-check-input" type="radio" name="radio1" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio1" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <br/>
                                                        <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Sistem Perakaunan Berkomputer</label>
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
                                                        <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Sistem Keselamatan</label>
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
                                                        <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Sistem Dapur Berpusat</label>
                                                        <br/>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio4" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio4" id="" value="no">
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio4" id="" value="no" required>
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
                                                            <input class="form-check-input" type="radio" name="radio5" id="" value="yes">
                                                            <label class="form-check-label" for="">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio5" id="" value="no" required>
                                                            <label class="form-check-label" for="">Tidak</label>
                                                        </div>
                                                        <br/>
                                                        <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Tambahan Inovasi Dan Kreativiti Kepada Perniagaan</label>
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
                                                        <small class="text-danger">Jika ya, sila isikan maklumat</small>
                                                        <input type="text" class="form-control m-t-10" id="" name="" value="">                                            
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
                                                        <textarea class="form-control" id="" name="" rows="5" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Nyatakan Dengan Ringkas Pelan Pemasaran Bagi Mempromosikan Produk / Perkhidmatan</label>
                                                        <textarea class="form-control" id="" name="" rows="5" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-1">{{ ++$count }}.</div>
                                                    <div class="col-sm-11">
                                                        <label for=""><span class="text-danger">* </span>Nyatakan Jumlah Dana Yang Akan Diperuntukkan Bagi Tujuan Promosi Oleh Francaisor (RM)</label>
                                                        <textarea class="form-control" id="" name="" rows="5" required></textarea>
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
                });
            }
        });
    });
</script>
@endsection
