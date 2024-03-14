<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-046-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-016-double-chevron"></i>
                <span class="nav-text">Gambar Depan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('hero') }}">Image Frontend</a></li>
                </ul>
            </li>
            
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-021-command"></i>
                <span class="nav-text">Profil</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('story') }}">Selayang Pandang</a></li>
                    <li><a href="{{ route('vision') }}">Visi Misi</a></li>
                    <li><a href="{{ route('structure') }}">Struktur Organisasi</a></li>
                    <li><a href="{{ route('team') }}">Tim Dosen dan Tendik</a></li>
                    <li><a href="{{ route('partner') }}">Kerjasama</a></li>
                    <li><a href="{{ route('acreditation') }}">Akreditasi</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-043-menu"></i>
                <span class="nav-text">Akademik</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('document') }}">Direktori Akademik</a></li>
                    <li><a href="{{ route('job') }}">Profil Lulusan</a></li>
                    <li><a href="{{ route('tuition') }}">Biaya Kuliah</a></li>
                    <li><a href="{{ route('service') }}">Layanan</a></li>
                    <li><a href="{{ route('curriculum') }}">Kurikulum</a></li>
                    <li><a href="{{ route('graduation') }}">Syarat Kelulusan</a></li>
                    <li><a href="{{ route('leave') }}">Cuti Akademik</a></li>
                    <li><a href="{{ route('repository') }}">Panduan Upload Repository</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-036-floppy-disk"></i>
                <span class="nav-text">Repository Skripsi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('theses') }}">Lihat Repository</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-064-pin"></i>
                <span class="nav-text">Riset & Pengabdian</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('research') }}">Lihat Riset dan Pengabdian</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-040-graph"></i>
                <span class="nav-text">Unit Pendukung</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('filter') }}">Filter Galeri</a></li>
                    <li><a href="{{ route('gallery') }}">Galeri Laboratorium</a></li>
                    <li><a href="{{ route('organization') }}">Organisasi Mahasiswa</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-063-pencil"></i>
                <span class="nav-text">Artikel & Berita</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('category') }}">Kategori (Tag)</a></li>
                    <li><a href="{{ route('blog') }}">Lihat Artikel & Berita</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-065-pin"></i>
                <span class="nav-text">Pengumuman</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('announcement') }}">Lihat Pengumuman</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-084-share"></i>
                <span class="nav-text">Kontak</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('contact') }}">Kontak Prodi</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-073-question"></i>
                <span class="nav-text">Tautan Cepat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('faq') }}">F.A.Q</a></li>
                    <li><a href="{{ route('scholarship')}}">Beasiswa</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-066-plus"></i>
                <span class="nav-text">User</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('user') }}">Lihat Semua User</a></li>
                </ul>
            </li>
        </li>
        
        </ul>
        <div class="plus-box">
            <p class="fs-14 font-w600 mb-2">Let Jobick Managed<br>Your Resume Easily<br></p>
        </div>
        {{-- <div class="copyright">
            <p><strong>Jobick Job Admin</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
        </div> --}}
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->