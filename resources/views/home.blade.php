@extends('layouts.master')

@section('breadcrumb')
<h4 class="page-title">Laman Utama</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Laman Utama</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">
    
    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    {{ Auth::user()->role->name }} 
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end container-fluid -->
@endsection