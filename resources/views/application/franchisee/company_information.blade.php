@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Daftar Pemegang Francais</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="{{ route('application.index') }}">Senarai Permohonan</a></li>
    <li class="breadcrumb-item active">Daftar Pemegang Francais</li>
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
                            <a class="nav-link" href="{{ route('application.filesUpload', [$application->id]) }}" role="tab">Muat Naik Fail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('application.declaration', [$application->id]) }}" role="tab">Deklarasi</a>
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
                                    <a class="nav-link" href="{{ route('application.franchiseeInformation', [$application->id]) }}" role="tab">Maklumat Francaisi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('application.businessInformation', [$application->id]) }}" role="tab">Maklumat Perniagaan Francais</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="company_information" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

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
                                                <label for=""><span class="text-danger">* </span>Tarikh Daftar</label>
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
