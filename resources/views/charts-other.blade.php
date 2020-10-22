@extends('layouts.master')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Jquery Knob Chart</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">Jquery Knob Chart</li>
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
                                        <p class="text-muted m-b-30 font-14">Nice, downward compatible, touchable, jQuery dial</p>
        
                                        <div class="row text-center">
                                            <div class="col-lg-4 text-center">
                                                <h5 class="font-16 m-b-20">Disable display input</h5>
                                                <input class="knob" data-width="150" data-fgcolor="#7a6fbe" data-displayinput="false" value="35">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <h5 class="font-16 m-b-20">Cursor mode</h5>
                                                <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#4ac18e" value="29">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <h5 class="font-16 m-b-20">Display previous value</h5>
                                                <input class="knob" data-width="150" data-min="-100" data-fgcolor="#ffbb44" data-displayprevious="true" value="44">
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                                <h5 class="font-16 m-b-20">Angle offset</h5>
                                                <input class="knob" data-width="150" data-angleoffset="90" data-linecap="round" data-fgcolor="#ea553d" value="35">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <h5 class="font-16 m-b-20"> 5-digit values, step 1000</h5>
                                                <input class="knob" data-width="150" data-min="-15000" data-displayprevious="true" data-max="15000" data-step="1000" value="-11000" data-fgcolor="#1d1e3a">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <h5 class="font-16 m-b-20">Angle offset and arc</h5>
                                                <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#f06292" value="29">
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                                <h5 class="font-16 m-b-20">Readonly</h5>
                                                <input class="knob" data-width="150" data-height="150" data-linecap=round
                                                       data-fgColor="#5468da" value="80" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <h5 class="font-16 m-b-20"> Angle offset and arc</h5>
                                                <input class="knob" data-width="150" data-height="150"
                                                data-displayPrevious=true data-fgColor="#8d6e63" data-skin="tron"
                                                data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125
                                                data-angleArc=250 value="44"/>
 
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                    </div> <!-- container-fluid -->
@endsection

@section('script')
        <!-- KNOB JS -->
        <script src="{{ URL::asset('assets/plugins/jquery-knob/excanvas.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
@endsection

@section('script-bottom')
        <script>
            $(function() {
                $(".knob").knob();
            });
        </script>
@endsection