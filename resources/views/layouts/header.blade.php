<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">

                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('assets/images/logo.png')}}" alt="" class="logo-small">
                    <img src="{{ asset('assets/images/logo.png')}}" alt="" class="logo-large">
                </a>

            </div>
            <!-- End Logo container-->

            <div class="menu-extras topbar-custom">

                <ul class="float-right list-unstyled mb-0 ">

                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                {{ Auth::user()->name }} <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a class="dropdown-item" href="{{ route('profile.index') }}">
                                    <i class="mdi mdi-account-circle m-r-5"></i> Profil Saya
                                </a>
                                <a class="dropdown-item" href="{{ route('profile.edit', Auth::user()->id) }}">
                                    <i class="mdi mdi-pencil m-r-5"></i> Kemaskini
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-power m-r-5 text-danger"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>                                                                    
                        </div>
                    </li>

                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link" id="mobileToggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>    
                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div>
        <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    @yield('breadcrumb')

                </div>
            </div>
        </div>
    </div>

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">

                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu {{ (request()->routeIs('home')) ? 'active' : '' }}">
                        <a href="{{ url('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <i class="mdi mdi-view-dashboard"></i>Laman Utama
                        </a>
                    </li>

                    @if (Auth::user()->isUser())
                    <li class="has-submenu {{ (request()->routeIs('company*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                            <i class="mdi mdi-factory"></i>
                            <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                                <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                            </li>
                        </ul>
                    </li>
                    @if (App\Models\Company::getApproved())
                    <li class="has-submenu {{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                            <i class="mdi mdi-copyright"></i>
                            <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                                <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{ (request()->routeIs('application*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('application*')) ? 'active' : '' }}">
                            <i class="mdi mdi-file-tree"></i>
                            <span> Permohonan <span class="badge badge-pill badge-danger">{{ App\Models\Application::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>                   
                        <ul class="submenu">
                            @if (App\Models\BrandRights::showFranchisorButton())
                            <li class="{{ (request()->routeIs('application.franchise.create')) ? 'active' : '' }}">
                                <a href="{{ route('application.franchise.create') }}">Daftar Pemberi Francais</a>
                            </li>
                            @endif
                            <li class="{{ (request()->routeIs('application.franchisee.create')) ? 'active' : '' }}">
                                <a href="{{ route('application.franchisee.create') }}">Daftar Pemegang Francais</a>
                            </li>
                            <li class="{{ (request()->routeIs('application.index')) ? 'active' : '' }}">
                                <a href="{{ route('application.index') }}">Senarai Permohonan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{ (request()->routeIs('amendment*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ request()->routeIs('amendment*') ? 'active' : '' }}">
                            <i class="mdi mdi-pen"></i>
                            <span> Pindaan Matan <span class="badge badge-pill badge-danger">{{ App\Models\Amendment::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>                   
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('amendment.create')) ? 'active' : '' }}">
                                <a href="{{ route('amendment.create') }}">Daftar Pindaan Matan</a>
                            </li>
                            <li class="{{ (request()->routeIs('amendment.index')) ? 'active' : '' }}">
                                <a href="{{ route('amendment.index') }}">Senarai Pindaan Matan</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @endif

                    @if (Auth::user()->isConsultant())
                    <li class="has-submenu {{ (request()->routeIs('company*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                            <i class="mdi mdi-factory"></i>
                            <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                                <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                            <i class="mdi mdi-copyright"></i>
                            <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                                <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                            </li>
                        </ul>
                    </li>
                    @endif 

                    @if (Auth::user()->isPPU())
                    <li class="has-submenu {{ (request()->routeIs('user*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('user*')) ? 'active' : '' }}">
                            <i class="mdi mdi-account-multiple"></i>
                            <span> Pengguna <span class="badge badge-pill badge-danger">{{ App\Models\User::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('user*')) ? 'active' : '' }}">
                                <a href="{{ route('user.index') }}">Senarai Pengguna</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{ (request()->routeIs('company*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                            <i class="mdi mdi-factory"></i>
                            <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu {{ (request()->routeIs('company*')) ? 'collapse in' : '' }}">
                            <li class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                                <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                            <i class="mdi mdi-copyright"></i>
                            <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                                <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @if (Auth::user()->isKPP())
                    <li class="has-submenu {{ (request()->routeIs('company*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                            <i class="mdi mdi-factory"></i>
                            <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                                <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                            <i class="mdi mdi-copyright"></i>
                            <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                                <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @if (Auth::user()->isPengarah())
                    <li class="has-submenu {{ (request()->routeIs('company*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                            <i class="mdi mdi-factory"></i>
                            <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                                <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                            <i class="mdi mdi-copyright"></i>
                            <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                                <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @if (Auth::user()->isPendaftar())
                    <li class="has-submenu {{ (request()->routeIs('company*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                            <i class="mdi mdi-factory"></i>
                            <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('company*')) ? 'active' : '' }}">
                                <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                            <i class="mdi mdi-copyright"></i>
                            <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('brandRights*')) ? 'active' : '' }}">
                                <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @if (Auth::user()->isSuperAdmin())
                    <li class="has-submenu {{ (request()->routeIs('document*')) ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="{{ (request()->routeIs('document*')) ? 'active' : '' }}">
                            <i class="mdi mdi-folder"></i>Dokumen
                        </a>
                        <ul class="submenu">
                            <li class="{{ (request()->routeIs('document.create')) ? 'active' : '' }}">
                                <a href="{{ route('document.create') }}">Tambah Dokumen</a>
                            </li>
                            <li class="{{ (request()->routeIs('document.index')) ? 'active' : '' }}">
                                <a href="{{ route('document.index') }}">Senarai Dokumen</a>
                            </li>
                        </ul>
                    </li>                
                    @endif

                </ul>
                <!-- End navigation menu -->                
            </div>
            <!-- end navigation -->            
        </div>
        <!-- end container-fluid -->        
    </div>
    <!-- end navbar-custom -->    
</header>
<!-- End Navigation Bar-->