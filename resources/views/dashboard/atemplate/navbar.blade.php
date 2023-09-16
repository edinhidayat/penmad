<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link d-block">{{ Auth::user()->madrasah->namamadrasah }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="/dashboard/passuser"><i class="fas fa-key"></i> Ubah Password</a>
          <button type="button" class="dropdown-item border-0" data-toggle="modal" data-target="#tentang"><i class="fas fa-user-secret"></i> Tentang Aplikasi</button>
          <div class="dropdown-divider"></div>
          <button type="button" class="dropdown-item border-0" data-toggle="modal" data-target="#keluar"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Modal -->
<div class="modal fade" id="keluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Keluar Aplikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin mau Logout ???</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- Modal -->
<div class="modal fade" id="tentang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-secret"></i> Tentang Aplikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4 class="text-info">Aplikasi <span class="text-warning">Si</span><span class="text-primary">Penmad</span></h4>
        <h5 class="text-success">(<i>Sistem Informasi Pendidikan Madrasah</i>)</h5>
        <h6>v.1.0.0</h6>
        <p class="mt-5 mb-0 text-muted">Web Development :<br>~ H. Edin Hidayat Hasanudin, S.Kom ~</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>