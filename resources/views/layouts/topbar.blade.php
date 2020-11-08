<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="{{ url('/') }}" class="logo">
            <span>
                <img src="{{ asset('assets/images/logo.png')}}" alt="" height="50">
            </span>
            <i>
                <img src="{{ asset('assets/images/logo.png')}}" alt="" height="20">
            </i>
        </a>
    </div>

    <nav class="navbar-custom">

        <ul class="navbar-right d-flex list-inline float-right mb-0">
            <li class="dropdown notification-list">
                <div class="dropdown notification-list nav-pro-img">
                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        {{ Auth::user()->name }} <img src="{{ asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle">
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
        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>            
        </ul>

    </nav>

</div>
<!-- Top Bar End -->
