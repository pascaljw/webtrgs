

<section id="hero" class="hero mt-5" >
    <div class="col-md-12">
        <div class="swiper sliderFeaturedPosts" style="border-radius: 15px;">
            <div class="swiper-wrapper">
                @foreach ($hero as $h)
                <div class="swiper-slide">
                        <a href="" class="img-bg d-flex align-items-end"
                            style="background-image: url({{ asset('storage/'.$h->image)}} }); border-radius: 10px;">
                        <div class="img-bg-inner">
                            <h2>{{ $h->judul }}</h2>
                            <p>{{ Str::substr($h->desc, 0, 40) }}</p>
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

  {{-- <img src="{{ asset('storage/'.$h->image)}}" alt="" data-aos="fade-in"> --}}

    {{-- <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <h2 data-aos="fade-up" data-aos-delay="100">Teknologi Rekayasa Geomatika dan Survei</h2>
          <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
        </div>
        <div class="col-lg-5">
          <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
            <input type="text" class="form-control" placeholder="Enter email address">
            <input type="submit" class="btn btn-primary" value="Sign up">
          </form>
        </div>
      </div>
    </div> --}}

  </section><!-- End Hero Section -->

<script>
    var swiper = new Swiper(".swiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>
