<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        @include('layouts.head')

    </head>
    <body>

        @include('layouts.header')

        <div class="wrapper">

            @yield('content')

        </div>
        <!-- end wrapper -->

        @include('layouts.footer')    
        @include('layouts.footer-script')

    </body>
</html>