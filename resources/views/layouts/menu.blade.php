<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active" href="{{ route('home.index') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="#visi-misi">Profil</a></li>
        <li class="dropdown"><a href="{{ route('berita.index') }}"><span>Berita</span> <i
                    class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Berita Dinas</a></li>
                <li><a href="#">Berita Pemerintahan</a>
                </li>
            </ul>
        </li>
        <li><a class="nav-link scrollto" href="">Layanan Publik</a></li>
        <li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Foto</a></li>
                <li><a href="#">Video</a>
                </li>
            </ul>
        </li>
        <li><a class="nav-link scrollto" href="{{ route('download.index') }}">Download</a></li>
        <li><a class="nav-link scrollto" href="{{ route('kontak.index') }}">Kontak Kami</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
