<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

         <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/typicons/typicons.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/js/select.dataTables.min.css') }} ">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }} ">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }} " />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="with-welcome-text">
    <div class="container-scroller">

        @include('layouts/patials/navbar')

            <div class="container-fluid page-body-wrapper">
                @include('layouts/patials/sidebar')

            <div class="main-panel">
               <div class="content-wrapper">
                  @yield('content')
                </div>
             </div>
            </div>

         @include('layouts/patials/footer')

    </div>
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js')}} "></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}} "></script>
    <!-- endinject -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/template.js')}} "></script>
    <script src="{{ asset('admin/assets/js/hoverable-collapse.js')}}  "></script>
    <script src="{{ asset('admin/assets/js/todolist.js')}}  "></script>
    <!-- endinject -->

    </body>
</html>
