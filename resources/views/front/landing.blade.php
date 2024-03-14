@extends('front.partials.master')
@section('breadcrumb')
  <x-layouts.slider-front-end></x-layouts.slider-front-end>
@endsection

@section('content')
<!-- ======= Program Studi ======= -->
<section id="program" class="program text-center text-uppercase">
  <div class="container">
      <h3>Program Studi Teknologi Rekayasa Perangkat Lunak</h3>
  </div>
</section><!-- End Our Clients Section -->

<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us bg-warning">
  <div class="container" data-aos="fade-up">
    <div class="row content text-primary">
      <div class="col-lg-4" data-aos="fade-right">
        <h2>Kurikulum 2020</h2>
        <a href="{{ route('site.curriculum') }}" class="btn btn-primary text-warning">Lihat Kurikulum Selengkapnya</a>
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0" data-aos="fade-left">
        <p>
          Kurikulum rekayasa perangkat lunak yang komprehensif dan terkini ini memberikan kesempatan bagi para mahasiswa untuk mengembangkan keahlian mereka di berbagai bidang dalam pengembangan perangkat lunak, membuka peluang karier yang luas dalam industri teknologi informasi yang terus berkembang.
        </p>
        <p class="fst-italic">
          Untuk menyelesaikan seluruh pengetahuan dan keterampilan yang telah mereka pelajari selama kuliah, mahasiswa banyak menyelesaikan proyek perangkat lunak pada beberapa tingkatan semester. Proyek ini juga berfungsi untuk meunjukkan kemampuan mereka kepada calon pemberi kerja atau industri.
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <div class="row text-uppercase">
      <h2>Tautan Cepat</h2>
      <hr />
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box iconbox-blue">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
            </svg>
            <a href="http://pmb.politanisamarinda.ac.id/"><i class="bx bx-user-pin"></i></a>
          </div>
          <h4><a href="http://pmb.politanisamarinda.ac.id/">Calon Mahasiswa</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box iconbox-orange ">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
            </svg>
            <a href="{{ route('site.scholarship') }}"><i class="bx bx-rocket"></i></a>
          </div>
          <h4><a href="{{ route('site.scholarship') }}">Beasiswa</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box iconbox-pink">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
            </svg>
            <a href="{{ route('site.performance') }}"><i class="bx bx-trophy"></i></a>
          </div>
          <h4><a href="{{ route('site.performance') }}">Prestasi</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box iconbox-red">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
            </svg>
            <a href="{{ route('site.job') }}"><i class="bx bx-file"></i></a>
          </div>
          <h4><a href="{{ route('site.job') }}">Profil Lulusan</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="500">
        <div class="icon-box iconbox-yellow ">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
            </svg>
            <a href="http://tracer.politanisamarinda.ac.id/login"><i class="bx bxs-graduation"></i></a>
          </div>
          <h4><a href="http://tracer.politanisamarinda.ac.id/login">Tracer Study</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="600">
        <div class="icon-box iconbox-teal">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
            </svg>
            <a href="{{ route('site.faq') }}"><i class="bx bxs-help-circle"></i></a>
          </div>
          <h4><a href="{{ route('site.faq') }}">F.A.Q</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Artikel</h2>
    </div>
    <div class="row">
      @foreach($blogs as $blog) 
      {{-- @if (!$cat_id->blogs->contains($blog))   --}}
        <div class="col-lg-4 col-sm-12">
          <div class="card" data-aos="zoom-in" data-aos-delay="100">
            @if($blog->images != null)
                @foreach (explode(' ', $blog->images,2) as $images) 
                  @if($loop->first)
                  <div class="item">
                      <img src="{{ asset('storage/'.$images) }}" class="img-fluid">
                  </div>
                  @endif
                @endforeach
             {{-- {{ dd(array_shift(explode(' ', $blog->images)) ) }}  --}}
            
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $blog->name }}</h5>
              {{-- <p class="card-text">{!! $blog->content !!}</p> --}}
              <p class="card-text">{!! Str::limit($blog->content, 500) !!}</p>
              <a href="{{ route('site.blogDetail', $blog->slug) }}" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        {{-- @endif --}}
      @endforeach
      
    </div>

  </div>
</section><!-- End Portfolio Section -->

@endsection
