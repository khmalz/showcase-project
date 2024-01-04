<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Showcase Project - {{ $titlePage }}</title>
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-57x57.png') }}" rel="apple-touch-icon" sizes="57x57">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-60x60.png') }}" rel="apple-touch-icon" sizes="60x60">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-76x76.png') }}" rel="apple-touch-icon" sizes="76x76">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-114x114.png') }}" rel="apple-touch-icon"
        sizes="114x114">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-120x120.png') }}" rel="apple-touch-icon"
        sizes="120x120">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-144x144.png') }}" rel="apple-touch-icon"
        sizes="144x144">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-152x152.png') }}" rel="apple-touch-icon"
        sizes="152x152">
    <link href="{{ asset('assets/admin/assets/favicon/apple-icon-180x180.png') }}" rel="apple-touch-icon"
        sizes="180x180">
    <link type="image/png" href="{{ asset('assets/admin/assets/favicon/android-icon-192x192.png') }}" rel="icon"
        sizes="192x192">
    <link type="image/png" href="{{ asset('assets/admin/assets/favicon/favicon-32x32.png') }}" rel="icon"
        sizes="32x32">
    <link type="image/png" href="{{ asset('assets/admin/assets/favicon/favicon-96x96.png') }}" rel="icon"
        sizes="96x96">
    <link type="image/png" href="{{ asset('assets/admin/assets/favicon/favicon-16x16.png') }}" rel="icon"
        sizes="16x16">
    <link href="{{ asset('assets/admin/assets/favicon/manifest.json') }}" rel="manifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->

    <link href="{{ asset('assets/admin/vendors/simplebar/css/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendors/simplebar.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="bg-light min-vh-100 d-flex align-items-center flex-row">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('assets/admin/assets/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/simplebar/js/simplebar.min.js') }}"></script>

</body>

</html>
