<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{ asset('public/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('public/assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('public/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{ asset('public/assets/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/header-colors.css') }}" rel="stylesheet" />

    <title>Sadaat</title>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">

        <!--start sidebar -->
        @include('admin_side.setup.sidebar')
        <!--end sidebar -->

        <!--start top header-->
        @include('admin_side.setup.header')
        <!--end top header-->

        @yield('content')

        <!--start footer-->
        @include('admin_side.setup.footer')
        <!--end footer-->

    </div>
    <!--end wrapper-->




    <!-- JS Files-->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="{{ asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/index.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('public/assets/js/main.js') }}"></script>


</body>

</html>
