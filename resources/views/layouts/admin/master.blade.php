<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <!--CSS Link -->
  @include('layouts.admin.top')

  <style>
    footer {
      margin-top: auto;
    }
  </style>
</head>

<body id="body-pd">
  <!-- Sidebar -->
  @include('layouts.admin.sidebar')
  <!-- Sidebar -->



  <!-- Header-->
  @include('layouts.admin.header')
  <!-- Header-->

  <div class="container-fluid">
    <div style="margin-top: 90px;">
      @yield('content')
    </div>
  </div>


  <!-- Footer -->
  {{-- @include('layouts.footer') --}}

  </ <!--JS Link -->
  @include('layouts.admin.bottom')
</body>

</html>
