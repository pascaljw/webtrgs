@extends('front.partials.master')
@section('breadcrumb')
  @include('front.partials.breadcrumb')
@endsection

@section('content')

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">
          @include('front.partials.quickmenu')

          <div class="col-lg-9 col-md-6 entries">
            {{-- {{ dd($performances )}} --}}
            @foreach($announcements as $an)
                <article class="entry">
                  <div class="entry-img">
                    {{-- {{ dd($p )}} --}}
                    <div class="owl-carousel owl-theme">
                      @if($an->images != null)
                          @foreach (explode(' ', $an->images) as $images) 
                          <div class="item">
                              <img src="{{ asset('storage/'.$images) }}" class="img-fluid">
                          </div>
                          @endforeach
                      @endif
                    </div>
                  </div>

                  <h2 class="entry-title">
                    <a href="#">{{ $an->name }}</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ $an->created_at }}">{{ $an->created_at->format('d M Y')}}</time></a></li>
                      
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      {!! Str::limit($an->content, 500) !!}
                    </p>
                    <div class="read-more">
                      <a href="{{ route('site.announcementDetail', $an->slug) }}">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
            @endforeach
            <div>
              {{ $announcements->links('front.partials.links') }}
            </div>
            <br>

          </div><!-- End blog entries list -->


          {{-- <div class="col-lg-4">

            <x-layouts.blog-category></x-layouts.blog-category> 

          </div><!-- End blog sidebar --> --}}

        </div>

    </div>
  </section><!-- End Blog Section -->


@endsection