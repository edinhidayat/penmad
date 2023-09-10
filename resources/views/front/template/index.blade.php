<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Add the slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- My CSS -->
    <link rel="stylesheet" href="../../css/style.css">
    @if (Request::is('berita*'))
        <link rel="stylesheet" href="../../css/berita.css">
    @endif
    {{-- DataTables CSS --}}
    @if (Request::is('mdr/*'))
      {{-- <link rel="stylesheet" href="../../lte/dist/css/adminlte.min.css"> --}}
      <link rel="stylesheet" href="../../lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="../../lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="../../lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    @endif
  </head>
  <body id="bodi">
    <div class="row">
      <div class="col">

        @include('front.template.navbar')
    
        @yield('konten')
    
        @include('front.template.footer')

      </div>
    </div>
    

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    {{-- JQuery --}}
    <script src="../../js/jquery-3.7.0.min.js"></script>
    {{-- DataTables JS --}}
    @if (Request::is('mdr/*'))
      {{-- <script src="../../lte/dist/js/adminlte.js"></script> --}}
      <script src="../../lte/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="../../lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="../../lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="../../lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <script src="../../lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="../../lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script src="../../lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="../../lte/plugins/jszip/jszip.min.js"></script>
      <script src="../../lte/plugins/pdfmake/pdfmake.min.js"></script>
      <script src="../../lte/plugins/pdfmake/vfs_fonts.js"></script>
      <script>
          $(function() {
              $("#example1").DataTable({
                  responsive: true,
                  lengthChange: false,
                  autoWidth: true,
                  buttons: ["print", "colvis"],
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
          });
      </script>
    @endif
    {{-- Slick JS --}}
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    {{-- My JS --}}
    <script src="../../js/script.js"></script>

  </body>
</html>