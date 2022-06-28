{{-- <header class="header" id="header">
  <div class="header_toggle"><i class="fa-solid fa-bars" id="header-toggle"></i></div>
  <div class="header_img"> <img src="" alt="user"> </div>
</header> --}}
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top" id="header">
  <div class="container-fluid">
    {{-- <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name', 'Laravel') }}
    </a> --}}
    <div class="header_toggle mx-3"><i class="fa-solid fa-bars" id="header-toggle"></i>
    </div>

    <div class="header_text">{{ Auth::user()->name }}</div>
    <div class="header_img"> <img src="{{ asset('image/default-user.png') }}" alt="user"> </div>

</nav>
