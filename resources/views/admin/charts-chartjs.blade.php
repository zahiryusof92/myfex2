@extends('layouts.master')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Chartjs</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">Chartjs</li>
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
        
                                        <h4 class="mt-0 header-title">Line Chart</h4>
        
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
        
                                        <canvas id="lineChart" height="300"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Bar Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">84845</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">12001</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <canvas id="bar" height="300"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Pie Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2536</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">69421</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">89854</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <canvas id="pie" height="260"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Donut Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">9595</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">36524</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">62541</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <canvas id="doughnut" height="260"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Polar Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">4852</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">3652</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">85412</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <canvas id="polarArea" height="300"> </canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Radar Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">694</h5>
                                                <p class="text-muted font-14">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">55210</h5>
                                                <p class="text-muted font-14">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">489498</h5>
                                                <p class="text-muted font-14">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <canvas id="radar" height="300"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->        

                    </div> <!-- container-fluid -->
@endsection

@section('script')
    <script src="{{ URL::asset('assets/plugins/chart.js/chart.min.js')}}"></script>
    <script src="{{ URL::asset('assets/pages/chartjs.init.js')}}"></script>
@endsection