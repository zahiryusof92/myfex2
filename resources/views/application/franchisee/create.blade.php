@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">

                <h4 class="page-title">Daftar Pemegang Francais</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('application.index') }}">Senarai Permohonan</a></li>
                    <li class="breadcrumb-item active">Daftar Pemegang Francais</li>
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
                    <form class="form-horizontal" method="POST" action="{{ route('application.store') }}" data-parsley-validate>
                        @csrf

                        <h6>Pendaftaran Pemegang Francais</h6> 
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="brand_country"><span class="text-danger">* </span>Jenama</label>
                            </div>
                            <div class="col-sm-8">
                                {{ Form::select('brand_name', $approvedBrandList, false, array('id' => 'brand_name' , 'class' => 'form-control select2', 'onchange' => 'getFranchiseType()', 'required')) }}
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="company_name">Nama Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ Auth::user()->company->name }}" autocomplete="company_name" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="company_reg_no">No. Pendaftaran Syarikat</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" value="{{ Auth::user()->company->reg_no }}" autocomplete="company_reg_no" readonly>
                            </div>
                        </div>  

                        <div class="form-group row">       
                            <input type="hidden" id="brandright_id" name="brandright_id" value=""/>
                            <input type="hidden" id="franchise_type_id" name="franchise_type_id" value="{{ App\Helpers\Helper::PEMEGANG_FRANCAIS }}"/>
                            <input type="hidden" id="company_id" name="company_id" value="{{ Auth::user()->company->id }}"/>
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                            </div>
                        </div>
                    </form>

                    @elseif (Auth::user()->isConsultant())

                    @endif

                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
<script type="text/javascript">
    function getFranchiseType() {
        var brand = $('#brand_name').val();
        if (brand) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('application.getFranchiseType') }}",
                type: "post",
                data: {
                    id: $('#brand_name').val()
                },
                success: function (response) {
                    if (response.success) {
                        $('#brandright_id').val(response.brandright_id);
                    }

                }
            });
        } else {
            $('#brandright_id').val('');
        }
    }
</script>
@endsection
