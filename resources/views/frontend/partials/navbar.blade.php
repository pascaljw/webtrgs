<nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="{{ route('site.beranda')}}" class="active">Beranda</a></li>
      <li class="dropdown has-dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
        <ul class="dd-box-shadow">
          <li><a href="{{route('site.visi_misi')}}">Visi Misi</a></li>
          <li><a href="{{route('site.berita')}}">Berita</a></li>
          <li><a href="{{route('site.data_dosen')}}">Data Dosen PLP Admin</a></li>
          <li><a href="{{route('site.akreditasi')}}">Akreditasi</a></li>
        </ul>
      </li>
      <li><a href="{{ route('site.announcement')}}">Pengumuman</a></li>
      <li class="dropdown has-dropdown"><a href=""><span>Repositori</span> <i class="bi bi-chevron-down"></i></a>
        <ul class="dd-box-shadow">
          <li><a href="{{route('site.repo')}}">Data Skripsi</a></li>
          </ul>
      <li class="dropdown has-dropdown"><a href="#"><span>Unit Pendukung</span> <i class="bi bi-chevron-down"></i></a>
        <ul class="dd-box-shadow">
          <li><a href="{{route('site.laboratorium')}}">Laboratorium</a></li>
          {{-- <li><a href="#">Organisasi Mahasiswa</a></li> --}}
          </ul>
      </li>
      <li><a href="contact">Contact</a></li>
    </ul>

    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav><!-- End Nav Menu -->