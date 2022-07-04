<div class="l-navbar mt-5" id="nav-bar">
  <nav class="nav">
    <div> <a href="#" class="nav_logo"> <i class='fa-solid fa-building nav_logo-icon'></i> <span
          class="nav_logo-name">
          GKJW</span> </a>
      <div class="nav_list">
        <a href="{{ route('dashboard') }}" class="nav_link {{ Request::is('dashboard*') ? 'active' : '' }}"> <i
            class='fa-solid fa-chart-simple'></i>
          <span class="nav_name">Dashboard</span>
        </a>
        @if (Auth::user()->role == 'admin')
          <a href="{{ route('pengguna.index') }}" class="nav_link {{ Request::is('pengguna*') ? 'active' : '' }} ">
            <i class='fa-solid fa-user'></i>
            <span class="nav_name">Pengguna</span>
          </a>

          <a href="{{ route('logout') }}" class="nav_link"
            onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <span class="nav_name">Log Out</span>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
      </div>
    </div>
  @elseif (Auth::user()->role == 'staff')
    <a href="{{ route('data-warga.index') }}"
      class="nav_link {{ Request::is('data-warga*', 'data-krw*') ? ' active' : '' }}"> <i
        class='fa-solid fa-users'></i>
      <span class="nav_name">Data Warga</span>
    </a>
    <a href="{{ route('data-pelayan.index') }}" class="nav_link {{ Request::is('data-pelayan*') ? 'active' : '' }}">
      <i class='fa-solid fa-id-card'></i>
      <span class="nav_name">Data Pelayan</span>
    </a>
    <a href="{{ route('data-warta.index') }}" class="nav_link {{ Request::is('data-warta*') ? 'active' : '' }}">
      <i class='fa-solid fa-newspaper'></i>
      <span class="nav_name">Warta Jemaat</span>
    </a>
    <a href="{{ route('quisioner.index') }}" class="nav_link {{ Request::is('quisioner*') ? 'active' : '' }}">
      <i class="fa-solid fa-clipboard-question"></i>
      <span class="nav_name">Quisioner</span>
    </a>
    <a href="{{ route('sensus.index') }}" class="nav_link {{ Request::is('sensus*') ? 'active' : '' }}"> <i
        class="fa-solid fa-file-lines"></i>
      <span class="nav_name">Rekap Sensus</span>
    </a>
    <a href="{{ route('logout') }}" class="nav_link"
      onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
      <i class="fa-solid fa-arrow-right-from-bracket"></i>
      <span class="nav_name">Log Out</span>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
    @endif
</div>
</div>

</nav>
</div>
