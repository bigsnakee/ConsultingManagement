<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Default Title')</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.css') }}" />
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('layouts.sidebar')
    <div class="body-wrapper">
    @include('layouts.header')
    @yield('content')
    </div>
  </div>

  <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="{{ asset('js/app.min.js') }}"></script>
  <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
  <script src="{{ asset('js/dataTables.js') }}"></script>
  <script src="{{ asset('js/run-dataTables.js') }}"></script>
</body>
</html>
