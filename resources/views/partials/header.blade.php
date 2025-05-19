<!-- Start header -->
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/SDN2KREBET1.png') }}" alt="image">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item dropdown">
                        <a id="dropdown-profil" class="nav-link dropdown-toggle {{ Request::is('profil/*') ? 'active' : '' }}" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/profil/tentang') }}">Tentang Sekolah</a>
                            <a class="dropdown-item" href="{{ url('/profil/visimisi') }}">Visi dan Misi</a>
                            <a class="dropdown-item" href="{{ url('/profil/struktur') }}">Struktur Organisasi</a>
                            <a class="dropdown-item" href="{{ url('/profil/akreditasi') }}">Akreditasi Sekolah</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('profil/*') ? 'active' : '' }}" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Directory
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/direktori/tenagapendidik') }}">Tenaga Pendidik</a>
                            <a class="dropdown-item" href="{{ url('/direktori/siswa') }}">Siswa</a>
                            <a class="dropdown-item" href="{{ url('/direktori/alumni') }}">Alumni</a>
                        </div>
                    </li>

                    <li><a class="nav-link {{ Request::is('gallery/galleryy') ? 'active' : '' }}" href="{{ url('/gallery/galleryy') }}">Gallery</a></li>
                    <li><a class="nav-link {{ Request::is('news') ? 'active' : '' }}" href="{{ url('https://maps.app.goo.gl/uLX9SAZPZK9DVZbL7') }}">Location</a></li>
                    <!-- <li><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="#contact">Pesan</a></li> -->
                    <li><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/') }}#contact">Testimony</a></li>
                </ul>
      

        </div>
    </nav>
</header>
<!-- End header -->