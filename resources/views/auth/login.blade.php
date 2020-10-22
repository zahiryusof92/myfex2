@extends('layouts.master-without-nav')

@section('content')
<!-- Begin page -->
<div class="wrapper-page">
    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-0">
                <a href="index" class="logo logo-admin">
                    <img src="{{ asset('assets/images/logo.png') }}" height="70" alt="logo">
                </a>
            </h3>

            <div class="p-3">
                <h4 class="text-muted font-18 m-b-5 text-center">Login</h4>
                <p class="text-muted text-center"></p>

                <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}" data-parsley-validate>
                    @csrf

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="" autocomplete="username" required autofocus>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="password" placeholder="" autocomplete="current-password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row m-t-20">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20">
                            <a href="" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center">
        @if (Route::has('register'))
        <p>Don't have an account? <a href="{{ url('register') }}" class="font-14 text-primary"> Register Now </a> </p>
        @endif
        <p>&copy; {{date('Y')}} {{ config('app.name', 'Laravel') }}</p>
    </div>

</div>

@endsection