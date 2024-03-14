<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
      <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="{{ route('site.story') }}">Selayang Pandang</a></li>
          <li><a href="{{ route('site.vision')}}">Visi & Misi</a></li>
          <li><a href="{{ route('site.structure')}}">Struktur Organisasi</a></li>
          <li><a href="{{ route('site.teams.lecturer') }}">Dosen</a></li>
          <li><a href="{{ route('site.teams.staff') }}">Tenaga Kependidikan</a></li>
          <li><a href="{{ route('site.partner') }}">Kerjasama</a></li>
          <li><a href="{{ route('site.acreditation')}}">Akreditasi</a></li>
        </ul>
      </li>

      <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="{{ route('site.documents') }}">Direktori Akademik</a></li>
          <li><a href="{{ route('site.job') }}">Profil Lulusan</a></li>
          <li><a href="{{ route('site.tuition') }}">Biaya Kuliah</a></li>
          <li><a href="{{ route('site.service') }}">Layanan Politani</a></li>
          <li><a href="{{ route('site.curriculum') }}">Kurikulum</a></li>
          <li><a href="{{ route('site.graduation') }}">Syarat Kelulusan</a></li>
          <li><a href="{{ route('site.leave') }}">Cuti Akademik</a></li>
          <li><a href="{{ route('site.repository') }}">Panduan Upload Repository</a></li>
        </ul>
      </li>

      <li class="dropdown"><a href="{{ route('site.research') }}"><span>Riset & Pengabdian</span></a></li>
      <li class="dropdown"><a href="{{ route('site.announcement') }}"><span>Pengumuman</span></a></li>

      <li class="dropdown"><a href="#"><span>Unit Pendukung</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="{{ route('site.gallery') }}">Galeri Laboratorium</a></li>
          <li><a href="{{ route('site.organization')}}">Organisasi Mahasiswa</a></li>
        </ul>
      </li>

      <li><a href="{{ route('site.blogs') }}">Artikel</a></li>
      <li><a href="{{ route('site.contact') }}">Contact</a></li>

    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->