@extends('layouts.master')

@section('css')
<!-- DataTables -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<h4 class="page-title">Senarai Pengguna</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item active">Senarai Pengguna</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <table id="user_datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>E-mel</th>
                                <th>Jenis Pengguna</th>
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
<!-- end container-fluid -->
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
    $("#user_datatable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('user.index') }}",
        columns: [
            {data: 'username', name: 'username'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'role', name: 'role'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'}
        ],
        order: [5, 'desc']
    });
});
</script>
@endsection