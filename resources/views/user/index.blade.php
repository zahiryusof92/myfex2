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
                <h4 class="page-title">Senarai Pengguna</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                    <li class="breadcrumb-item active">Senarai Pengguna</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end row -->

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
                                <th>Tarikh Permohonan</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('user.show', 1) }}">user</a></td>
                                <td>Pengguna Perniagaan Francais</td>
                                <td>user@myfex.com</td>
                                <td>Pengguna Perniagaan Francais</td>
                                <td>21-Oct-2020</td>
                                <td><span class="badge badge-pill badge-success">Diluluskan</span></td>
                                <td><a href="{{ route('user.show', 1) }}" class="btn btn-primary btn-sm waves-effect waves-light">View</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('user.show', 2) }}">konsultan</a></td>
                                <td>Pengguna Konsultan Francais</td>
                                <td>konsultan@myfex.com</td>
                                <td>Pengguna Konsultant Francais</td>
                                <td>22-Oct-2020</td>
                                <td><span class="badge badge-pill badge-info">Dinilai</span></td>
                                <td><a href="{{ route('user.show', 2) }}" class="btn btn-primary btn-sm waves-effect waves-light">View</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('user.show', 3) }}">broker</a></td>
                                <td>Pengguna Broker Francais</td>
                                <td>broker@myfex.com</td>
                                <td>Pengguna Konsultant Francais</td>
                                <td>23-Oct-2020</td>
                                <td><span class="badge badge-pill badge-warning">Baru</span></td>
                                <td><a href="{{ route('user.show', 3) }}" class="btn btn-primary btn-sm waves-effect waves-light">View</a></td>
                            </tr>
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
    $('#user_datatable').DataTable({
        order: [4, 'desc'],
        columnDefs: [
            {
                targets: -1, orderable: false, searchable: false
            }
        ]
    });
});
</script>
@endsection