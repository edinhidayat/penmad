<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Add the slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="bodi">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/mdr.png" class="img-fluid" alt="Logo" style="height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link menu aktif" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Madrasah
                        </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">RA</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">MIN</a></li>
                                <li><a class="dropdown-item" href="#">MIS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">MTsN</a></li>
                                <li><a class="dropdown-item" href="#">MTsS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">MAN</a></li>
                                <li><a class="dropdown-item" href="#">MAS</a></li>
                            </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- HERO --}}
    <div id="hero">
        <div class="row">
            <div class="col-md d-flex align-items-center justify-content-around px-4 py-5" style="flex-wrap: wrap;">
                <div>
                    <h1>Seksi Pendidikan Madrasah</h1>
                    <h4>Kantor Kementerian Agama Kabupaten Majalengka</h4>
                </div>
                <img class="img-fluid img-hero" src="img/hero-img.png" alt="Gambar Hero" style="max-width: 40%;border-radius:10px;">
            </div>
        </div>
    </div>

    {{-- CLIENTS --}}
    <div id="clients">
        <div class="container">
            <div class="row">
                <div class="col klien my-4">
                
                    <a class="klien-icon mb-3" href="https://pusaka.kemenag.go.id/" target="_blank" style="text-decoration: none;">
                        <img src="img/clients/pusaka.webp" class="img-fluid klien-sub" alt="">
                    </a>
                    
                    <a class="klien-icon mb-3" href="https://elearning.kemenag.go.id/" target="_blank" style="text-decoration: none;">
                        <img src="img/clients/elearning.png" class="img-fluid klien-sub" alt="">
                    </a>
                    
                    <a class="klien-icon mb-3" href="https://emis.kemenag.go.id/" target="_blank" style="text-decoration: none;">
                        <img src="img/clients/emis.png" class="img-fluid klien-sub" alt="">
                    </a>
                    
                    <a class="klien-icon mb-3" href="https://simpatika.kemenag.go.id/madrasah" target="_blank"
                        style="text-decoration: none;">
                        <img src="img/clients/simpatika.png" class="img-fluid klien-sub" alt="">
                    </a>
                
                    <a class="klien-icon mb-3" href="https://jdih.kemenag.go.id/regulation/page" target="_blank"
                        style="text-decoration: none;">
                        <img src="img/clients/jdih.png" class="img-fluid klien-sub" alt="">
                    </a>

                    <a class="klien-icon mb-3" href="https://bos.kemenag.go.id/" target="_blank" style="text-decoration: none;">
                        <img src="img/clients/bos.png" class="img-fluid klien-sub" alt="">
                    </a>
 
                </div>
            </div>
        </div>
    </div>
    
    {{-- BERITA --}}
    <div id="berita">
        <div class="container my-4">
            <div class="row">
                <div class="col">
                    <h3 style="color: #474747;"><i class='bx bxs-florist'></i> Berita</h3>
                    <hr class="garis-hr">
                </div>
            </div>
            <div class="row">
                <div class="col berita-kol">

                    @if ($berita->count())
                    @for ($i = 0; $i < 8; $i++)
                        <div class="berita-ref mx-3 mb-3">
                            <a href="/berita/{{ $berita[$i]->id }}" class="text-decoration-none text-dark">
                                <div class="berita-kotak">
                                    <img class="img-fluid" src="{{ asset('storage/' . substr($berita[$i]->gambar, 7)) }}" alt="Gambar Berita">
                                </div>
                                <div class="berita-judul">
                                    <p style="font-size: 12px;">{{ $berita[$i]->judul }}</p>
                                </div>
                            </a>
                        </div>
                    @endfor
                    @endif

                </div>
            </div>
            <div class="col text-center">
                <a class="btn tombol mt-4 mb-4" href="berita">Selengkapnya</a>
            </div>

        </div>
    </div>

    {{-- PELAYANAN --}}
    <div id="pelayanan">
        <div class="container my-4">
            <div class="text-center my-4">
                <p style="font-size:18px;color:white;margin-bottom:50px;">Sesuai dengan Peraturan Menteri Agama Nomor 19 Tahun 2019 Tentang Organisasi dan Tata Kerja
                    Instansi Vertikal Kementerian Agama.</p>
            </div>
            <div class="row">
                <div class="col-md pelayanan-item">

                    <div class="pelayanan-box mb-3 p-3">
                        <h1><i class='bx bxs-chalkboard'></i></h1>
                        <h4 class="mb-3">Bimbingan Teknis dan Pembinaan</h4>
                        <p>Bimbingan di bidang kurikulum dan evaluasi serta Pembinaan tenaga pendidik dan
                            kependidikan</p>
                    </div>

                    <div class="pelayanan-box mb-3 p-3">
                        <h1><i class='bx bxs-hdd'></i></h1>
                        <h4 class="mb-3">Pengelolaan Data</h4>
                        <p>Pengelolaan data sarana prasarana, data siswa, dan data kelembagaan</p>
                    </div>

                    <div class="pelayanan-box mb-3 p-3">
                        <h1><i class='bx bxs-microphone'></i></h1>
                        <h4 class="mb-3">Sistem Informasi</h4>
                        <p>Pengelolaan sistem informasi pendidikan madrasah pada Raudlatul Athfal (RA), Madrasah
                            Ibtidaiyah (MI), Madrasah Tsanawiyah (MTs), dan Madrasah Aliyah (MA)</p>
                    </div>

                    <div class="pelayanan-box mb-3 p-3">
                        <h1><i class='bx bxs-report'></i></h1>
                        <h4 class="mb-3">Penyusunan Rencana dan Pelaporan</h4>
                        <p>Penyiapan perumusan kebijakan teknis dan perencanaan, Evaluasi dan penyusunan laporan di
                            bidang pendidikan madrasah</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- INFORMASI --}}
    <div id="infomrasi">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h3 style="color: #474747;"><i class='bx bxs-graduation'></i> Madrasah</h3>
                    <hr class="garis-hr">

                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ra" aria-expanded="true" aria-controls="ra">
                                <h6>Raudhatul Athfal</h6>
                                </button>
                            </h2>
                            <div id="ra" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <ul>
                                    <li style="list-style-type:none;">
                                        <a class="text-decoration-none" href="mdr/ra">
                                            <i class='bx bx-check-double'></i> Raudhatul Athfal
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mi" aria-expanded="false" aria-controls="mi">
                                <h6>Madrasah Ibtidaiyah</h6>
                                </button>
                            </h2>
                            <div id="mi" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <ul class="d-flex justify-content-around px-0">
                                    <li style="list-style-type:none;">
                                        <a class="text-decoration-none" href="mdr/min">
                                            <i class='bx bx-check-double'></i> MI Negeri
                                        </a>
                                    </li>
                                    <li style="list-style-type:none;">
                                        <a class="text-decoration-none" href="mdr/mis">
                                            <i class='bx bx-check-double'></i> MI Swasta
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mts" aria-expanded="false" aria-controls="mts">
                                <h6>Madrasah Tsanawiyah</h6>
                                </button>
                            </h2>
                            <div id="mts" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <ul class="d-flex justify-content-around px-0">
                                    <li style="list-style-type:none;">
                                        <a class="text-decoration-none" href="mdr/mtsn">
                                            <i class='bx bx-check-double'></i> MTs Negeri
                                        </a>
                                    </li>
                                    <li style="list-style-type:none;">
                                        <a class="text-decoration-none" href="mdr/mtss">
                                            <i class='bx bx-check-double'></i> MTs Swasta
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ma" aria-expanded="false" aria-controls="ma">
                                <h6>Madrasah Aliyah</h6>
                                </button>
                            </h2>
                            <div id="ma" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <ul class="d-flex justify-content-around px-0">
                                    <li style="list-style-type:none;">
                                        <a class="text-decoration-none" href="mdr/man">
                                            <i class='bx bx-check-double'></i> MA Negeri
                                        </a>
                                    </li>
                                    <li style="list-style-type:none;">
                                        <a class="text-decoration-none" href="mdr/mas">
                                            <i class='bx bx-check-double'></i> MA Swasta
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="col-lg-7">
                    <h3 style="color: #474747;"><i class='bx bxs-alarm-exclamation'></i> Informasi</h3>
                    <hr class="garis-hr">
                </div>
            </div>
        </div>
    </div>

    {{-- KONTAK --}}
    <div id="kontak">
        <div class="container mb-4">
            <div class="row">
                <div class="col">
                    <h3 style="color: #474747;"><i class='bx bxs-building-house'></i> Kontak</h3>
                    <hr class="garis-hr">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <ul>
                        <li class="kontak-alamat">
                            <h6><i class='bx bxs-map'></i> Jalan Siti Armilah No.1 Majalengka</h6>
                        </li>
                        <li class="kontak-alamat">
                            <h6><i class='bx bxs-envelope'></i> kabmajalengka@kemenag.go.id</h6>
                        </li>
                        <li class="kontak-alamat">
                            <h6><i class='bx bxs-phone'></i> 0233-281222</h6>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1707.082789823233!2d108.22444218033633!3d-6.83540031450364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2f382d8f4381%3A0x8636711ad7db8f69!2sKantor%20Kementerian%20Agama%20Kabupaten%20Majalengka!5e0!3m2!1sid!2sid!4v1694272424511!5m2!1sid!2sid" width="100%" height="350" style="border:0;border-top:3px solid var(--oranye);border-bottom:3px solid var(--oranye);box-shadow:0 0 3px rgba(0,0,0,.5)" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    {{-- FOOTER --}}
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-4 text-center">
                    <img class="img-fluid mb-3" src="img/logokemenag.png" alt="Logo Kemenag" style="filter:drop-shadow(0 0 2px rgba(0,0,0,.5));">
                    <h5 class="mb-0">KANTOR KEMENTERIAN AGAMA</h5>
                    <h6>KABUPATEN MAJALENGKA</h6>
                </div>

                <div class="col-md-4 link">
                    <h6>Links</h6>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://kemenag.go.id/"
                                target="_blank">Kemenag RI</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://madrasah.kemenag.go.id/"
                                target="_blank">Pendidikan Madrasah</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://majalengka.kemenag.go.id/"
                                target="_blank">Kemenag Majalengka</a></li>
                    </ul>
                </div>

                <div class="col-md-4 link">
                    <h6>Pelayanan</h6>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://emis.kemenag.go.id/"
                                target="_blank">Emis</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://simpatika.kemenag.go.id/madrasah"
                                target="_blank">Simpatika</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://bos.kemenag.go.id/"
                                target="_blank">BOS</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5" style="background-color: rgb(255, 127, 80);border-top:3px solid white;">
            <div class="col d-flex justify-content-between px-5">
                <div class="copyright py-3">
                    &copy; Copyright <strong><span>Penmad</span></strong>
                </div>
                <div class="credits py-3">
                    Designed by <a class="text-decoration-none fs-6 text-white" href="https://edinhidayat.github.io/" target="_blank">EdinHidayat</a>
                </div>
            </div>
        </div>
    </footer>

    



    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- Boxicons JS -->
    {{-- <link href='https://unpkg.com/boxicons@2.1.4/dist/boxicons.js' rel='stylesheet'> --}}
    {{-- JQuery --}}
    <script src="js/jquery-3.7.0.min.js"></script>
    {{-- Slick JS --}}
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    {{-- My JS --}}
    <script src="js/script.js"></script>
  </body>
</html>