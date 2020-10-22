@extends('layouts.master')

@section('css')
        <!-- Sweet Alert -->
        <link href="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Sweet-Alert</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Sweet-Alert</li>
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
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Examples</h4>
                                        <p class="text-muted m-b-30 font-14">A beautiful, responsive, customizable
                                            and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                            dependencies.</p>
        
                                        <div class="row text-center">
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">A basic message</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-basic">Click me</button>
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">A title with a text under</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-title">Click me</button>
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">A success message!</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button>
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">A warning message, with a function attached to the "Confirm"-button...</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</button>
                                            </div>
        
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">By passing a parameter, you can execute something else for "Cancel".</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">A message with custom Image Header</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-image">Click me</button>
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">A message with auto close timer</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-close">Click me</button>
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">Custom HTML description and buttons</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-html-alert">Click me</button>
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">A message with custom width, padding and background</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button>
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">Ajax request example</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button>
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">Chaining modals (queue) example</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="chaining-alert">Click me</button>
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-30">
                                                <p class="text-muted">Dynamic queue example</p>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" id="dynamic-alert">Click me</button>
                                            </div>
        
                                        </div> <!-- end row -->
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
            

                    </div> <!-- container-fluid -->
@endsection

@section('script')
        <!-- Sweet-Alert  -->
        <script src="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/sweet-alert.init.js')}}"></script>
@endsection