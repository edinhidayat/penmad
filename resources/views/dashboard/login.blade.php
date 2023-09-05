<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SiPenmad | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../lte/plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../lte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

  @if (session()->has('gagal'))
    <div class="swalDefaultError"></div>
  @endif
  @if (session()->has('keluar'))
    <div class="keluar"></div>
  @endif
  @if (session()->has('notregister'))
    <div class="peringatan"></div>
  @endif

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>SiPenmad</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silakan Login</p>

      <form action="/login" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" autofocus required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('username')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>
        <div class="row">
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <a href="/" class="btn btn-success btn-block">Beranda</a>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-0 mt-3 text-center">
        Belum punya akun, silakan <a href="/registration" class="text-center">Daftar</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../lte/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="../lte/dist/js/adminlte.min.js"></script>

<script>
  const $swalDefaultSuccess = document.querySelector(".swalDefaultSuccess");
  const $swalDefaultError = document.querySelector(".swalDefaultError");
  const $belumaktif = document.querySelector(".belumaktif");
  const $keluar = document.querySelector(".keluar");
  const $peringatan = document.querySelector(".peringatan");
  $(function () {
    if ($swalDefaultError) {
        Swal.fire({
        toast: true,
        icon: 'error',
        title: 'Username/Password Salah!',
        position: 'top-end',
        showConfirmButton: false,
        timer: 4000
      })
    };
    if ($keluar) {
      Swal.fire({
        toast: true,
        icon: 'success',
        title: 'Anda berhasil Logout.',
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      })
    };
    if($peringatan){
      alert ("Silakan hubungi Admin Penmad untuk Aktivasi")
    }
  })
</script>

</body>
</html>
