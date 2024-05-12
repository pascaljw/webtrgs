@extends('frontend.partials.content')

@push('css_user')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .swiper {
        width: 100%;
        height: 100vh;
    }
</style>
@endpush

@section('content')

<section id="hero" class="hero mt-5">
    <div class="container-md">
        <div class="swiper slider-post" style="border-radius: 15px;">
            <div class="swiper-wrapper">
                @foreach ($heros as $hero)
                <div class="swiper-slide">
                    <img src="{{ url('storage/'.$hero->image)  }}" alt="" class="hero-img ">
                    <div class="img-bg-inner">
                        <h2>{{ $hero->judul }}</h2>
                        <p>{{ Str::substr($hero->desc, 0, 40) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
            </div>
            <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    {{-- </div> --}}
</section><!-- End Hero Section -->



<!-- About Section - Home Page -->
<section id="about" class="about mt-5">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

            <div class="col-xl-12 content">
                <h3>Tentang Kami</h3>
                @forelse ($tentang as $content)
                <h2 style="font-size: 1.5rem">{{ $content->title }}</h2>
                <p>{!! $content->body !!}</p>
                @empty
                <p>Tidak ada data</p>
                @endforelse

            </div>
        </div>
    </div>

</section><!-- End About Section -->

<!-- Services Section - Home Page -->
<section id="visi_misi" class="services">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Visi & Misi</h2>

    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            @foreach ($story as $visi)
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"></div>
                    <div>
                        {{-- <h4 class="title"><a href="services-details.html" class="stretched-link">{{ $title }}</a>
                        </h4> --}}
                        <p class="description">{!! $visi->vision !!}</p>
                    </div>
                    <!-- Handle empty state -->
                </div>
            </div>
            @endforeach

        </div><!-- End Service Item -->
    </div>

    </div>

</section><!-- End Services Section -->

<!-- Portfolio Section - Home Page -->
<section id="portfolio" class="portfolio">

    <!--  Berita -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Berita</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4 posts-list">
            @foreach ($blogs as $an)
            <div class="col-xl-4 col-lg-6">
                <article>
                    <div class="post-img">
                        @php
                        $coverArray = explode(' ', rtrim($an->images, ' '));
                        $firstCover = reset($coverArray);
                        @endphp
                        <img src="{{ asset('storage/' . $firstCover) }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">
                        <a href="{{ route('site.berita.show', $an->slug) }}">{{ $an->name }}</a>
                    </h2>

                    <div class="d-flex align-items-center">

                        <div class="post-meta">
                            <p class="post-date">
                                <p>{{ $an->created_at->diffForHumans() }}</p>
                            </p>
                        </div>
                    </div>

                </article>
            </div>
            @endforeach
        </div><!-- End blog posts list -->

        <div class="pagination d-flex justify-content-center">
            <ul>
                {{ $blogs->links() }}
            </ul>
        </div><!-- End pagination -->

    </div>

</section><!-- End Portfolio Section -->

<!-- Team Section - Home Page -->
<section id="data_dosen" class="team">
    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Dosen, PLP, Admin</h2>
    </div><!-- End Section Title -->
    <div class="container">
        <div class="row gy-5">
            @foreach ($dosens as $dosen)
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">

                <div class="member-img">
                    @if($dosen->image == 'default.jpg')
                    <img src="{{ asset('backend/img/default.jpg') }}" class="img-fluid" alt="">
                    @else
                    <img src="{{ asset('storage/' . $dosen->image) }}" class="img-fluid" alt="">
                    @endif
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>{{ $dosen->name }}</h4>
                    <span>{{ $dosen->position }}</span>
                    {{-- <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio
                            dire
                            flow</p> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="akreditasi" class="recent-posts">
    <div class="container section-title" data-aos="fade-up">
        <h2>Akreditasi</h2>
    </div>

    <div class="container justify-content-center align-items-center">
        <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="100">
            {!! $akreditasi->acreditation !!}
        </div>
    </div>
</section><!-- End Recent-posts Section -->

<!-- Contact Section - Home Page -->
<section id="contact" class="contact">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-12 text-center">

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>{!! $contact->address !!}</p>
                            {{-- <p>New York, NY 535022</p> --}}
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>{!! $contact->phone !!}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{!! $contact->email !!}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>Buka Jam</h3>
                            <p>Senin - Jumat</p>
                            <p>9:00AM - 03:00PM</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->
@push('js_user')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  "use strict";
    let swiper = new Swiper(".slider-post", {
        spaceBetween: 0,
        speed: 500,
        centeredSlides: true,
        loop: true,
        slideToClickedSlide: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".custom-swiper-button-next",
            prevEl: ".custom-swiper-button-prev",
    },
    });
})
</script>
@endpush
@endsection
