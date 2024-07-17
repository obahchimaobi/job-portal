<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Workplex - Creative Job Board HTML Template</title>

    <!-- Custom CSS -->
    <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        @include('layouts._header')

        @yield('content')

        @include('layouts._footer')

    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/slick.js') }}"></script>
    <script src="{{ url('assets/js/slider-bg.js') }}"></script>
    <script src="{{ url('assets/js/smoothproducts.js') }}"></script>
    <script src="{{ url('assets/js/snackbar.min.js') }}"></script>
    <script src="{{ url('assets/js/jQuery.style.switcher.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

</body>

</html>