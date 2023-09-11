<!-- NAVBAR -->
<nav id="nav" class="navbar navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="../../img/mdr.png" class="img-fluid" alt="Logo" style="height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'aktif' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('berita*') ? 'aktif' : '' }}" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profil*') ? 'aktif' : '' }}" href="/profil">Profil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('informasi*') || Request::is('download*') ? 'aktif' : '' }} disabled" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Utility
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/informasi">Informasi</a></li>
                            <li><a class="dropdown-item" href="/download">Download</a></li>
                        </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('mdr/*') ? 'aktif' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Madrasah
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/mdr/ra">RA</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/mdr/min">MIN</a></li>
                            <li><a class="dropdown-item" href="/mdr/mis">MIS</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/mdr/mtsn">MTsN</a></li>
                            <li><a class="dropdown-item" href="/mdr/mtss">MTsS</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/mdr/man">MAN</a></li>
                            <li><a class="dropdown-item" href="/mdr/mas">MAS</a></li>
                        </ul>
                </li>

                @guest
                    <li><a class="btn tombol" href="/login">Login</a></li>
                @endguest
                @auth
                    <li><a class="btn tombol" href="/dashboard">Dashboard</a></li>
                @endauth

            </ul>
        </div>
    </div>
</nav>