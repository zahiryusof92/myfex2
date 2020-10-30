@extends('layouts.master')

@section('css')
<!-- DataTables -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Senarai Permohonan</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                    <li class="breadcrumb-item active">Senarai Permohonan</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                @if (Auth::user()->isUser())                
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            @if (App\Models\BrandRights::getApprovedOwnBrand())
                            <a href="{{ route('application.create') }}" class="btn btn-primary w-md waves-effect waves-light m-r-5">
                                Daftar Pemberi Francais <i class="mdi mdi-plus"></i>
                            </a>
                            @endif
                            <a href="{{ route('application.create') }}" class="btn btn-secondary w-md waves-effect waves-light">
                                Daftar Pemegang Francais <i class="mdi mdi-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @elseif (Auth::user()->isConsultant())
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('application.create') }}" class="btn btn-primary w-md waves-effect waves-light">
                                Daftar Jenama <i class="mdi mdi-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

                <div class="card-body">

                    <table id="application_datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Jenama</th>
                                <th>No. Pendaftaran Syarikat</th>
                                <th>Name Syarikat</th>
                                <th>Status</th>
                                <th>Tarikh Permohonan</th>                                
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
@endsection

@section('script')
<!-- Required datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script>
$(document).ready(function () {
    $("#application_datatable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('application.index') }}",
        columns: [
            {data: 'brand_name', name: 'brand_name'},
            {data: 'company_reg_no', name: 'company_reg_no'},
            {data: 'company_name', name: 'company_name'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'}
        ],
        order: [4, 'desc']
    });
});
</script>
@endsection