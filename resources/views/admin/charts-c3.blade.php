@extends('layouts.master')

@section('css')
        <!-- C3 charts css -->
        <link href="{{ URL::asset('assets/plugins/c3/c3.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">C3 Chart</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">C3 Chart</li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <div id="header-chart-1"></div>
                                            <div class="info">Balance $ 2,317</div>
                                        </div>
                                        <div class="state-graph">
                                            <div id="header-chart-2"></div>
                                            <div class="info">Item Sold 1230</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Bar Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="chart"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Stacked Area Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="chart-stacked"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Roated Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="roated-chart"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Combine Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="combine-chart"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Donut Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="donut-chart"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Pie Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="pie-chart"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->        

                    </div> <!-- container-fluid -->
@endsection

@section('script')
        <!--C3 Chart-->
        <script src="{{ URL::asset('assets/plugins/d3/d3.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/c3/c3.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/c3-chart-init.js')}}"></script>
@endsection