@extends('layouts.master')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Directory</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Directory</li>
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

                            <div class="col-xl-4 col-md-6">
                                <div class="card directory-card m-b-20">
                                    <div>
                                        <div class="directory-bg text-center">
                                            <div class="directory-overlay">
                                                <img class="rounded-circle thumb-lg img-thumbnail" src="{{URL::asset('assets/images/users/user-2.jpg')}}" alt="Generic placeholder image">
                                            </div>
                                        </div>
        
                                        <div class="directory-content text-center p-4">
                                                <p class="font-14 mt-4">Creative Director</p>
                                                <h5 class="font-18">Katherine J. McAvoy</h5>
                                                
                                            <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
        
                                            <ul class="social-links list-inline mb-0 mt-4">
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-primary" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-danger" data-toggle="tooltip" class="tooltips" href="" data-original-title="1234567890"><i class="fa fa-phone"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="@skypename"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-xl-4 col-md-6">
                                <div class="card directory-card m-b-20">
                                    <div>
                                        <div class="directory-bg text-center">
                                            <div class="directory-overlay">
                                                <img class="rounded-circle thumb-lg img-thumbnail" src="{{URL::asset('assets/images/users/user-3.jpg')}}" alt="Generic placeholder image">
                                            </div>
                                        </div>
        
                                        <div class="directory-content text-center p-4">
                                            <p class="font-14 mt-4">Creative Director</p>
                                            <h5 class="font-18">Richard L. Jackson</h5>
                                            <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
        
                                            <ul class="social-links list-inline mb-0 mt-4">
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-primary" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-danger" data-toggle="tooltip" class="tooltips" href="" data-original-title="1234567890"><i class="fa fa-phone"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="@skypename"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-xl-4 col-md-6">
                                <div class="card directory-card m-b-20">
                                    <div>
                                        <div class="directory-bg text-center">
                                            <div class="directory-overlay">
                                                <img class="rounded-circle thumb-lg img-thumbnail" src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="Generic placeholder image">
                                            </div>
                                        </div>
        
                                        <div class="directory-content text-center p-4">
                                            <p class="font-14 mt-4">Creative Director</p>
                                            <h5 class="font-18">Joshua D. Pearson</h5>
                                            <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
        
                                            <ul class="social-links list-inline mb-0 mt-4">
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-primary" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-danger" data-toggle="tooltip" class="tooltips" href="" data-original-title="1234567890"><i class="fa fa-phone"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="@skypename"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-xl-4 col-md-6">
                                    <div class="card directory-card m-b-20">
                                        <div>
                                            <div class="directory-bg text-center">
                                                <div class="directory-overlay">
                                                    <img class="rounded-circle thumb-lg img-thumbnail" src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="Generic placeholder image">
                                                </div>
                                            </div>
            
                                            <div class="directory-content text-center p-4">
                                                <p class="font-14 mt-4">Creative Director</p>
                                                <h5 class="font-18">Michael J. Folma</h5>
                                                <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
            
                                                <ul class="social-links list-inline mb-0 mt-4">
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-primary" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-danger" data-toggle="tooltip" class="tooltips" href="" data-original-title="1234567890"><i class="fa fa-phone"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="@skypename"><i class="fab fa-skype"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-4 col-md-6">
                                    <div class="card directory-card m-b-20">
                                        <div>
            
                                            <div class="directory-bg text-center">
                                                <div class="directory-overlay">
                                                    <img class="rounded-circle thumb-lg img-thumbnail" src="{{URL::asset('assets/images/users/user-6.jpg')}}" alt="Generic placeholder image">
                                                </div>
                                            </div>
            
                                            <div class="directory-content text-center p-4">
                                                <p class="font-14 mt-4">Creative Director</p>
                                                <h5 class="font-18">Samuel P. Augustus</h5>
                                                <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
            
                                                <ul class="social-links list-inline mb-0 mt-4">
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-primary" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-danger" data-toggle="tooltip" class="tooltips" href="" data-original-title="1234567890"><i class="fa fa-phone"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="@skypename"><i class="fab fa-skype"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-4 col-md-6">
                                    <div class="card directory-card m-b-20">
                                        <div>
                                            <div class="directory-bg text-center">
                                                <div class="directory-overlay"> 
                                                    <img class="img-thumbnail rounded-circle thumb-lg" src="{{URL::asset('assets/images/users/user-7.jpg')}}" alt="Generic placeholder image">
                                                </div>
                                            </div>
            
                                            <div class="directory-content text-center p-4">
                                                <p class="font-14 mt-4">Creative Director</p>
                                                <h5 class="font-18">Joseph D. Starnes</h5>
                                                <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
            
                                                <ul class="social-links list-inline mb-0 mt-4">
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-primary" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-danger" data-toggle="tooltip" class="tooltips" href="" data-original-title="1234567890"><i class="fa fa-phone"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a title="" data-placement="top" class="btn-info" data-toggle="tooltip" class="tooltips" href="" data-original-title="@skypename"><i class="fab fa-skype"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
        
                        </div> <!-- end row -->        

                    </div> <!-- container-fluid -->
@endsection