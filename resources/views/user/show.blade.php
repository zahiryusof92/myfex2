@extends('layouts.master')

@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Papar Pengguna</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
                        <li class="breadcrumb-item active">Papar Pengguna</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        @if ($id == 1)
                        <h6>Maklumat Individu</h6>                        
                        <dl class="row">
                            <dt class="col-sm-3">Username</dt>
                            <dd class="col-sm-9">user</dd>

                            <dt class="col-sm-3">Nama</dt>
                            <dd class="col-sm-9">Pengguna Perniagaan Francais</dd>

                            <dt class="col-sm-3">E-mel</dt>
                            <dd class="col-sm-9">user@myfex.com</dd>

                            <dt class="col-sm-3">Jenis Pengguna</dt>
                            <dd class="col-sm-9">Pengguna Perniagaan Francais</dd>
                        </dl>

                        <h6>Maklumat Syarikat</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Nama Syarikat</dt>
                            <dd class="col-sm-9">NEWNAME Sdn Bhd</dd>

                            <dt class="col-sm-3">Nama Syarikat (Lama)</dt>
                            <dd class="col-sm-9">OLDNAME Sdn Bhd</dd>

                            <dt class="col-sm-3">No. Pendaftaran Syarikat</dt>
                            <dd class="col-sm-9">2010234533</dd>

                            <dt class="col-sm-3">No. Pendaftaran Syarikat (Lama)</dt>
                            <dd class="col-sm-9">A123456</dd>

                            <dt class="col-sm-3">E-mel Syarikat</dt>
                            <dd class="col-sm-9">newname@company.com</dd>

                            <dt class="col-sm-3">Sijil Pendaftaran Syarikat Malaysia (SSM)</dt>
                            <dd class="col-sm-9">
                                <a href="javascript:void(0);">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> sijil_pendaftaran_ssm.pdf
                                </a>
                            </dd>

                            <dt class="col-sm-3">Surat Perwakilan Kuasa</dt>
                            <dd class="col-sm-9">
                                <a href="javascript:void(0);">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> surat_perwakilan_kuasa.pdf
                                </a>
                            </dd>
                        </dl>

                        <h6>Maklumat Permohonan</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Tarikh Permohonan</dt>
                            <dd class="col-sm-9">20-Oct-2020</dd>

                            <dt class="col-sm-3">Status Permohonan</dt>
                            <dd class="col-sm-9"><span class="badge badge-pill badge-success">Diluluskan</span></dd>
                        </dl>

                        <h6>Maklumat Penilaian</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Penilaian Oleh</dt>
                            <dd class="col-sm-9">Pegawai Proses Utama</dd>

                            <dt class="col-sm-3">Tarikh Penilaian</dt>
                            <dd class="col-sm-9">22-Oct-2020</dd>

                            <dt class="col-sm-3">Ulasan Penilaian</dt>
                            <dd class="col-sm-9">Maklumat permohonan lengkap dan layak untuk diluluskan</dd>
                        </dl>

                        <h6>Maklumat Kelulusan</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Kelulusan Oleh</dt>
                            <dd class="col-sm-9">Pegawai Proses Utama</dd>

                            <dt class="col-sm-3">Tarikh Kelulusan</dt>
                            <dd class="col-sm-9">23-Oct-2020</dd>
                        </dl>
                        @elseif ($id == 2)
                        <h6>Maklumat Individu</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Username</dt>
                            <dd class="col-sm-9">konsultan</dd>

                            <dt class="col-sm-3">Nama</dt>
                            <dd class="col-sm-9">Pengguna Konsultan Francais</dd>

                            <dt class="col-sm-3">E-mel</dt>
                            <dd class="col-sm-9">konsultan@myfex.com</dd>

                            <dt class="col-sm-3">Jenis Pengguna</dt>
                            <dd class="col-sm-9">Pengguna Konsultan Francais</dd>
                        </dl>

                        <h6>Maklumat Syarikat</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Nama Syarikat</dt>
                            <dd class="col-sm-9">Consult Sdn Bhd</dd>

                            <dt class="col-sm-3">Nama Syarikat (Lama)</dt>
                            <dd class="col-sm-9">-</dd>

                            <dt class="col-sm-3">No. Pendaftaran Syarikat</dt>
                            <dd class="col-sm-9">2020102550</dd>

                            <dt class="col-sm-3">No. Pendaftaran Syarikat (Lama)</dt>
                            <dd class="col-sm-9">-</dd>

                            <dt class="col-sm-3">E-mel Syarikat</dt>
                            <dd class="col-sm-9">consult@company.com</dd>

                            <dt class="col-sm-3">Sijil Pendaftaran Syarikat Malaysia (SSM)</dt>
                            <dd class="col-sm-9">
                                <a href="javascript:void(0);">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> sijil_pendaftaran_ssm.pdf
                                </a>
                            </dd>

                            <dt class="col-sm-3">Surat Perwakilan Kuasa</dt>
                            <dd class="col-sm-9">
                                <a href="javascript:void(0);">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> surat_perwakilan_kuasa.pdf
                                </a>
                            </dd>
                        </dl>

                        <h6>Maklumat Permohonan</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Tarikh Permohonan</dt>
                            <dd class="col-sm-9">22-Oct-2020</dd>

                            <dt class="col-sm-3">Status Permohonan</dt>
                            <dd class="col-sm-9"><span class="badge badge-pill badge-info">Telah Dinilai</span></dd>
                        </dl>

                        <h6>Maklumat Penilaian</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Penilaian Oleh</dt>
                            <dd class="col-sm-9">Pegawai Proses Utama</dd>

                            <dt class="col-sm-3">Tarikh Penilaian</dt>
                            <dd class="col-sm-9">23-Oct-2020</dd>

                            <dt class="col-sm-3">Ulasan Penilaian</dt>
                            <dd class="col-sm-9">Maklumat permohonan lengkap dan layak untuk diluluskan</dd>
                        </dl>

                        <h6>Maklumat Kelulusan</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Keputusan Kelulusan</dt>
                            <dd class="col-sm-7">
                                <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                                    <div class="form-group">
                                        <select class="form-control" required>
                                            <option value="">- Sila Pilih -</option>
                                            <option value="1">Diluluskan</option>
                                            <option value="2">Ditolak</option>
                                        </select>
                                    </div>
                                    <div class="form-group row m-t-10">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar</button>
                                        </div>
                                    </div>
                                </form>
                            </dd>
                        </dl>
                        @else
                        <h6>Maklumat Individu</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Username</dt>
                            <dd class="col-sm-9">broker</dd>

                            <dt class="col-sm-3">Nama</dt>
                            <dd class="col-sm-9">Pengguna Broker Francais</dd>

                            <dt class="col-sm-3">E-mel</dt>
                            <dd class="col-sm-9">broker@myfex.com</dd>

                            <dt class="col-sm-3">Jenis Pengguna</dt>
                            <dd class="col-sm-9">Pengguna Konsultan Francais</dd>
                        </dl>

                        <h6>Maklumat Broker</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Nama Broker</dt>
                            <dd class="col-sm-9">Pengguna Broker Francais</dd>

                            <dt class="col-sm-3">No. Kad Pengenalan (Tanpa '-')</dt>
                            <dd class="col-sm-9">991122013344</dd>

                            <dt class="col-sm-3">E-mel Broker</dt>
                            <dd class="col-sm-9">broker@myfex.com</dd>

                            <dt class="col-sm-3">Surat Akuan Sumpah</dt>
                            <dd class="col-sm-9">
                                <a href="javascript:void(0);">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> surat_akuan_sumpah.pdf
                                </a>
                            </dd>

                            <dt class="col-sm-3">Surat Perwakilan Kuasa</dt>
                            <dd class="col-sm-9">
                                <a href="javascript:void(0);">
                                    <i class="mdi mdi-file-pdf mdi-24px"></i> surat_perwakilan_kuasa.pdf
                                </a>
                            </dd>
                        </dl>

                        <h6>Maklumat Permohonan</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Tarikh Permohonan</dt>
                            <dd class="col-sm-9">23-Oct-2020</dd>

                            <dt class="col-sm-3">Status Permohonan</dt>
                            <dd class="col-sm-9"><span class="badge badge-pill badge-warning">Baru</span></dd>
                        </dl>

                        <h6>Maklumat Penilaian</h6>
                        <dl class="row">
                            <dt class="col-sm-3">Ulasan Penilaian</dt>
                            <dd class="col-sm-7">
                                <form class="form-horizontal" method="POST" action="" data-parsley-validate>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Ulasan penilaian" required></textarea>
                                    </div>
                                    <div class="form-group row m-t-10">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar</button>
                                        </div>
                                    </div>
                                </form>
                            </dd>
                        </dl>
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>
<!-- end wrapper -->

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
