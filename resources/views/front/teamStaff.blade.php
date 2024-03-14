@extends('front.partials.master')
@section('breadcrumb')
  @include('front.partials.breadcrumb')
@endsection

@section('content')

<section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Tenaga Kependidikan</h2>
        <p>Program Studi Teknologi Rekayasa Perangkat Lunak</p>
      </div>

      <div class="row">
        @foreach($teams as $team)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
              <img src="{{ asset('storage/'.$team->image )}}" class="img-fluid" alt="">
              <div class="social">
                <a href="{{ route('site.teamStaff.detail', $team->id) }}"><i class="bi bi-search"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4><a href="{{ route('site.teamStaff.detail', $team->id) }}">{{ $team->name }}</a></h4>
              <span>{{ $team->position }}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      
    </div>
  </section><!-- End Our Team Section -->

@endsection