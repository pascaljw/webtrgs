@extends('frontend.partials.content')

@section('content')
<!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 50px;">
                <div class="form-group">
                    <h1 class="text-center">Kontak</h1>
                    <hr>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-item d-flex info" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt small-icon "></i>
                    <div class="ml-2">
                        <h3> Alamat</h3>
                        <p>{!! $contact->address ?? null !!}</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex info" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone small-icon "></i>
                    <div class="ml-2 ">
                        <h3> Telp</h3>
                        <p>{{ $contact->phone ?? null }}</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex info" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-envelope small-icon "></i>
                    <div>
                        <h3> Email Us</h3>
                        <p> {{ $contact->email ?? null }}</p>
                    </div>
                </div><!-- End Info Item -->

            </div>
            <div class="col-md-6">
                <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-center">Maps</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4106284968115!2d117.12298702758264!3d-0.5378732559418217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df6808105733f19%3A0x4ee2ad38fe9bfd41!2sTeknologi%20Geomatika%20POLITANI%20SAMARINDA!5e0!3m2!1sid!2sid!4v1714937267271!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div><!-- End Google Maps -->
            </div>
        </div>

    </div>
</section><!-- /Contact Section -->

@endsection
