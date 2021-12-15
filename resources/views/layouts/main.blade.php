<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Booster is a bootstrap & laravel admin dashboard template">
        <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, admin theme, bootstrap 4, laravel, crm, analytics, responsive, sass support, ui kits, web app, clean design, creative">
        <meta name="author" content="Themesbox17">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- Start CSS -->
        @yield('style')
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <!-- End CSS -->

         <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="xp-vertical">
        <!-- Start XP Container -->
        <div id="xp-container">
            <!-- Start XP Leftbar -->
            @include('layouts.leftbar')
            <!-- End XP Leftbar -->
            <!-- Start XP Rightbar -->
            @include('layouts.rightbar')
            @yield('content')
            <!-- End XP Rightbar -->
        </div>
        <!-- End XP Container -->
        <!-- Start JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
        @yield('script')
        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <!-- End JS -->

    </body>
</html>
