@extends('front.partials.master')
@section('breadcrumb')
  @include('front.partials.breadcrumb')
@endsection

@section('content')

<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            @foreach($filters as $filter)
                <li data-filter=".filter-{{ $filter->slug }}">{{ $filter->name }}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
        @foreach($galleries as $gallery)
            {{-- @foreach($filters as $f) --}}
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $gallery->filter->slug }}">
                <img src="{{ $gallery->getImage() }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{ $gallery->name }}</h4>
                    <p>{!! $gallery->description !!}</p>
                    <a href="{{ $gallery->getImage() }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $gallery->name }}"><i class="bx bx-zoom-in"></i></a>
                    <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>
            {{-- @endforeach --}}
        @endforeach

      </div>

    </div>
  </section><!-- End Portfolio Section -->

@endsection