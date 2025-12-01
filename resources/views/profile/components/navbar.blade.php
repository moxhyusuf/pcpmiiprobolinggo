<header id="header" class="header d-flex align-items-center {{ $title === 'Beranda' ? 'fixed-top' : 'sticky-top' }}">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('beranda') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="{{ asset('img/logo-pmii.svg') }}" alt="Logo PMII">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('beranda') }}" class="{{ $title === 'Beranda' ? 'active' : '' }}">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('sambutan') }}" class="{{ $title === 'Sambutan' ? 'active' : '' }}">Sambutan Ketua</a></li>
                        <li><a href="{{ route('visi-misi') }}" class="{{ $title === 'Visi & Misi' ? 'active' : '' }}">Visi & Misi</a></li>
                        <li><a href="{{ route('struktur-organisasi') }}" class="{{ $title === 'Struktur Organisasi' ? 'active' : '' }}">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Data Anggota</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('kader') }}">Kader</a></li>
                        <li><a href="{{ route('alumni') }}">Alumni</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('galeri') }}" class="{{ $title === 'Galeri PMII' ? 'active' : '' }}">Galeri</a></li>
                <li><a href="{{ route('hotline') }}" class="{{ $title === 'Hotline PMII' ? 'active' : '' }}">Hotline</a></li>
                <li><a href="{{ route('berita') }}" class="{{ $title === 'Berita PMII' ? 'active' : '' }}">Berita</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted d-none d-sm-block" href="https://wa.me/+6285791540343" target="_blank">Hubungi Kami</a>

    </div>
</header>
