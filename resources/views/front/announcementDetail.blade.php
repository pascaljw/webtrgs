@extends('front.partials.master')
@section('breadcrumb')
  @include('front.partials.breadcrumb')
@endsection

@section('content')

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">

          <div class="col-lg-8 entries">
              <article class="entry">
                <div class="entry-img">
                  <div class="owl-carousel owl-theme">
                      @if($announcement->images != null)
                          @foreach (explode(' ', $announcement->images) as $images) 
                          <div class="item">
                              <img src="{{ asset('storage/'.$images) }}" class="img-fluid">
                          </div>
                          @endforeach
                      @endif
                 </div>
                </div>

                <h2 class="entry-title">
                  <a href="#">{{ $announcement->name }}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ $announcement->created_at }}">{{ $announcement->created_at->format('d M Y')}}</time></a></li>
                    
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    {!! $announcement->content !!}
                  </p>            
                </div>
              </article><!-- End blog entry -->
              
          </div><!-- End blog entries list -->

          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Pengumuman Lainnya</h3>
              <div class="sidebar-item recent-posts">
                @foreach($anothers as $a) 
                  <div class="post-item clearfix">
                    @if($a->images != null)
                        @foreach (explode(' ', $a->images,2) as $images) 
                          @if($loop->first)
                          <div class="item">
                              <img src="{{ asset('storage/'.$images) }}" class="img-fluid">
                          </div>
                          @endif
                        @endforeach
                    {{-- {{ dd(array_shift(explode(' ', $blog->images)) ) }}  --}}
                    
                    @endif
                    <h4><a href="{{ route('site.announcementDetail', $a->slug) }}">{{ $a->name }}</a></h4>
                    <time datetime="{{ $a->created_at }}">{{ $a->created_at->format('d M Y')}}</time>
                  </div> 
                @endforeach
              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->
      </div>

    </div>
  </section><!-- End Blog Section -->


@endsection
@push('style')
<link href="{{ asset('frontend/assets/vendor/OwlCarousel2/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/vendor/OwlCarousel2/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">

@endpush

@push('script')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<script src="{{ asset('frontend/assets/vendor/OwlCarousel2/dist/owl.carousel.js') }}"></script>
  <script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[3000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
  </script>
@endpush