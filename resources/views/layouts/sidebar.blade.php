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
                    <a href="{{ url('page/calendar') }}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Calendar </span></a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ url('page/email-inbox') }}">Inbox</a></li>
                        <li><a href="{{ url('page/email-read') }}">Email Read</a></li>
                        <li><a href="{{ url('page/email-compose') }}">Email Compose</a></li>
                    </ul>
                </li>

                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ url('page/ui-alerts') }}">Alerts</a></li>
                        <li><a href="{{ url('page/ui-buttons') }}">Buttons</a></li>
                        <li><a href="{{ url('page/ui-badge') }}">Badge</a></li>
                        <li><a href="{{ url('page/ui-cards') }}">Cards</a></li>
                        <li><a href="{{ url('page/ui-carousel') }}">Carousel</a></li>
                        <li><a href="{{ url('page/ui-dropdowns') }}">Dropdowns</a></li>
                        <li><a href="{{ url('page/ui-grid') }}">Grid</a></li>
                        <li><a href="{{ url('page/ui-images') }}">Images</a></li>
                        <li><a href="{{ url('page/ui-lightbox') }}">Lightbox</a></li>
                        <li><a href="{{ url('page/ui-modals') }}">Modals</a></li>
                        <li><a href="{{ url('page/ui-pagination') }}">Pagination</a></li>
                        <li><a href="{{ url('page/ui-popover-tooltips') }}">Popover & Tooltips</a></li>
                        <li><a href="{{ url('page/ui-rangeslider') }}">Range Slider</a></li>
                        <li><a href="{{ url('page/ui-session-timeout') }}">Session Timeout</a></li>
                        <li><a href="{{ url('page/ui-progressbars') }}">Progress Bars</a></li>
                        <li><a href="{{ url('page/ui-sweet-alert') }}">Sweet-Alert</a></li>
                        <li><a href="{{ url('page/ui-tabs-accordions') }}">Tabs & Accordions</a></li>
                        <li><a href="{{ url('page/ui-typography') }}">Typography</a></li>
                        <li><a href="{{ url('page/ui-video') }}">Video</a></li>


                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Forms <span class="badge badge-pill badge-success float-right">6</span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ url('page/form-elements') }}">Form Elements</a></li>
                        <li><a href="{{ url('page/form-validation') }}">Form Validation</a></li>
                        <li><a href="{{ url('page/form-advanced') }}">Form Advanced</a></li>
                        <li><a href="{{ url('page/form-editors') }}">Form Editors</a></li>
                        <li><a href="{{ url('page/form-uploads') }}">Form File Upload</a></li>
                        <li><a href="{{ url('page/form-xeditable') }}">Form Xeditable</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-line"></i><span> Charts <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ url('page/charts-morris') }}">Morris Chart</a></li>
                        <li><a href="{{ url('page/charts-chartist') }}">Chartist Chart</a></li>
                        <li><a href="{{ url('page/charts-chartjs') }}">Chartjs Chart</a></li>
                        <li><a href="{{ url('page/charts-flot') }}">Flot Chart</a></li>
                        <li><a href="{{ url('page/charts-c3') }}">C3 Chart</a></li>
                        <li><a href="{{ url('page/charts-other') }}">Jquery Knob Chart</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ url('page/tables-basic') }}">Basic Tables</a></li>
                        <li><a href="{{ url('page/tables-datatable') }}">Data Table</a></li>
                        <li><a href="{{ url('page/tables-responsive') }}">Responsive Table</a></li>
                        <li><a href="{{ url('page/tables-editable') }}">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Icons  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                    <ul class="submenu">
                        <li><a href="{{ url('page/icons-material') }}">Material Design</a></li>
                        <li><a href="{{ url('page/icons-ion') }}">Ion Icons</a></li>
                        <li><a href="{{ url('page/icons-fontawesome') }}">Font Awesome</a></li>
                        <li><a href="{{ url('page/icons-themify') }}">Themify Icons</a></li>
                        <li><a href="{{ url('page/icons-dripicons') }}">Dripicons</a></li>
                        <li><a href="{{ url('page/icons-typicons') }}">Typicons Icons</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-maps"></i><span> Maps <span class="badge badge-pill badge-danger float-right">2</span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ url('page/maps-google') }}"> Google Map</a></li>
                        <li><a href="{{ url('page/maps-vector') }}"> Vector Map</a></li>
                    </ul>
                </li>

                <li class="menu-title">Extras</li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-location"></i><span> Authentication <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ url('page/pages-login') }}">Login</a></li>
                        <li><a href="{{ url('page/pages-register') }}">Register</a></li>
                        <li><a href="{{ url('page/pages-recoverpw') }}">Recover Password</a></li>
                        <li><a href="{{ url('page/pages-lock-screen') }}">Lock Screen</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Extra Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ url('page/pages-timeline') }}">Timeline</a></li>
                        <li><a href="{{ url('page/pages-invoice') }}">Invoice</a></li>
                        <li><a href="{{ url('page/pages-directory') }}">Directory</a></li>
                        <li><a href="{{ url('page/pages-blank') }}">Blank Page</a></li>
                        <li><a href="{{ url('page/pages-404') }}">Error 404</a></li>
                        <li><a href="{{ url('page/pages-500') }}">Error 500</a></li>
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