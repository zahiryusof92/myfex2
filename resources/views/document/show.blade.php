@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Maklumat Dokumen</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="{{ route('document.index') }}">Senarai Dokumen</a></li>
    <li class="breadcrumb-item active">Maklumat Dokumen</li>
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
                            <a href="{{ route('document.index') }}" class="btn btn-danger w-md waves-effect waves-light">
                                <i class="mdi mdi-undo mdi-18px"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">                      
                    <h6>Maklumat Dokumen</h6>                        
                    <dl class="row">
                        <dt class="col-sm-4">Nama Fail</dt>
                        <dd class="col-sm-8">{{ $document->name }}</dd>

                        <dt class="col-sm-4">Nama Fail (Terjemahan)</dt>
                        <dd class="col-sm-8">{{ $document->name_en }}</dd>

                        <dt class="col-sm-4">Fail</dt>
                        <dd class="col-sm-8">
                            <a href="{{ Storage::url($document->file_url) }}" target="_blank">
                                <i class="mdi mdi-file-pdf mdi-36px"></i> <br/>
                                <small>{{ $document->name }}</small>
                            </a> 
                        </dd>

                        <dt class="col-sm-4">No Susunan</dt>
                        <dd class="col-sm-8">{{ $document->sort_no }}</dd>

                        <dt class="col-sm-4">Aktif</dt>
                        <dd class="col-sm-8">{!! $document->getStatus() !!}</dd>

                        <dt class="col-sm-4">Dimuatnaik Pada</dt>
                        <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($document->created_at) }}</dd>

                        <dt class="col-sm-4">Dikemaskini Pada </dt>
                        <dd class="col-sm-8">{{ App\Helpers\Helper::getFormattedDate($document->updated_at) }}</dd>
                    </dl>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- container-fluid -->
@endsection