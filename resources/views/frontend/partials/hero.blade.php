@push('css_user')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush
<section id="hero" class="hero mt-5">
    <div class="col-md-12">
        <div class="swiper sliderFeaturedPosts" style="border-radius: 15px;">
            <div class="swiper-wrapper">
                @foreach ($heros as $berita)
                <div class="swiper-slide">
                        <a  class="img-bg d-flex align-items-end"
                            style="background-image: url({{ url("storage/".$berita->image)  }}); border-radius: 10px;">
                        <div class="img-bg-inner">
                            <h2>{{ $berita->judul }}</h2>
                            <p>{{ Str::substr($berita->desc, 0, 40) }}</p>
                        </div>
                    </a>
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
    </div>
</section><!-- End Hero Section -->
@push('js_user')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>

</script>
@endpush
