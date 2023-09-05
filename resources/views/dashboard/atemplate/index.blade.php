<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="../../../img/logokemenag.png" />
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../lte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../lte/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../../lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../../lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Select -->
    <link rel="stylesheet" href="../../../lte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../../lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    @if (Request::is('dashboard/dtguru*') ||
            Request::is('dashboard/dtsiswa*') ||
            Request::is('dashboard/akreditasi*') ||
            Request::is('dashboard/sarpras*') ||
            Request::is('dashboard/laporan*') ||
            Request::is('dashboard') ||
            Request::is('admin') ||
            Request::is('admin/laporan*') ||
            Request::is('admin/users*') ||
            Request::is('admin/bos*') ||
            Request::is('admin/ta*') ||
            Request::is('admin/katlap*') ||
            Request::is('admin/pos'))
        <!-- DataTables -->
        <link rel="stylesheet" href="../../../lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    @endif

    @if (Request::is('admin/pos*'))
        {{-- TRIX EDITOR --}}
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

        <style>
            trix-toolbar [data-trix-button-group="file-tools"] {
                display: none;
            }
        </style>
    @endif

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../../img/logokemenag.png" alt="Logo Kemenag" height="60"
                width="60">
        </div>

        @include('dashboard.atemplate.navbar')

        @include('dashboard.atemplate.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    @yield('konten')

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        {{-- FOOTER --}}
        <footer class="main-footer">
            <span><i>Seksi Pendidikan Madrasah Kab. Majalengka</i></span>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../../lte/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../../lte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../../lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../lte/plugins/moment/moment.min.js"></script>
    <script src="../../../lte/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../../lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../lte/dist/js/adminlte.js"></script>
    <!-- SweetAlert2 -->
    <script src="../../../lte/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Select2 -->
    <script src="../../../lte/plugins/select2/js/select2.full.min.js"></script>

    @if (Request::is('dashboard/dtguru*') ||
            Request::is('dashboard/dtsiswa*') ||
            Request::is('dashboard/akreditasi*') ||
            Request::is('dashboard/sarpras*') ||
            Request::is('dashboard/laporan*') ||
            Request::is('dashboard') ||
            Request::is('admin') ||
            Request::is('admin/laporan*') ||
            Request::is('admin/users*') ||
            Request::is('admin/bos*') ||
            Request::is('admin/ta*') ||
            Request::is('admin/katlap*') ||
            Request::is('admin/pos'))
        <!-- DataTables  & Plugins -->
        <script src="../../../lte/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../../lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../../lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../../lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../../../lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../../lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../../../lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../../../lte/plugins/jszip/jszip.min.js"></script>
        <script src="../../../lte/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../../../lte/plugins/pdfmake/vfs_fonts.js"></script>
        <script>
            $(function() {
                $("#example1").DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    // buttons: ["csv", "excel", "pdf", "print", "colvis"],
                }).buttons().container().appendTo("#example1_wrapper .col-md-6:eq(0)");
                $("#example2").DataTable({
                    paging: true,
                    lengthChange: false,
                    searching: true,
                    ordering: true,
                    info: true,
                    autoWidth: false,
                    responsive: true,
                });
                $("#example3").DataTable({
                    paging: true,
                    lengthChange: false,
                    searching: false,
                    ordering: true,
                    info: true,
                    autoWidth: false,
                    responsive: true,
                });
            });
        </script>
    @endif

    <script>
        const $salahpassword = document.querySelector(".salahpassword");
        const $beda = document.querySelector(".beda");
        const $suksesubahpassword = document.querySelector(".suksesubahpassword");
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            if ($suksesubahpassword) {
                Swal.fire({
                    toast: true,
                    icon: 'success',
                    title: 'Password berhasil diUbah.',
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
            };
            if ($salahpassword) {
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: 'Password awal tidak sama!',
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
            };
            if ($beda) {
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: 'Ulangi input password yang baru!',
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
            };
        })
    </script>

    @if (Request::is('dashboard/laporan*') || Request::is('admin/pos*'))
        <!-- bs-custom-file-input -->
        <script src="../../../lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <script>
            $(function() {
                bsCustomFileInput.init();
            });
        </script>
    @endif

</body>

</html>
