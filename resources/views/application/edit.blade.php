@extends('layouts.master')

@section('content')
<div class="container-fluid">

    @if ($application->franchise_type_id == App\Helpers\Helper::PEMBERI_FRANCAIS)
    @include('application.franchisor.edit')
    @elseif ($application->franchise_type_id == App\Helpers\Helper::FRANCAISI_INDUK)
    @include('application.master_franchisee.edit')
    @else
    @include('application.franchisee.edit')
    @endif

</div>

@endsection

