@extends('frontend.partials.content')

@section('content')
<!-- Portfolio Section - Home Page -->
<section id="portfolio" class="portfolio mt-5">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Laboratorium</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                @foreach ($filters as $filter)
                <li data-filter=".filter-{{ $filter->name }}">{{ $filter->name }}</li>
                @endforeach

            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($gallerys as $gallery)
                @for($i = 0; $i < 10; $i++)
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $gallery->filter->name }}">

                    <img src="{{ asset('storage/'.$gallery->image) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $gallery->name }}</h4>
                        <p>{!! $gallery->description !!} </p>
                        <a href="{{ asset('storage/'.$gallery->image) }}" title="{{ $gallery->name }}"
                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->
                @endfor

                @endforeach

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- End Portfolio Section -->

@endsection
