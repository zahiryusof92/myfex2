@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Daftar Jenama</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="{{ route('brandRights.index') }}">Senarai Jenama</a></li>
    <li class="breadcrumb-item active">Daftar Jenama</li>
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
                            <a href="{{ route('brandRights.index') }}" class="btn btn-danger w-md waves-effect waves-light">
                                <i class="mdi mdi-undo mdi-18px"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (Auth::user()->isUser())
                    <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                        <h6>Maklumat Jenama</h6>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="brand_name"><span class="text-danger">* </span>Nama Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ old('brand_name') }}" autocomplete="brand_name" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="brand_company"><span class="text-danger">* </span>Nama Syarikat Pemegang Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="brand_company" name="brand_company" value="{{ old('brand_company') }}" autocomplete="brand_company" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="brand_country"><span class="text-danger">* </span>Negara Asal Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                {{ Form::select('brand_country', $countryList, false, array('class' => 'form-control select2', 'required')) }}
                            </div>
                        </div>

                        <h6>Maklumat Hak Penggunaan Jenama di Malaysia</h6>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="company_name">Nama Syarikat Berhak Untuk Penggunaan Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ Auth::user()->company->name }}" autocomplete="company_name" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="company_reg_no">No. Pendaftaran Syarikat Berhak Untuk Penggunaan Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" value="{{ Auth::user()->company->reg_no }}" autocomplete="company_reg_no" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="franchise_type"><span class="text-danger">* </span>Peranan (Pemberi Francais / Francaisi Induk)</label>
                            </div>
                            <div class="col-sm-8">
                                {{ Form::select('franchise_type', $franchiseTypeList, false, array('class' => 'form-control', 'required')) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="myipo_ref_no"><span class="text-danger">* </span>No. Rujukan MyIPO</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="myipo_ref_no" name="myipo_ref_no" value="{{ old('myipo_ref_no') }}" autocomplete="myipo_ref_no" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="deed_of_assigment"><span class="text-danger">* </span>Deed of Assignment (DoA)</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" id="deed_of_assigment" name="deed_of_assigment" data-input="true" data-buttonname="btn-secondary" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="start_date"><span class="text-danger">* </span>Tarikh Mula DoA</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}" autocomplete="start_date" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="end_date"><span class="text-danger">* </span>Tarikh Akhir DoA</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date') }}" autocomplete="end_date" required>
                            </div>
                        </div>
                        <div class="form-group row">                                
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                            </div>
                        </div>
                    </form>
                    @elseif (Auth::user()->isConsultant())
                    <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                        <h6>Maklumat Jenama</h6>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="brand_name"><span class="text-danger">* </span>Nama Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ old('brand_name') }}" autocomplete="brand_name" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="brand_company"><span class="text-danger">* </span>Nama Syarikat Pemegang Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="brand_company" name="brand_company" value="{{ old('brand_company') }}" autocomplete="brand_company" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="brand_country"><span class="text-danger">* </span>Negara Asal Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                {{ Form::select('brand_country', $countryList, false, array('class' => 'form-control select2', 'required')) }}
                            </div>
                        </div>

                        <h6>Maklumat Hak Penggunaan Jenama di Malaysia</h6>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="company_name">Nama Syarikat Berhak Untuk Penggunaan Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                {{ Form::select('company_name', $companyList, false, array('id' => 'company_name', 'class' => 'form-control select2', 'onChange' => 'getRegNo()', 'required')) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="company_reg_no">No. Pendaftaran Syarikat Berhak Untuk Penggunaan Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" value="" autocomplete="company_reg_no" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="franchise_type"><span class="text-danger">* </span>Peranan (Pemberi Francais / Francaisi Induk)</label>
                            </div>
                            <div class="col-sm-8">
                                {{ Form::select('franchise_type', $franchiseTypeList, false, array('class' => 'form-control', 'required')) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="myipo_ref_no"><span class="text-danger">* </span>No. Rujukan MyIPO</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="myipo_ref_no" name="myipo_ref_no" value="{{ old('myipo_ref_no') }}" autocomplete="myipo_ref_no" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="deed_of_assigment"><span class="text-danger">* </span>Deed of Assignment (DoA)</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" id="deed_of_assigment" name="deed_of_assigment" data-input="true" data-buttonname="btn-secondary" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="start_date"><span class="text-danger">* </span>Tarikh Mula DoA</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}" autocomplete="start_date" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="end_date"><span class="text-danger">* </span>Tarikh Akhir DoA</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date') }}" autocomplete="end_date" required>
                            </div>
                        </div>
                        <div class="form-group row">                                
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                            </div>
                        </div>
                    </form>
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
    function getRegNo() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('brandRights.getRegNo') }}",
            type: "post",
            data: {
                id: $('#company_name').val()
            },
            success: function (response) {
                $('#company_reg_no').val(response);
            }
        });
    }
</script>
@endsection
