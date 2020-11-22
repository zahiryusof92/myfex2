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
                                    <a class="nav-link" href="{{ route('application.companyInformation', [$application->id]) }}" role="tab">Maklumat Syarikat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('application.franchiseeInformation', [$application->id]) }}" role="tab">Maklumat Francaisi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#business_information" role="tab">Maklumat Perniagaan</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="business_information" role="tabpanel">
                                    <form class="form-horizontal m-t-10" method="POST" action="" data-parsley-validate>

                                        @php $count = 0; @endphp

                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Jualan Kasar (RM)</label>
                                                <input type="text" class="form-control" id="" name="" value="" autocomplete="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Keuntungan Sebelum Cukai (RM)</label>
                                                <input type="text" class="form-control" id="" name="" value="" autocomplete="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>Tarikh Mula Perniagaan Beroperasi</label>
                                                <input type="date" class="form-control" id="" name="" value="" autocomplete="">
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

                                        <div class="form-group row">
                                            <div class="col-sm-1">{{ ++$count }}.</div>
                                            <div class="col-sm-11">
                                                <label for=""><span class="text-danger">* </span>No. Pekerja</label>
                                                <div class="form-group col-6">
                                                    <label>Bumiputera</label>
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>Bukan Bumiputera</label>
                                                    <input type="text" class="form-control" id="" name="" value="" autocomplete="" required>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>Warganegara Asing</label>
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
                });
            }
        });
    });
</script>
@endsection
