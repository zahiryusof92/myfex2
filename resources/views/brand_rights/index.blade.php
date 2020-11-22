@extends('layouts.master')

@section('css')
<!-- DataTables -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<h4 class="page-title">Senarai Jenama</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item active">Senarai Jenama</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                @if (Auth::user()->isUser())
                @if (App\Models\BrandRights::getApprovedOwnBrand())
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('brandRights.create') }}" class="btn btn-primary w-md waves-effect waves-light">
                                Daftar Jenama <i class="mdi mdi-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @elseif (Auth::user()->isConsultant())
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('brandRights.create') }}" class="btn btn-primary w-md waves-effect waves-light">
                                Daftar Jenama <i class="mdi mdi-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

                <div class="card-body">

                    <table id="brand_rights_datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Jenama</th>
                                <th>Syarikat Pemilik</th>
                                <th>Negara Asal</th>
                                <th>No. Pendaftaran</th>
                                <th>Syarikat Berhak</th>
                                <th>Jenis Francais</th>
                                <th>Status</th>
                                <th>Tarikh Permohonan</th>                                
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

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
<!-- Required datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script>
$(document).ready(function () {
    $("#brand_rights_datatable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('brandRights.index') }}",
        columns: [
            {data: 'brand_name', name: 'brand_name'},
            {data: 'brand_company', name: 'brand_company'},
            {data: 'brand_country', name: 'brand_country'},
            {data: 'company_reg_no', name: 'company_reg_no'},
            {data: 'company_name', name: 'company_name'},
            {data: 'franchise_type', name: 'franchise_type'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'}
        ],
        order: [7, 'desc']
    });
});
</script>
@endsection