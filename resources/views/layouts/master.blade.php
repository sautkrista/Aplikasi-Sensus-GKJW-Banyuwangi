<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <!--CSS Link -->
  @include('layouts.top')

  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
      padding-top: 80px;
    }

    footer {
      margin-top: auto;
    }
  </style>
</head>

<body>
  <!-- Header-->
  @include('layouts.header')
  <!-- Header-->
  <div class="mb-5">
    @include('component.flash-message')

    @yield('content')
  </div>

  <!-- Footer -->
  @include('layouts.footer')

  </ <!--JS Link -->
  @include('layouts.bottom')
</body>

</html>
