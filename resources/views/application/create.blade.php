@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Daftar Permohonan</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('application.index') }}">Senarai Permohonan</a></li>
                    <li class="breadcrumb-item active">Daftar Permohonan</li>
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
                    <form class="form-horizontal" method="POST" action="" data-parsley-validate>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Company Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#obligations" role="tab">Franchise Business Obligations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#financial" role="tab">Financial Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#file" role="tab">Upload File</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#declaration" role="tab">Declaration</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="profile" role="tabpanel">

                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#company" role="tab">Company Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#capital_equity" role="tab">Capital and Equity</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#operation" role="tab">Franchise Business Operation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#information" role="tab">Franchise Business Information</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane p-3" id="obligations" role="tabpanel">
                                <p class="font-14 mb-0">

                                </p>
                            </div>
                            <div class="tab-pane p-3" id="financial" role="tabpanel">
                                <p class="font-14 mb-0">

                                </p>
                            </div>
                            <div class="tab-pane p-3" id="file" role="tabpanel">
                                <p class="font-14 mb-0">

                                </p>
                            </div>
                            <div class="tab-pane p-3" id="declaration" role="tabpanel">
                                <p class="font-14 mb-0">

                                </p>
                            </div>
                        </div>
                    </form>
                    @elseif (Auth::user()->isConsultant())
                    <form class="form-horizontal" method="POST" action="" data-parsley-validate>

                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>

</div>

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
