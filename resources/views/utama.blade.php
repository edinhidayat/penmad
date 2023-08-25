<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <a href="/"><img class="logo me-out" src="img/mdr.png" alt="Logo" style="height: 70px;"></a>

            {{-- <h1 class="logo me-auto"><a href="/">Madrasah<br><span class="h6 text-warning">Mandiri Berprestasi</span></a></h1> --}}

            <nav id="navbar" class="navbar ms-auto">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link" href="/berita">Berita</a></li>
                    <li class="dropdown"><a href="#"><span>Madrasah</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/mdr/ra">RA</a></li>
                            <li class="dropdown"><a href="#"><span>MI</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="/mdr/min">Negeri</a></li>
                                    <li><a href="/mdr/mis">Swasta</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>MTs</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="/mdr/mtsn">Negeri</a></li>
                                    <li><a href="/mdr/mtss">Swasta</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>MA</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="/mdr/man">Negeri</a></li>
                                    <li><a href="/mdr/mas">Swasta</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#about">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#services">Pelayanan</a></li>
                    <li><a class="nav-link scrollto" href="#team">Personal</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    @guest
                        <li><a class="getstarted scrollto" href="/login">Login</a></li>
                    @endguest
                    @auth
                        <li><a class="getstarted scrollto" href="/dashboard">Dashboard</a></li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Seksi Pendidikan Madrasah</h1>
                    <h2>Kantor Kementerian Agama Kabupaten Majalengka</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        @guest
                            <a href="/login" class="btn-get-started scrollto">Login</a>
                        @endguest
                        @auth
                            <a href="/dashboard" class="btn-get-started scrollto">Dashboard</a>
                        @endauth
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://pusaka.kemenag.go.id/" target="_blank" style="text-decoration: none;">
                            <img src="assets/img/clients/pusaka.webp" class="img-fluid" alt="">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://bos.kemenag.go.id/" target="_blank" style="text-decoration: none;">
                            <img src="assets/img/clients/bos.png" class="img-fluid" alt="">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://emis.kemenag.go.id/" target="_blank" style="text-decoration: none;">
                            <img src="assets/img/clients/emis.png" class="img-fluid" alt="">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://simpatika.kemenag.go.id/madrasah" target="_blank"
                            style="text-decoration: none;">
                            <img src="assets/img/clients/simpatika.png" class="img-fluid" alt="">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://jdih.kemenag.go.id/regulation/page" target="_blank"
                            style="text-decoration: none;">
                            <img src="assets/img/clients/jdih.png" class="img-fluid" alt="">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://elearning.kemenag.go.id/" target="_blank" style="text-decoration: none;">
                            <img src="assets/img/clients/elearning.png" class="img-fluid" alt="">
                        </a>
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Profil</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <h4>Visi</h4>
                        <p>
                            MEMBERIKAN PELAYANAN PRIMA DAN PEMBINAAN SECARA TERSTRUKTUR TERHADAP RAUDLATUL ATHFAL &
                            MADRASAH BERKUALITAS UNTUK MEWUJUDKAN RA/MADRASAH YANG MANDIRI BERPRESTASI.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h4>Misi</h4>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Meningkatkan Layanan Penguatan Lembaga RA dan
                                Madrasah</li>
                            <li><i class="ri-check-double-line"></i> Melakukan Koordinasi dan Konsultasi dengan Tenaga
                                Pendidik dan Tenaga Kependidikan serta Peserta Didik</li>
                            <li><i class="ri-check-double-line"></i> Meningkatkan Layanan Administrasi Pendidikan
                                Secara Transparan dan Akuntabel</li>
                            <li><i class="ri-check-double-line"></i> Meningkatkan Akses Data dan Informasi RA dan
                                Madrasah</li>
                            <li><i class="ri-check-double-line"></i> Mewujudkan Lembaga dan Peserta Didik yang
                                Berprestasi</li>
                            <li><i class="ri-check-double-line"></i> Sinergitas dengan Seluruh Stakeholder Pendidikan
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Penjabaran <strong>Misi</strong></h3>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapsed"
                                        data-bs-target="#accordion-list-1"><span>01</span> Meningkatkan Layanan
                                        Penguatan Lembaga RA dan Madrasah <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                                        <ol>
                                            <li class="mb-0 pb-0">Peningkatan mutu Lembaga RA dan Madrasah melalui
                                                pelaksanaan akreditasi RA/Madrasah.</li>
                                            <li class="mt-0 pt-0">Peningkatan Layanan Kelembagaan RA dan Madrasah
                                                melalui pembinaan.</li>
                                        </ol>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> Melakukan Koordinasi dan Konsultasi dengan
                                        Tenaga Pendidik dan Tenaga Kependidikan serta Peserta Didik <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <ol>
                                            <li class="mb-0 pb-0">Peningkatan kompetensi tenaga pendidik dan
                                                kependidikan.</li>
                                            <li class="mt-0 pt-0">Peningkatan layanan akses pendidikan terhadap peserta
                                                didik.</li>
                                        </ol>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Meningkatkan Layanan Administrasi Pendidikan
                                        Secara Transparan dan Akuntabel <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <ol>
                                            <li class="mb-0 pb-0">Penyajian layanan administrasi Pendidikan secara
                                                realtime.</li>
                                            <li class="mt-0 pt-0 mb-0 pb-0">Pelaksanaan layanan administrasi Pendidikan
                                                secara transparan.</li>
                                            <li class="mt-0 pt-0">Pelaporan administrasi Pendidikan secara akuntabel.
                                            </li>
                                        </ol>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4"
                                        class="collapsed"><span>04</span> Meningkatkan Akses Data dan Informasi RA dan
                                        Madrasah <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                        <ol>
                                            <li class="mb-0 pb-0">Peningkatan kualitas dan kuantitas data RA dan
                                                Madrasah melalui EMIS dan SIMPATIKA.</li>
                                            <li class="mt-0 pt-0">Peningkatan akses informasi RA dan Madrasah melalui
                                                EMIS dan SIMPATIKA.</li>
                                        </ol>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5"
                                        class="collapsed"><span>05</span> Mewujudkan Lembaga dan Peserta Didik yang
                                        Berprestasi <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                                        <ol>
                                            <li class="mb-0 pb-0">Mencetak Lembaga RA dan Madrasah yang memiliki daya
                                                saing.</li>
                                            <li class="mt-0 pt-0">Mencetak peserta didik RA dan Madrasah yang
                                                berprestasi di tingkat daerah maupun nasional.</li>
                                        </ol>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6"
                                        class="collapsed"><span>06</span> Sinergitas dengan Seluruh Stakeholder
                                        Pendidikan <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                                        <ol>
                                            <li class="mb-0 pb-0">Melaksanakan koordinasi dengan pemerintah daerah.
                                            </li>
                                            <li class="mt-0 pt-0 mb-0 pb-0">Melaksanakan koordinasi dengan pemerintah
                                                provinsi.</li>
                                            <li class="mt-0 pt-0">Melaksanakan koordinasi dengan seluruh instansi
                                                secara lintas sektoral.</li>
                                        </ol>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in"
                        data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pelayanan</h2>
                    <p>Sesuai dengan Peraturan Menteri Agama Nomor 19 Tahun 2019 Tentang Organisasi dan Tata Kerja
                        Instansi Vertikal Kementerian Agama.</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4>Bimbingan Teknis dan Pembinaan</h4>
                            <p>Bimbingan di bidang kurikulum dan evaluasi serta Pembinaan tenaga pendidik dan
                                kependidikan</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class='bx bxs-data'></i></div>
                            <h4>Pengelolaan Data</h4>
                            <p>Pengelolaan data sarana prasarana, data siswa, dan data kelembagaan</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class='bx bx-list-check'></i></div>
                            <h4>Sistem Informasi</h4>
                            <p>Pengelolaan sistem informasi pendidikan madrasah pada Raudlatul Athfal (RA), Madrasah
                                Ibtidaiyah (MI), Madrasah Tsanawiyah (MTs), dan Madrasah Aliyah (MA)</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4>Penyusunan Rencana dan Pelaporan</h4>
                            <p>Penyiapan perumusan kebijakan teknis dan perencanaan, Evaluasi dan penyusunan laporan di
                                bidang pendidikan madrasah</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Personal</h2>
                    <p>Personil pada Seksi Madrasah Kantor Kementerian Agama Kabupaten Majalengka.</p>
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/kasi.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Dr. H. HERU HOERUDIN, M.Ag</h4>
                                <span>197707131998031001</span>
                                <p>Kepala Seksi Pendidikan Madrasah</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/pa-asep.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>ASEP SYAEFUL BAHRI, M.AP</h4>
                                <span>197609272006041003</span>
                                <p>Pengembang Kurikulum</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/pa-aip.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>AIP SYARIP HIDAYATULLAH, M.Pd</h4>
                                <span>198011242009011007</span>
                                <p>Pengembang Kapasitas Pendidik</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/pa-fauzi.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>RIDWAN FAUZI, S.Pd</h4>
                                <span>198405072009101001</span>
                                <p>Pengembang Kelembagaan</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/bu-mae.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>MAESAROH, A.Ma</h4>
                                <span>196805141990032003</span>
                                <p>JFU Pengembang Tenaga Kependidikan</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Job Description</h2>
                    <p>Seksi Pendidikan Madrasah mempunyai tugas Melaksanakan penyusunan bahan dan pelaksanan kebijakan
                        teknis, pelayanan, bimbingan teknis, pembinaan, pengelolaan sistem informasi, dan penyusunan
                        rencana, serta pelaporan di bidang kurikulum, sarana, kelembagaan, dan kesiswaan, serta guru dan
                        tenaga kependidikan madrasah.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Kepala Seksi Pendidikan Madrasah<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Merencanakan kegiatan Seksi, Membagi dan Membimbing Tugas Bawahan, Menyiapkan bahan,
                                    Melaksanakan Pemantauan, Megevaluasi Kegiatan, dan Menganalisis pelaporan.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Pengembang Kurikulum<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Melakukan kegiatan Pengembangan Kurikulum yang mencakup perencanaan, penyusunan,
                                    implementasi, dan evaluasi Kurikulum.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Pengembang Kapasitas Pendidik<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Melaksanakan penyiapan bahan perumusan kebijakan, koordinasi, pembinaan, pengawasan,
                                    pengendalian dan pemberian bimbingan kegiatan di bidang pengembangan kapasitas
                                    pendidik dan tenaga kependidikan.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Pengembang Kelembagaan<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Melakukan penyiapan bahan pelaksanaan pelayanan, bimbingan teknis, dan pembinaan di
                                    bidang pengembangan kelembagaan, kerja sama, serta pengelolaan sistem informasi
                                    pendidikan RA, MI, MTs dan MA.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">JFU Pengembang Tenaga Kependidikan<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Penyiapan bahan kebijakan teknis di bidang tenaga kependidikan pada RA dan Madrasah,
                                    serta melakukan pelayanan, bimbingan teknis, dan supervisi tenaga kependidikan pada
                                    MTs dan MA.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row">

                    <div class="col-lg ms-auto">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Alamat:</h4>
                                <p>Jalan Siti Armilah No. 1 Majalengka</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>kabmajalengka@kemenag.go.id</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telp:</h4>
                                <p>0233-281222</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.59112893382132!2d108.22458936884875!3d-6.835554384929668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2f382d8f4381%3A0x8636711ad7db8f69!2sKantor%20Kementerian%20Agama%20Kabupaten%20Majalengka!5e0!3m2!1sid!2sid!4v1684073248397!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 290px;"
                                allowfullscreen></iframe>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

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
                            <li><i class="bx bx-chevron-right"></i> <a href="https://kemenag.go.id/"
                                    target="_blank">Kemenag RI</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://madrasah.kemenag.go.id/"
                                    target="_blank">Pendidikan Madrasah</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://majalengka.kemenag.go.id/"
                                    target="_blank">Kemenag Majalengka</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Pelayanan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://emis.kemenag.go.id/"
                                    target="_blank">Emis</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://simpatika.kemenag.go.id/madrasah"
                                    target="_blank">Simpatika</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://bos.kemenag.go.id/"
                                    target="_blank">BOS</a></li>
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
                Designed by <a href="#">EdinHidayat</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
