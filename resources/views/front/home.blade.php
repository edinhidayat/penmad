@extends('front.template.index')
@section('konten')

    {{-- HERO --}}
    <section id="hero">
        <div class="row">
            <div class="col-md d-flex align-items-center justify-content-around px-4 py-5" style="flex-wrap: wrap;">
                <div>
                    <h1>Seksi Pendidikan Madrasah</h1>
                    <h4>Kantor Kementerian Agama Kabupaten Majalengka</h4>
                </div>
                <img class="img-fluid img-hero" src="../../img/hero-img.png" alt="Gambar Hero" style="max-width: 40%;border-radius:10px;">
            </div>
        </div>
    </section>

    {{-- CLIENTS --}}
    <section id="clients">
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
    </section>
    
    {{-- BERITA --}}
    <section id="berita">
        <div class="container my-4">
            <div class="row">
                <div class="col">
                    <h3 class="judul-section"><i class='bx bxs-florist'></i> Berita</h3>
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
                <a class="btn tombol mt-4 mb-4" href="/berita">Selengkapnya</a>
            </div>

        </div>
    </section>

    {{-- PELAYANAN --}}
    <section id="pelayanan">
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
    </section>

    {{-- MADRASAH DAN INFORMASI --}}
    <section id="informasi">
        <div class="container mb-5">
            <div class="row">

                {{-- DAFTAR MADRASAH --}}
                <div class="col-lg-4">
                    <h3 class="judul-section"><i class='bx bxs-graduation'></i> Madrasah</h3>
                    <hr class="garis-hr">

                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ra" aria-expanded="true" aria-controls="ra">
                                <h6><i class='bx bx-book-reader'></i> Raudhatul Athfal</h6>
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
                                <h6><i class='bx bx-book-reader'></i> Madrasah Ibtidaiyah</h6>
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
                                <h6><i class='bx bx-book-reader'></i> Madrasah Tsanawiyah</h6>
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
                                <h6><i class='bx bx-book-reader'></i> Madrasah Aliyah</h6>
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

                {{-- DAFTAR INFORMASI --}}
                <div class="col-lg-4 mb-5">
                    <h3 class="judul-section"><i class='bx bxs-alarm-exclamation'></i> Informasi</h3>
                    <hr class="garis-hr">

                    <div class="row">
                        <div class="col">
                            <ul class="list-group list-group-flush">
                                @if ($informasi->count())
                                @foreach ($informasi as $item)

                                {{-- @for ($i = 0; $i < 5; $i++) --}}
                                    <li class="list-group-item dowin">
                                        <a class="text-decoration-none" href="/informasi/{{ $item->id }}">
                                            <i class='bx bxs-right-arrow-circle'></i> {{ $item->judul }}
                                        </a>
                                    </li>
                                {{-- @endfor --}}
                                
                                @endforeach
                                @else
                                    <li><i class='bx bxs-right-arrow-circle'></i> Informasi Belum tersedia.</li>
                                @endif

                            </ul>
                        </div>
                    </div>

                </div>

                {{-- DAFTAR DOWNLOAD --}}
                <div class="col-lg-4">
                    <h3 class="judul-section"><i class='bx bxs-download'></i> Download</h3>
                    <hr class="garis-hr">


                    <div class="row">
                        <div class="col">
                            <ul class="list-group list-group-flush">
                                @if ($download->count())
                                @foreach ($download as $item)

                                {{-- @for ($i = 0; $i < 5; $i++) --}}

                                <li class="list-group-item dowin d-flex justify-content-between">
                                    <div>
                                        <i class='bx bxs-right-arrow-circle'></i> {{ $item->judul }}
                                    </div>
                                    <form action="/download/{{ $item->id }}" method="post" enctype="multipart/form-data">
                                        @method('get')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-danger"><i class='bx bx-download'></i>&nbsp; Unduh</button>
                                    </form>
                                </li>

                                {{-- @endfor --}}
                                
                                @endforeach
                                @else
                                    <li><i class='bx bxs-right-arrow-circle'></i> Data Download Belum tersedia.</li>
                                @endif
                                
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- KONTAK --}}
    <section id="kontak">
        <div class="container mb-4">
            <div class="row">
                <div class="col">
                    <h3 class="judul-section"><i class='bx bxs-building-house'></i> Kontak</h3>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1707.082789823233!2d108.22444218033633!3d-6.83540031450364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2f382d8f4381%3A0x8636711ad7db8f69!2sKantor%20Kementerian%20Agama%20Kabupaten%20Majalengka!5e0!3m2!1sid!2sid!4v1694272424511!5m2!1sid!2sid" width="100%" height="350" style="border-radius:5px;border:0;border-top:3px solid var(--oranye);border-bottom:3px solid var(--oranye);box-shadow:0 0 3px rgba(0,0,0,.5)" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection