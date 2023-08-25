<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/dashboard" class="brand-link">
    <img src="../../../img/logokemenag.png" alt="Logo Kemenag" class="brand-image elevation-2" style="opacity: .8">
    <span class="brand-text font-weight-light">SiPenmad</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      {{-- <div class="image">
          <img src="img/logokemenag.png" class="img-circle elevation-2" alt="User Image">
        </div> --}}
      <div class="info">
        <a href="/dashboard" class="d-block">{{ Auth::user()->madrasah->namamadrasah }}</a>
      </div>
    </div>

    @if(Auth::user()->akses_id == 2)
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-header">INPUT</li>
        <li class="nav-item">
          <a href="/dashboard/dtsiswa" class="nav-link {{ Request::is('dashboard/dtsiswa*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user-graduate"></i>
            <p>
              Data Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/dtguru" class="nav-link {{ Request::is('dashboard/dtguru*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Data Guru
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/sarpras" class="nav-link {{ Request::is('dashboard/sarpras*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-school"></i>
            <p>
              Sarana Prasarana
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/akreditasi" class="nav-link {{ Request::is('dashboard/akreditasi*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tasks"></i>
            <p>
              Akreditasi
            </p>
          </a>
        </li>

        <li class="nav-header">PROFIL</li>
        <li class="nav-item">
          <a href="/dashboard/profil/{{ Auth::User()->madrasah_id }}/edit"
            class="nav-link {{ Request::is('dashboard/profil*') ? 'active' : '' }}">
            <i class="nav-icon far fa-address-card"></i>
            <p>
              Profil
            </p>
          </a>
        </li>

        <li class="nav-header">LAPORAN</li>
        <li class="nav-item">
          <a href="/dashboard/laporan" class="nav-link {{ Request::is('dashboard/laporan*') ? 'active' : '' }}">
            <i class="nav-icon fab fa-wpforms"></i>
            <p>
              Kirim Laporan
            </p>
          </a>
        </li>
      </ul>
    </nav>
    @endif

    @if(Auth::user()->akses_id == 1)
      @include('dashboard.atemplate.sidebaradmin')        
    @endif
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
