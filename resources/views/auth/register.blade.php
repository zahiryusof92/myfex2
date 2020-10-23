@extends('layouts.master-without-nav')

@section('content')
<!-- Begin page -->
<div class="wrapper-page">
    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-0">
                <a href="index" class="logo logo-admin">
                    <img src="{{ asset('assets/images/logo.png') }}" height="70" alt="logo">
                </a>
            </h3>

            <div class="p-3">
                <h4 class="text-muted font-18 m-b-5 text-center">Pendaftaran Pengguna</h4>
                <p class="text-muted text-center"></p>

                <form class="form-horizontal" method="POST" action="#" data-parsley-validate>
                    @csrf

                    <div class="m-t-30">
                        <h6 class="text-center">Maklumat Individu</h6>
                        <div class="form-group">
                            <label for="name"><span class="text-danger">* </span>Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="" autocomplete="name" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email"><span class="text-danger">* </span>E-mel</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="" autocomplete="email" required>
                        </div>
                        <div class="form-group">
                            <label for="user_type"><span class="text-danger">* </span>Jenis Pengguna</label>
                            <select class="form-control" id="user_type" name="user_type" onchange="getConsultant()" required>
                                <option value="">- Sila Pilih -</option>
                                <option value="Pengguna Perniagaan Francais">Pengguna Perniagaan Francais</option>
                                <option value="Pengguna Konsultan Francais">Pengguna Konsultan Francais</option>
                            </select>
                        </div>
                        <div class="form-group" id="select_consultant" style="display: none;">
                            <label for="consultant_type"><span class="text-danger">* </span>Jenis Konsultan</label>
                            <select class="form-control" id="consultant_type" name="consultant_type" onchange="getForm()" required>
                                <option value="">- Sila Pilih -</option>
                                <option value="Syarikat">Syarikat</option>
                                <option value="Individu">Individu</option>
                            </select>
                        </div>
                    </div>

                    <div class="m-t-30" id="consultant_form">
                        <h6 class="text-center">Maklumat Syarikat</h6>
                        <div class="form-group">
                            <label for="company_name"><span class="text-danger">* </span>Nama Syarikat</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name') }}" placeholder="" autocomplete="company_name" required>
                        </div>
                        <div class="form-group">
                            <label for="company_name_old">Nama Syarikat (Lama)</label>
                            <input type="text" class="form-control" id="company_name_old" name="company_name_old" value="{{ old('company_name_old') }}" placeholder="" autocomplete="company_name_old">
                        </div>
                        <div class="form-group">
                            <label for="company_reg_no"><span class="text-danger">* </span>No. Pendaftaran Syarikat</label>
                            <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" value="{{ old('company_reg_no') }}" placeholder="" autocomplete="company_reg_no" data-parsley-type="alphanum" minlength="12" required>
                        </div>
                        <div class="form-group">
                            <label for="company_reg_no_old">No. Pendaftaran Syarikat (Lama)</label>
                            <input type="text" class="form-control" id="company_reg_no_old" name="company_reg_no_old" value="{{ old('company_reg_no_old') }}" placeholder="" autocomplete="company_reg_no_old">
                        </div>
                        <div class="form-group">
                            <label for="company_email"><span class="text-danger">* </span>E-mel Syarikat</label>
                            <input type="email" class="form-control" id="company_email" name="company_email" value="{{ old('company_email') }}" placeholder="" autocomplete="company_email" required>
                        </div>
                        <div class="form-group">
                            <label for="company_ssm_cert"><span class="text-danger">* </span>Sijil Pendaftaran Syarikat Malaysia (SSM)</label>
                            <input type="file" class="filestyle" id="company_ssm_cert" name="company_ssm_cert" data-input="true" data-buttonname="btn-secondary" required>
                        </div>
                        <div class="form-group">
                            <label for="company_letter_of_authority"><span class="text-danger">* </span>Surat Perwakilan Kuasa</label>
                            <input type="file" class="filestyle" id="company_letter_of_authority" name="company_letter_of_authority" data-input="true" data-buttonname="btn-secondary" required>

                        </div>
                    </div>

                    <div class="m-t-30" id="broker_form" style="display: none;">
                        <h6 class="text-center">Maklumat Broker</h6>
                        <div class="form-group">
                            <label for="company_name"><span class="text-danger">* </span>Nama Broker</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name') }}" placeholder="" autocomplete="company_name" required>
                        </div>
                        <div class="form-group">
                            <label for="company_reg_no"><span class="text-danger">* </span>No. Kad Pengenalan (Tanpa '-')</label>
                            <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" value="{{ old('company_reg_no') }}" placeholder="" autocomplete="company_reg_no" data-parsley-type="digits" minlength="12" required>
                        </div>
                        <div class="form-group">
                            <label for="company_email"><span class="text-danger">* </span>E-mel Broker</label>
                            <input type="email" class="form-control" id="company_email" name="company_email" value="{{ old('company_email') }}" placeholder="" autocomplete="company_email" required>
                        </div>
                        <div class="form-group">
                            <label for="company_ssm_cert"><span class="text-danger">* </span>Surat Akuan Sumpah</label>
                            <input type="file" class="filestyle" id="company_ssm_cert" name="company_ssm_cert" data-input="true" data-buttonname="btn-secondary" required>
                        </div>
                        <div class="form-group">
                            <label for="company_letter_of_authority"><span class="text-danger">* </span>Surat Perwakilan Kuasa</label>
                            <input type="file" class="filestyle" id="company_letter_of_authority" name="company_letter_of_authority" data-input="true" data-buttonname="btn-secondary" required>
                        </div>
                    </div>

                    <div class="form-group row m-t-30">
                        <div class="col-12 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Daftar</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center">
        <p>Already have an account? <a href="{{ url('login') }}" class="font-500 font-14 text-primary font-secondary"> Login </a> </p>
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}</p>
    </div>
</div>

@endsection

@section('script')
<script>
    function getConsultant() {
        var user_type = document.getElementById("user_type");
        var user = user_type.value;

        if (user === 'Pengguna Konsultan Francais') {
            $('#select_consultant').show();
        }
    }

    function getForm() {
        var consultant_type = document.getElementById("consultant_type");
        var consultant = consultant_type.value;

        if (consultant === 'Syarikat') {
            $('#broker_form').hide();
            $('#consultant_form').show();
        } else if (consultant === 'Individu') {
            $('#broker_form').show();
            $('#consultant_form').hide();
        }
    }
</script>
@endsection