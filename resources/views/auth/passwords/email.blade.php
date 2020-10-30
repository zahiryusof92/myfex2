@extends('layouts.master-without-nav')


@section('content')
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-0">
                <a href="{{ url('/') }}" class="logo logo-admin">
                    <img src="{{ asset('assets/images/logo.png') }}" height="70" alt="logo">
                </a>
            </h3>

            <div class="p-3">
                <h4 class="text-muted font-18 mb-3 text-center">Reset Kata Laluan</h4>
                <div class="alert alert-primary" role="alert">
                    Enter your Email and instructions will be sent to you!
                </div>

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form class="form-horizontal m-t-30" method="POST" action="{{ route('password.email') }}"  data-parsley-validate>
                    @csrf

                    <div class="form-group">
                        <label for="email">E-mel</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row m-t-20">
                        <div class="col-12 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Hantar Pautan Kata Laluan</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center">
        <p>Ingat kata lauan anda? <a href="{{ url('login') }}" class="font-500 font-14 text-primary font-secondary"> Log In </a> </p>
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}</p>
    </div>

</div>
@endsection