<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    {{-- DATA TABLE --}}
    <link rel="stylesheet" href="../../lte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">

    {{-- @if (Request::is('berita'))
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/berita.css">
  @endif --}}

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="background: #37517e;">
        <div class="container d-flex align-items-center">

            <a href="/"><img class="logo me-out" src="../../img/mdr.png" alt="Logo" style="height: 70px;"></a>
            {{-- <h1 class="logo me-auto"><a href="/" class="text-decoration-none text-white">Penmad</a></h1> --}}

            <nav id="navbar" class="navbar ms-auto">
                <ul>
                    <li><a class="nav-link" href="/">Beranda</a></li>
                    <li><a class="nav-link {{ Request::is('berita*') ? 'active' : '' }}" href="/berita">Berita</a></li>
                    <li class="dropdown"><a href="#" class="text-decoration-none"><span>Madrasah</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/mdr/ra" class="text-decoration-none text-dark">RA</a></li>
                            <li class="dropdown"><a href="#"
                                    class="text-decoration-none text-dark"><span>MI</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="/mdr/min" class="text-decoration-none text-dark">Negeri</a></li>
                                    <li><a href="/mdr/mis" class="text-decoration-none text-dark">Swasta</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"
                                    class="text-decoration-none text-dark"><span>MTs</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="/mdr/mtsn" class="text-decoration-none text-dark">Negeri</a></li>
                                    <li><a href="/mdr/mtss" class="text-decoration-none text-dark">Swasta</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"
                                    class="text-decoration-none text-dark"><span>MA</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="/mdr/man" class="text-decoration-none text-dark">Negeri</a></li>
                                    <li><a href="/mdr/mas" class="text-decoration-none text-dark">Swasta</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @guest
                        <li><a class="getstarted scrollto text-decoration-none" href="/login">Login</a></li>
                    @endguest
                    @auth
                        <li><a class="getstarted scrollto text-decoration-none" href="/dashboard">Dashboard</a></li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <div class="wrapper">
        <main id="main">

            @yield('konten')

        </main><!-- End #main -->
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Penmad</h3>
                        <p>
                            Jl. Siti Armilah no. 1 <br>
                            Majalengka 45418<br>
                            Jawa Barat<br><br>
                            <strong>Telp:</strong> 0233-281222<br>
                            <strong>Email:</strong> kabmajalengka@kemenag.go.id<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a class="text-decoration-none text-dark"
                                    href="https://kemenag.go.id/" target="_blank">Kemenag RI</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="text-decoration-none text-dark"
                                    href="https://madrasah.kemenag.go.id/" target="_blank">Pendidikan Madrasah</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="text-decoration-none text-dark"
                                    href="https://majalengka.kemenag.go.id/" target="_blank">Kemenag Majalengka</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Pelayanan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a class="text-decoration-none text-dark"
                                    href="https://emis.kemenag.go.id/" target="_blank">Emis</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="text-decoration-none text-dark"
                                    href="https://simpatika.kemenag.go.id/madrasah" target="_blank">Simpatika</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="text-decoration-none text-dark"
                                    href="https://bos.kemenag.go.id/" target="_blank">BOS</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Penmad</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#" class="text-decoration-none">EdinHidayat</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- jQuery -->
    <script src="../../lte/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../lte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>

    {{-- JS DATA TABLE --}}
    <script src="../../lte/dist/js/adminlte.js"></script>
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

    {{-- @if (Request::is('berita'))
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  @endif --}}

</body>

</html>
