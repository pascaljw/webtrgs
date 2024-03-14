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
            @foreach($blogs as $blog)
              <article class="entry">

                <div class="entry-img">
                  @if($blog->images != null)
                    @foreach (explode(' ', $blog->images) as $images) 
                      <div class="item">
                          <img src="{{ asset('storage/'.$images) }}" class="img-fluid">
                      </div>
                    @endforeach
                  @endif
                </div>

                <h2 class="entry-title">
                  <a href="#">{{ $blog->name }}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ $blog->created_at }}">{{ $blog->created_at->format('d M Y')}}</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-tags"></i> 
                      @foreach ($categories as $category)
                          @if ($blog->categories->contains($category)) 
                              {{ $category->name }}
                          @endif
                      @endforeach
                    </li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    {!! Str::limit($blog->content, 500) !!}
                  </p>
                  <div class="read-more">
                    <a href="{{ route('site.blogDetail', $blog->slug) }}">Read More</a>
                  </div>
                </div>

              </article><!-- End blog entry -->
            @endforeach
            <div>
              {{ $blogs->links('front.partials.links') }}
            </div>
            <br>

          </div><!-- End blog entries list -->


          <div class="col-lg-4">

            <x-layouts.blog-category></x-layouts.blog-category>

          </div><!-- End blog sidebar -->

        </div>

    </div>
  </section><!-- End Blog Section -->


@endsection