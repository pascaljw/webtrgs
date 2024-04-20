<nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="{{ route('site.beranda')}}" class="active">Beranda</a></li>
      <li class="dropdown has-dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
        <ul class="dd-box-shadow">
          <li><a href="#visi_misi">Visi Misi</a></li>
          <li><a href="#berita">Berita</a></li>
          <li><a href="#data_dosen">Data Dosen</a></li>
          <li><a href="#data_plp">Data PLP&Admin</a></li>
          <li><a href="#akreditasi">Akreditasi</a></li>
        </ul>
      </li>
      <li><a href="{{ route('site.announcement')}}">Pengumuman</a></li>
      <li class="dropdown has-dropdown"><a href="#"><span>Repositori</span> <i class="bi bi-chevron-down"></i></a>
        <ul class="dd-box-shadow">
          <li><a href="{{route('site.repo')}}">Data Skripsi</a></li>
          </ul>
      <li class="dropdown has-dropdown"><a href="#"><span>Unit Pendukung</span> <i class="bi bi-chevron-down"></i></a>
        <ul class="dd-box-shadow">
          <li><a href="#">Laboratorium</a></li>
          <li><a href="#">Organisasi Mahasiswa</a></li>
          </ul>
      </li>
      <li><a href="contact">Contact</a></li>
    </ul>

    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav><!-- End Nav Menu -->
