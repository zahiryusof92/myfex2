@extends('layouts.master')

@section('css')
<style>
    .form-section {
        padding-left: 15px;
        border-left: 2px solid #FF851B;
        display: none;
    }

    .form-section.current {
        display: inherit;
    }

    .form-navigation {
        margin-top: 10px;
    }
</style>
@endsection

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
                    
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile Syarikat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#obligations" role="tab">Obligasi Perniagaan Francais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#financial" role="tab">Maklumat Kewangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#file" role="tab">Muat Naik Fail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#declaration" role="tab">Deklarasi</a>
                        </li>
                    </ul>

                    <form class="form-horizontal" id="demo-form" method="POST" action="" data-parsley-validate>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="profile" role="tabpanel">

                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#company" role="tab">Maklumat Syarikat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#capital_equity" role="tab">Modal dan Ekuiti</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#operation" role="tab">Operasi Perniagaan Syarikat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#information" role="tab">Maklumat Perniagaan Francais</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="company" role="tabpanel">

                                        <div class="form-section">
                                            <div class="form-group">
                                                <label for="company_reg_no">No. Pendaftaran Syarikat</label>
                                                <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" value="{{ Auth::user()->company->reg_no }}" autocomplete="company_reg_no" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="company_name">Nama Syarikat</label>
                                                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ Auth::user()->company->name }}" autocomplete="company_name" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="reg_address"><span class="text-danger">* </span>Alamat Pendaftaran Syarikat</label>
                                                <input type="text" class="form-control" id="reg_address" name="reg_address" value="{{ old('reg_address') ? old('reg_address') : Auth::user()->company->reg_address }}" placeholder="" autocomplete="reg_address" required>
                                                <input type="text" class="form-control m-t-5" id="reg_address2" name="reg_address2" value="{{ old('reg_address2') ? old('reg_address2') : Auth::user()->company->reg_address2 }}" placeholder="" autocomplete="reg_address2">
                                                <input type="text" class="form-control m-t-5" id="reg_address3" name="reg_address3" value="{{ old('reg_address3') ? old('reg_address3') : Auth::user()->company->reg_address3 }}" placeholder="" autocomplete="reg_address3">
                                            </div>
                                            <div class="form-group">
                                                <label for="buss_address"><span class="text-danger">* </span>Alamat Perniagaan Syarikat</label>
                                                <input type="text" class="form-control" id="buss_address" name="buss_address" value="{{ old('buss_address') ? old('buss_address') : Auth::user()->company->buss_address }}" placeholder="" autocomplete="buss_address" required>
                                                <input type="text" class="form-control m-t-5" id="buss_address2" name="buss_address2" value="{{ old('buss_address2') ? old('buss_address2') : Auth::user()->company->buss_address2 }}" placeholder="" autocomplete="buss_address2">
                                                <input type="text" class="form-control m-t-5" id="buss_address3" name="buss_address3" value="{{ old('buss_address3') ? old('buss_address3') : Auth::user()->company->buss_address3 }}" placeholder="" autocomplete="buss_address3">
                                            </div>
                                        </div>

                                        <div class="form-section">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" name="email" required="">
                                        </div>

                                        <div class="form-section">
                                            <label for="color">Favorite color:</label>
                                            <input type="text" class="form-control" name="color" required="">
                                        </div>

                                        <div class="form-navigation">
                                            <button type="button" class="previous btn btn-warning">&lt; Previous</button>
                                            <button type="button" class="next btn btn-info">Next &gt;</button>
                                            <button type="submit" class="finish btn btn-primary">Submit</button>
                                        </div>

                                    </div>
                                </div>

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
                    
                    @endif

                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
<script type="text/javascript">
    $(function () {
        var $sections = $('.form-section');

        function navigateTo(index) {
            // Mark the current section with the class 'current'
            $sections.removeClass('current').eq(index).addClass('current');

            // Show only the navigation buttons that make sense for the current section:
            $('.form-navigation .previous').toggle(index > 0);

            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation .finish').toggle(atTheEnd);
        }

        function curIndex() {
            // Return the current index by looking at which section has the class 'current'
            return $sections.index($sections.filter('.current'));
        }

        // Previous button is easy, just go back
        $('.form-navigation .previous').click(function () {
            navigateTo(curIndex() - 1);
        });

        // Next button goes forward iff current block validates
        $('.form-navigation .next').click(function () {
            $('#demo-form').parsley().whenValidate({
                group: 'block-' + curIndex()
            }).done(function () {
                navigateTo(curIndex() + 1);
            });
        });

        // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
        $sections.each(function (index, section) {
            $(section).find(':input').attr('data-parsley-group', 'block-' + index);
        });
        navigateTo(0); // Start at the beginning
    });

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
