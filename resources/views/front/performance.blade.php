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
            @foreach($performances as $p)
              @if ($cat_id->blogs->contains($p))   
                <article class="entry">
                  <div class="entry-img">
                    {{-- {{ dd($p )}} --}}
                    <div class="owl-carousel owl-theme">
                      @if($p->images != null)
                          @foreach (explode(' ', $p->images) as $images) 
                          <div class="item">
                              <img src="{{ asset('storage/'.$images) }}" class="img-fluid">
                          </div>
                          @endforeach
                      @endif
                    </div>
                  </div>

                  <h2 class="entry-title">
                    <a href="#">{{ $p->name }}</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ $p->created_at }}">{{ $p->created_at->format('d M Y')}}</time></a></li>
                      
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      {!! Str::limit($p->content, 500) !!}
                    </p>
                    <div class="read-more">
                      <a href="{{ route('site.blogDetail', $p->slug) }}">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              @endif
            @endforeach
            <div>
              {{ $performances->links('front.partials.links') }}
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