
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SiPenmad | Daftar Akun</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Select -->
  <link rel="stylesheet" href="../lte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../lte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../lte/index2.html" class="h1"><b>SiPenmad</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Daftar Akun</p>

      @if (session()->has('kesalahan'))
      <div class="swalDefaultError"></div>
      @endif
      @if (session()->has('suksestambah'))
        <div class="swalDefaultSuccess"></div>
      @endif

      <form action="/registration" method="post">
        @csrf
        <div class="input-group mb-3">
            <select class="form-control select2bs4 @error('madrasah_id') is-invalid @enderror" name="madrasah_id" id="madrasah_id" style="width: 100%;" value="{{ old('madrasah_id') }}" required>
                @foreach ($madrasah as $item)
                    @if (old('madrasah_id') == $item->id)
                    <option value="{{ $item->id }}" selected="selected">{{ $item->namamadrasah }}</option>
                    @else
                    <option value="{{ $item->id }}">{{ $item->namamadrasah }}</option>
                    @endif
                @endforeach
            </select>
            @error('madrasah_id')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" id="username" value="{{ old('username') }}" autofocus required>
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
          <input type="password" class="form-control @error('password1') is-invalid @enderror" placeholder="Password" name="password1" id="password1" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password1')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Ulangi password" name="password" id="password" required>
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
        <input type="hidden" name="akses_id" id="akses_id" value="2">
        <input type="hidden" name="aktif" id="aktif" value="0">
        <div class="row">
          <div class="col-md">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-0 text-center">Sudah punya akun, silakan <a href="/login" class="text-center">Login</a></p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../lte/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Select2 -->
<script src="../lte/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="../lte/dist/js/adminlte.min.js"></script>
<script>
  const $swalDefaultSuccess = document.querySelector(".swalDefaultSuccess");
  const $swalDefaultError = document.querySelector(".swalDefaultError");
  $(function () {
  //Initialize Select2 Elements
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })

  if ($swalDefaultSuccess) {
    Swal.fire({
      toast: true,
      icon: 'success',
      title: 'Pendaftaran berhasil. Silakan hubungi Operator Penmad untuk Aktivasi Login.',
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    })
  };
  if ($swalDefaultError) {
    Swal.fire({
      toast: true,
      icon: 'error',
      title: 'Password tidak sama!',
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    })
  };
  // $('.swalDefaultWarning'){
  //   Toast.fire({
  //     icon: 'warning',
  //     title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //   })
  // };
  // $('.swalDefaultQuestion') {
  //   Toast.fire({
  //     icon: 'question',
  //     title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //   })
  // };
})
</script>
</body>
</html>
