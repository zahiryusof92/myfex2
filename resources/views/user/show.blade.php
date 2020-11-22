@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Maklumat Pengguna</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Senarai Pengguna</a></li>
    <li class="breadcrumb-item active">Maklumat Pengguna</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-20">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a href="{{ route('user.index') }}" class="btn btn-danger w-md waves-effect waves-light">
                                <i class="mdi mdi-undo mdi-18px"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <h6>Maklumat Individu</h6>                        
                    <dl class="row">
                        <dt class="col-sm-4">Username</dt>
                        <dd class="col-sm-8">{{ $user->username}}</dd>

                        <dt class="col-sm-4">Nama</dt>
                        <dd class="col-sm-8">{{ $user->name}}</dd>

                        <dt class="col-sm-4">E-mel</dt>
                        <dd class="col-sm-8">{{ $user->email}}</dd>

                        <dt class="col-sm-4">Jenis Pengguna</dt>
                        <dd class="col-sm-8">{{ $user->role_id ? $user->role->name : '-' }}</dd>
                    </dl>

                    @if ($user->company_id)
                    <h6>Maklumat Syarikat</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Nama Syarikat</dt>
                        <dd class="col-sm-8">{{ $user->company->name }}</dd>

                        <dt class="col-sm-4">Nama Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $user->company->name_old ? $user->company->name_old : '-' }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat</dt>
                        <dd class="col-sm-8">{{ $user->company->reg_no }}</dd>

                        <dt class="col-sm-4">No. Pendaftaran Syarikat (Lama)</dt>
                        <dd class="col-sm-8">{{ $user->company->reg_no_old ? $user->company->reg_no_old : '-' }}</dd>

                        <dt class="col-sm-4">E-mel Syarikat</dt>
                        <dd class="col-sm-8">{{ $user->company->email }}</dd>

                        <dt class="col-sm-4">Sijil Pendaftaran Syarikat Malaysia (SSM)</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($user->company->ssm_cert) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $user->company->ssm_cert }}
                            </a>
                        </dd>

                        <dt class="col-sm-4">Surat Perwakilan Kuasa</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset($user->company->auth_letter) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-24px"></i> {{ $user->company->auth_letter }}
                            </a>
                        </dd>
                    </dl>
                    @endif

                    <h6>Maklumat Permohonan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Tarikh Permohonan</dt>
                        <dd class="col-sm-8">{{ $user->created_at->format('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Status Permohonan</dt>
                        <dd class="col-sm-8">{!! $user->getStatus() !!}</dd>
                    </dl>

                    @if ($user->status == App\Models\User::BARU)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">
                            <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Ulasan penilaian" required></textarea>
                                </div>
                                <div class="form-group row m-t-10">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                                    </div>
                                </div>
                            </form>
                        </dd>
                    </dl>
                    @elseif ($user->status == App\Models\User::DINILAI)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap dan layak untuk diluluskan</dd>
                    </dl>

                    <h6>Maklumat Kelulusan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Keputusan Kelulusan</dt>
                        <dd class="col-sm-8">
                            <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="">- Sila Pilih -</option>
                                        <option value="1">Diluluskan</option>
                                        <option value="2">Ditolak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Ulasan Kelulusan" required></textarea>
                                </div>
                                <div class="form-group row m-t-10">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar <i class="mdi mdi-send"></i></button>
                                    </div>
                                </div>
                            </form>
                        </dd>
                    </dl>
                    @elseif ($user->status == App\Models\User::DILULUS)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap dan layak untuk diluluskan</dd>
                    </dl>

                    <h6>Maklumat Kelulusan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Kelulusan Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Kelulusan</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Kelulusan</dt>
                        <dd class="col-sm-8">Maklumat permohonan lengkap</dd>
                    </dl>
                    @elseif ($user->status == App\Models\User::DITOLAK)
                    <h6>Maklumat Penilaian</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penilaian Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penilaian</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penilaian</dt>
                        <dd class="col-sm-8">Maklumat permohonan tidak lengkap dan tidak layak untuk ditolak</dd>
                    </dl>

                    <h6>Maklumat Penolakan</h6>
                    <dl class="row">
                        <dt class="col-sm-4">Penolakan Oleh</dt>
                        <dd class="col-sm-8">Pegawai Proses Utama</dd>

                        <dt class="col-sm-4">Tarikh Penolakan</dt>
                        <dd class="col-sm-8">{{ date('d-M-Y') }}</dd>

                        <dt class="col-sm-4">Ulasan Penolakan</dt>
                        <dd class="col-sm-8">Maklumat permohonan tidak lengkap</dd>
                    </dl>
                    @endif

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
