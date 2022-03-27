<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
  <!-- favicon -->

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ env('APP_TITLE', 'Assignment') }}</title>

  <!-- start css -->
  @include('Admin.layouts.css')
  @yield('css')
  <!-- end css -->

</head>
<!-- END HEAD -->

<body
  class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md page-full-width header-white white-sidebar-color logo-indigo">
  <div class="page-wrapper">

    <!-- start header -->
    @include('Admin.layouts.header')
    <!-- end header -->

    <!-- start page container -->
    @yield('content')
    <!-- end page container -->

    <!-- start footer -->
    <!-- end footer -->
  </div>

  <!-- start css -->
  @include('Admin.layouts.js')
  @yield('js')
  <!-- end css -->


</body>

</html>