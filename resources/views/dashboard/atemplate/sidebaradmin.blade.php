<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="/admin" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/admin/laporan" class="nav-link {{ Request::is('admin/laporan*') ? 'active' : '' }}">
                <i class="nav-icon fab fa-wpforms"></i>
                <p>
                    Daftar Laporan
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/admin/bos" class="nav-link {{ Request::is('admin/bos*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-hand-holding-usd"></i>
                <p>
                    Anggaran BOS
                </p>
            </a>
        </li>

        <li class="nav-header">PUBLIC</li>

        <li class="nav-item">
            <a href="/admin/pos" class="nav-link {{ Request::is('admin/pos*') ? 'active' : '' }}">
                <i class="nav-icon far fa-newspaper"></i>
                <p>
                    Berita
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/informasi" class="nav-link {{ Request::is('admin/informasi*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-info-circle"></i> 
                <p>
                    Informasi
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/download" class="nav-link {{ Request::is('admin/download*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-download"></i> 
                <p>
                    Download
                </p>
            </a>
        </li>

        <li class="nav-header">PENGATURAN</li>
        <li
            class="nav-item {{ Request::is('admin/users*') || Request::is('admin/ta*') || Request::is('admin/katlap*') ? 'menu-open' : '' }}">
            <a href="#"
                class="nav-link {{ Request::is('admin/users*') || Request::is('admin/ta*') || Request::is('admin/katlap*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                    Settings
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/katlap" class="nav-link {{ Request::is('admin/katlap*') ? 'active' : '' }}">
                        <i class="fas fa-layer-group nav-icon"></i>
                        <p>Kategori Laporan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/ta" class="nav-link {{ Request::is('admin/ta*') ? 'active' : '' }}">
                        <i class="far fa-calendar-alt nav-icon"></i>
                        <p>Tahun Ajaran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/users" class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Daftar User
                        </p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
