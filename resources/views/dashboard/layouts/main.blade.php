<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Digiworks - Dashboard</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/admin/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/toastify/toastify.css') }}" rel="stylesheet">

    @stack('styles')

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @include('dashboard.layouts.header')

    @include('dashboard.layouts.sidebar')

    <main class="main" id="main" data-message="{{ session('success') }}" style="min-height: 90vh">

        @yield('content')

    </main><!-- End #main -->

    @include('dashboard.layouts.footer')

    <a class="back-to-top d-flex align-items-center justify-content-center" href="{{ url('#') }}"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/toastify/toastify.js') }}"></script>

    @stack('scripts')

    <script>
        function showToast(message) {
            Toastify({
                text: message,
                duration: 2500,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
                style: {
                    background: "#28a745",
                },
            }).showToast();
        }

        $(document).ready(function() {
            let message = $('#main').data('message');

            if (message) {
                showToast(message)
            }
        })
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

</body>

</html>
