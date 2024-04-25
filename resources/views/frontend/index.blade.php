@extends('frontend.partials.content')

@section('content')
@include('frontend.partials.hero')
<!-- Clients Section - Home Page -->
{{-- <section id="clients" class="clients">

        <div class="container-fluid" data-aos="fade-up">

          <div class="row gy-4">

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="{{ asset('frontend/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
</div><!-- End Client Item -->

<div class="col-xl-2 col-md-3 col-6 client-logo">
    <img src="{{ asset('frontend/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
</div><!-- End Client Item -->

<div class="col-xl-2 col-md-3 col-6 client-logo">
    <img src="{{ asset('frontend/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
</div><!-- End Client Item -->

<div class="col-xl-2 col-md-3 col-6 client-logo">
    <img src="{{ asset('frontend/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
</div><!-- End Client Item -->

<div class="col-xl-2 col-md-3 col-6 client-logo">
    <img src="{{ asset('frontend/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
</div><!-- End Client Item -->

<div class="col-xl-2 col-md-3 col-6 client-logo">
    <img src="{{ asset('frontend/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
</div><!-- End Client Item -->

</div>

</div>

</section><!-- End Clients Section --> --}}

<!-- About Section - Home Page -->
<section id="about" class="about mt-5">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

            <div class="col-xl-12 content">
                <h3>Tentang Kami</h3>
                <h2 style="font-size: 1.5rem">Program Studi Teknologi Rekayasa Geomatika dan Survei (DIV – Sarjana
                    Terapan)</h2>
                <p>Program Studi Teknologi Rekayasa Geomatika dan Survei merupakan program studi Sarjana Terapan di
                    bidang Geospasial. Program Studi Teknologi Rekayasa Geomatika dan Survei berdiri berdasarkan
                    Keputusan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia Nomor
                    119/D/OT/2023 tanggal 31 Mei 2023.

                    Program Studi Teknologi Rekayasa Geomatika dan Survei memulai menerima mahasiswa baru dan
                    menyelenggarakan perkuliahan perdana pada semester ganjil 2023/2024. Program Studi Teknologi
                    Rekayasa Geomatika dan Survei terakreditasi Baik berdasarkan Keputusan Badan Akreditasi Nasional
                    Perguruan Tinggi No. 2743/SK/BAN-PT/Ak.P/STr/VII/2023 Tanggal 11 Juli 2023.</p>
                <a href="#" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
            </div>

            {{-- <div class="col-xl-7">
              <div class="row gy-4 icon-boxes">

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <i class="bi bi-buildings"></i>
                    <h3>Eius provident</h3>
                    <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem</p>
                  </div>
                </div> <!-- End Icon Box -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box">
                    <i class="bi bi-clipboard-pulse"></i>
                    <h3>Rerum aperiam</h3>
                    <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates quia</p>
                  </div>
                </div> <!-- End Icon Box -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box">
                    <i class="bi bi-command"></i>
                    <h3>Veniam omnis</h3>
                    <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur corrupti</p>
                  </div>
                </div> <!-- End Icon Box -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                  <div class="icon-box">
                    <i class="bi bi-graph-up-arrow"></i>
                    <h3>Delares sapiente</h3>
                    <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p>
                  </div>
                </div> <!-- End Icon Box -->

              </div>
            </div> --}}

        </div>
    </div>

</section><!-- End About Section -->

<!-- Stats Section - Home Page -->
{{-- <section id="stats" class="stats">

        <img src="{{ asset('frontend/assets/img/stats-bg.jpg') }}" alt="" data-aos="fade-in">

<div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Clients</p>
            </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Projects</p>
            </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Hours Of Support</p>
            </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Workers</p>
            </div>
        </div><!-- End Stats Item -->

    </div>

</div>

</section><!-- End Stats Section --> --}}

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
                        {{-- <h4 class="title"><a href="services-details.html" class="stretched-link">{{ $title }}</a></h4> --}}
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

<!-- Features Section - Home Page -->
{{-- <section id="features" class="features">

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4 align-items-center features-item">
            <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h3>Corporis temporibus maiores provident</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
              </p>
              <a href="#" class="btn btn-get-started">Get Started</a>
            </div>
            <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
              <div class="image-stack">
                <img src="{{ asset('frontend/assets/img/features-light-1.jpg') }}" alt="" class="stack-front">
<img src="{{ asset('frontend/assets/img/features-light-2.jpg') }}" alt="" class="stack-back">
</div>
</div>
</div><!-- Features Item -->

<div class="row gy-4 align-items-stretch justify-content-between features-item ">
    <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
        <img src="{{ asset('frontend/assets/img/features-light-3.jpg') }}" class="img-fluid" alt="">
    </div>
    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
        <h3>Sunt consequatur ad ut est nulla</h3>
        <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia
            voluptatem hic voluptas dolor doloremque.</p>
        <ul>
            <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
            <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
            <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat</span>.</li>
        </ul>
        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
    </div>
</div><!-- Features Item -->

</div>

</section><!-- End Features Section --> --}}

<!-- Portfolio Section - Home Page -->
<section id="berita" class="portfolio">

    <!--  Berita -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Berita</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4 posts-list">
            @foreach($blogs as $an)
            <div class="col-xl-4 col-lg-6">
                <article>
                    <div class="post-img">
                        @php
                        $coverArray = explode(' ', rtrim($an->images, ' '));
                        $firstCover = reset($coverArray);
                        @endphp
                            <img src="{{ asset('storage/'. $firstCover) }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">
                        <a href="{{ route('site.berita.show', $an->slug) }}">{{ $an->name }}</a>
                    </h2>

                    <div class="d-flex align-items-center">

                        <div class="post-meta">
                            <p class="post-date">
                                <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div>
            @endforeach
        </div><!-- End blog posts list -->

        <div class="pagination d-flex justify-content-center">
            <ul>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
        </div><!-- End pagination -->

    </div>

</section><!-- End Portfolio Section -->

<!-- Pricing Section - Home Page -->
{{-- <section id="pricing" class="pricing">

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="zoom-in" data-aos-delay="100">

          <div class="row g-4">

            <div class="col-lg-4">
              <div class="pricing-item">
                <h3>Free Plan</h3>
                <div class="icon">
                  <i class="bi bi-box"></i>
                </div>
                <h4><sup>$</sup>0<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                  <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                  <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
              </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4">
              <div class="pricing-item featured">
                <h3>Business Plan</h3>
                <div class="icon">
                  <i class="bi bi-rocket"></i>
                </div>

                <h4><sup>$</sup>29<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                  <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                  <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                  <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
              </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4">
              <div class="pricing-item">
                <h3>Developer Plan</h3>
                <div class="icon">
                  <i class="bi bi-send"></i>
                </div>
                <h4><sup>$</sup>49<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                  <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                  <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                  <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
              </div>
            </div><!-- End Pricing Item -->

          </div>

        </div>

      </section><!-- End Pricing Section --> --}}

<!-- Faq Section - Home Page -->
{{-- <section id="faq" class="faq">

        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="content px-xl-5">
                <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                </p>
              </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-container">
                <div class="faq-item faq-active">
                  <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span></h3>
                  <div class="faq-content">
                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->

                <div class="faq-item">
                  <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</span></h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->

                <div class="faq-item">
                  <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit pellentesque?</span></h3>
                  <div class="faq-content">
                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->

                <div class="faq-item">
                  <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</span></h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->

                <div class="faq-item">
                  <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span></h3>
                  <div class="faq-content">
                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->

              </div>

            </div>
          </div>

        </div>

      </section><!-- End Faq Section --> --}}

<!-- Team Section - Home Page -->
<section id="data_dosen" class="team">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Dosen, PLP, Admin</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-5">

            @foreach($dosens as $dosen )
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">

                <div class="member-img">
                    <img src="{{ $dosen->getImage() }}" class="img-fluid" alt="">
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>{{$dosen->name}}</h4>
                    <span>{{$dosen->position}}</span>
                    <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire
                        flow</p>
                </div>
            </div><!-- End Team Member -->
            @endforeach




        </div>

    </div>

</section><!-- End Team Section -->



<!-- Call-to-action Section - Home Page -->
{{-- <section id="call-to-action" class="call-to-action">

        <img src="{{ asset('frontend/assets/img/cta-bg.jpg') }}" alt="">

<div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
            <div class="text-center">
                <h3>Call To Action</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </div>
    </div>
</div>

</section><!-- End Call-to-action Section --> --}}

<!-- Testimonials Section - Home Page -->
{{-- <section id="testimonials" class="testimonials">

        <div class="container">

          <div class="row align-items-center">

            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
              <h3>Testimonials</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
              </p>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

              <div class="swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    }
                  }
                </script>
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img src="{{ asset('frontend/assets/img/testimonials/testimonials-1.jpg') }}"
class="testimonial-img flex-shrink-0" alt="">
<div>
    <h3>Saul Goodman</h3>
    <h4>Ceo & Founder</h4>
    <div class="stars">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
    </div>
</div>
</div>
<p>
    <i class="bi bi-quote quote-icon-left"></i>
    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
        ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
    <i class="bi bi-quote quote-icon-right"></i>
</p>
</div>
</div><!-- End testimonial item -->

<div class="swiper-slide">
    <div class="testimonial-item">
        <div class="d-flex">
            <img src="{{ asset('frontend/assets/img/testimonials/testimonials-2.jpg') }}"
                class="testimonial-img flex-shrink-0" alt="">
            <div>
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>
        <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
            <i class="bi bi-quote quote-icon-right"></i>
        </p>
    </div>
</div><!-- End testimonial item -->

<div class="swiper-slide">
    <div class="testimonial-item">
        <div class="d-flex">
            <img src="{{ asset('frontend/assets/img/testimonials/testimonials-3.jpg') }}"
                class="testimonial-img flex-shrink-0" alt="">
            <div>
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>
        <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
            <i class="bi bi-quote quote-icon-right"></i>
        </p>
    </div>
</div><!-- End testimonial item -->

<div class="swiper-slide">
    <div class="testimonial-item">
        <div class="d-flex">
            <img src="{{ asset('frontend/assets/img/testimonials/testimonials-4.jpg') }}"
                class="testimonial-img flex-shrink-0" alt="">
            <div>
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>
        <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
            <i class="bi bi-quote quote-icon-right"></i>
        </p>
    </div>
</div><!-- End testimonial item -->

<div class="swiper-slide">
    <div class="testimonial-item">
        <div class="d-flex">
            <img src="{{ asset('frontend/assets/img/testimonials/testimonials-5.jpg') }}"
                class="testimonial-img flex-shrink-0" alt="">
            <div>
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>
        <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
            <i class="bi bi-quote quote-icon-right"></i>
        </p>
    </div>
</div><!-- End testimonial item -->

</div>
<div class="swiper-pagination"></div>
</div>

</div>

</div>

</div>

</section><!-- End Testimonials Section --> --}}

<!-- Recent-posts Section - Home Page -->
<section id="akreditasi" class="recent-posts">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Akreditasi</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container justify-content-center align-items-center">
            <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="100">
                    {!! $akreditasi->acreditation !!}

            </div><!-- End post list item -->

        </div><!-- End recent posts list -->

    </div>

</section><!-- End Recent-posts Section -->

<!-- Contact Section - Home Page -->
<section id="contact" class="contact">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-12 text-center">

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>{!!$contact->address!!}</p>
                            {{-- <p>New York, NY 535022</p> --}}
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>{!!$contact->phone!!}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{!!$contact->email!!}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>Open Hours</h3>
                            <p>Monday - Friday</p>
                            <p>9:00AM - 05:00PM</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            {{-- <div class="col-lg-6">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Send Message</button>
                  </div>

                </div>
              </form>
            </div><!-- End Contact Form --> --}}

        </div>

    </div>

</section><!-- End Contact Section -->
@endsection
