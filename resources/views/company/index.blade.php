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
                <h4 class="page-title">Senarai Syarikat</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                    <li class="breadcrumb-item active">Senarai Syarikat</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                @if (Auth::user()->isConsultant())
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('company.create') }}" class="btn btn-primary w-md waves-effect waves-light">
                                Daftar Syarikat <i class="mdi mdi-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                
                <div class="card-body">

                    <table id="company_datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No. Pendaftaran Syarikat</th>
                                <th>Nama Syarikat</th>
                                <th>E-mel Syarikat</th>
                                <th>No. Telefon Syarikat</th>
                                <th>Tarikh Permohonan</th>
                                <th>Status</th>
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
    $("#company_datatable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('company.index') }}",
        columns: [
            {data: 'reg_no', name: 'username'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone_no', name: 'phone_no'},
            {data: 'created_at', name: 'created_at'},
            {data: 'status', name: 'status'}
        ],
        order: [4, 'desc']
    });
});
</script>
@endsection