@extends('front.partials.master')
@section('breadcrumb')
  @include('front.partials.breadcrumb')
@endsection

@section('content')

<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="row content">
        <div class="col-lg-4 col-md-6" data-aos="fade-right">
          <img src="{{ asset($team->getImage()) }}" class="img-fluid">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0" data-aos="fade-left">
            <div class="row">
                <h3>{{ $team->name }}</h3>
            </div>
            <div class="row">
              <p>
                <button type="button" class="btn btn-sm btn-primary" disabled data-bs-toggle="button" autocomplete="off">NIP. {{ $team->nip}}</button>
              </p>
            </div>
            <div class="row py-2">
                <h5>{{ $team->position }}</h5>
                <p class="fst-italic">{{ $team->email }}</p>
            </div>
            
            <div class="row py-3">
                <p class="d-inline-flex gap-1">
                    <a class="btn btn-sm btn-secondary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Minat Penelitian
                    <i class="fa fa-bars" aria-hidden="true">>></i></a>
                </p>
                <div class="collapse" id="collapseExample1">
                    <div class="card card-body">
                      <p>{!! $team->interest !!}</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <p class="d-inline-flex gap-1">
                    <a class="btn btn-sm btn-secondary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Riwayat Pendidikan
                    <i class="fa fa-bars" aria-hidden="true">>></i></a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                      <p>{!! $team->education !!}</p>
                    </div>
                </div>
            </div>
            
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div data-aos="fade-up">
        <span><b>Deskripsi</b></span>
      </div>

      <div class="row" data-aos="fade-up">
        <p>{!! $team->description !!}</p>
      </div>

      <hr>

      <div data-aos="fade-up">
        <span><b>More</b></span>
      </div>

      <div class="row" data-aos="fade-up">
        <p>{!! $team->more !!}</p>
      </div>

    </div>
  </section><!-- End Our Team Section -->

@endsection