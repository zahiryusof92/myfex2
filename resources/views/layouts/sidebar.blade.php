<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ url('home') }}" class="waves-effect {{ request()->routeIs('home') ? 'active' : '' }}">
                        <i class="mdi mdi-view-dashboard"></i><span> Laman Utama </span>
                    </a>
                </li>

                @if (Auth::user()->isUser())
                <li>
                    <a href="javascript:void(0);" class="waves-effect {{ request()->routeIs('company*') ? 'active' : '' }}">
                        <i class="mdi mdi-factory"></i>
                        <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ request()->routeIs('company*') ? 'collapse in' : '' }}">
                        <li class="{{ request()->routeIs('company*') ? 'active' : '' }}">
                            <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                        </li>
                    </ul>
                </li>
                @if (App\Models\Company::getApproved())
                <li>
                    <a href="javascript:void(0);" class="waves-effect {{ request()->routeIs('brandRights*') ? 'active' : '' }}">
                        <i class="mdi mdi-copyright"></i>
                        <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ request()->routeIs('brandRights*') ? 'collapse in' : '' }}">
                        <li class="{{ request()->routeIs('brandRights*') ? 'active' : '' }}">
                            <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect {{ request()->routeIs('application*') ? 'active' : '' }}">
                        <i class="mdi mdi-file-tree"></i>
                        <span> Permohonan <span class="badge badge-pill badge-danger">{{ App\Models\Application::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>                   
                    <ul class="submenu {{ request()->routeIs('application*') ? 'collapse in' : '' }}">
                        @if (App\Models\BrandRights::showFranchisorButton())
                        <li class="{{ request()->routeIs('application.franchise.create') ? 'active' : '' }}">
                            <a href="{{ route('application.franchise.create') }}">Daftar Pemberi Francais</a>
                        </li>
                        @endif
                        <li class="{{ request()->routeIs('application.franchisee.create') ? 'active' : '' }}">
                            <a href="{{ route('application.franchisee.create') }}">Daftar Pemegang Francais</a>
                        </li>
                        <li class="{{ request()->routeIs('application.index') ? 'active' : '' }}">
                            <a href="{{ route('application.index') }}">Senarai Permohonan</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect {{ request()->routeIs('amendment*') ? 'active' : '' }}">
                        <i class="mdi mdi-pen"></i>
                        <span> Pindaan Matan <span class="badge badge-pill badge-danger">{{ App\Models\Amendment::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>                   
                    <ul class="submenu {{ request()->routeIs('amendment*') ? 'collapse in' : '' }}">
                        <li class="{{ request()->routeIs('amendment.create') ? 'active' : '' }}">
                            <a href="{{ route('amendment.create') }}">Daftar Pindaan Matan</a>
                        </li>
                        <li class="{{ request()->routeIs('amendment.index') ? 'active' : '' }}">
                            <a href="{{ route('amendment.index') }}">Senarai Pindaan Matan</a>
                        </li>
                    </ul>
                </li>
                @endif
                @endif

                @if (Auth::user()->isConsultant())
                <li class="{{ (request()->is('company*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('company*')) ? 'active' : '' }}">
                        <i class="mdi mdi-factory"></i>
                        <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('company*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('company*')) ? 'active' : '' }}">
                            <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->is('brandRights*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('brandRights*')) ? 'active' : '' }}">
                        <i class="mdi mdi-copyright"></i>
                        <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('brandRights*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('brandRights*')) ? 'active' : '' }}">
                            <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                        </li>
                    </ul>
                </li>
                @endif 

                @if (Auth::user()->isPPU())
                <li class="{{ (request()->is('user*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('user*')) ? 'active' : '' }}">
                        <i class="mdi mdi-account-multiple"></i>
                        <span> Pengguna <span class="badge badge-pill badge-danger">{{ App\Models\User::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('user*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('user*')) ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}">Senarai Pengguna</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->is('company*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('company*')) ? 'active' : '' }}">
                        <i class="mdi mdi-factory"></i>
                        <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('company*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('company*')) ? 'active' : '' }}">
                            <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->is('brandRights*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('brandRights*')) ? 'active' : '' }}">
                        <i class="mdi mdi-copyright"></i>
                        <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('brandRights*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('brandRights*')) ? 'active' : '' }}">
                            <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                        </li>
                    </ul>
                </li>
                @endif

                @if (Auth::user()->isKPP())
                <li class="{{ (request()->is('company*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('company*')) ? 'active' : '' }}">
                        <i class="mdi mdi-factory"></i>
                        <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('company*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('company*')) ? 'active' : '' }}">
                            <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->is('brandRights*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('brandRights*')) ? 'active' : '' }}">
                        <i class="mdi mdi-copyright"></i>
                        <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('brandRights*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('brandRights*')) ? 'active' : '' }}">
                            <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                        </li>
                    </ul>
                </li>
                @endif

                @if (Auth::user()->isPengarah())
                <li class="{{ (request()->is('company*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('company*')) ? 'active' : '' }}">
                        <i class="mdi mdi-factory"></i>
                        <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('company*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('company*')) ? 'active' : '' }}">
                            <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->is('brandRights*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('brandRights*')) ? 'active' : '' }}">
                        <i class="mdi mdi-copyright"></i>
                        <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('brandRights*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('brandRights*')) ? 'active' : '' }}">
                            <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                        </li>
                    </ul>
                </li>
                @endif

                @if (Auth::user()->isPendaftar())
                <li class="{{ (request()->is('company*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('company*')) ? 'active' : '' }}">
                        <i class="mdi mdi-factory"></i>
                        <span> Syarikat <span class="badge badge-pill badge-danger">{{ App\Models\Company::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('company*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('company*')) ? 'active' : '' }}">
                            <a href="{{ route('company.index') }}">Senarai Syarikat</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->is('brandRights*')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="waves-effect {{ (request()->is('brandRights*')) ? 'active' : '' }}">
                        <i class="mdi mdi-copyright"></i>
                        <span> Jenama <span class="badge badge-pill badge-danger">{{ App\Models\BrandRights::getTotalPending() }}</span><span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ (request()->is('brandRights*')) ? 'collapse in' : '' }}">
                        <li class="{{ (request()->is('brandRights*')) ? 'active' : '' }}">
                            <a href="{{ route('brandRights.index') }}">Senarai Jenama</a>
                        </li>
                    </ul>
                </li>
                @endif

                @if (Auth::user()->isSuperAdmin())
                <li>
                    <a href="javascript:void(0);" class="waves-effect {{ request()->routeIs('document*') ? 'active' : '' }}">
                        <i class="mdi mdi-folder"></i>
                        <span> Dokumen <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu {{ request()->routeIs('document*') ? 'collapse in' : '' }}">
                        <li class="{{ request()->routeIs('document.create') ? 'active' : '' }}">
                            <a href="{{ route('document.create') }}">Tambah Dokumen</a>
                        </li>
                        <li class="{{ request()->routeIs('document.index') ? 'active' : '' }}">
                            <a href="{{ route('document.index') }}">Senarai Dokumen</a>
                        </li>
                    </ul>
                </li>                
                @endif

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->