@extends('front.partials.master')
@section('breadcrumb')
  @include('front.partials.breadcrumb')
@endsection

@section('content')

<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row g-4">
            @include('front.partials.quickmenu')
            <div class="col-lg-9 col-md-6">
                <article class="entry">
                    @if($service == null) 
                        <div class="entry-content">
                            <p>Belum ada layanan politani samarinda</p>
                        </div>
                    @else
                    <div class="entry-content">
                        <p>{!! $service->service !!}</p>
                    </div>
                    @endif
                </article>
            </div>
        </div>
    </div>
  </section><!-- End Our Team Section -->

@endsection