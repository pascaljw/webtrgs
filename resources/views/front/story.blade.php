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
                    @if($story == null) 
                        <div class="entry-content">
                            <p>Belum ada data yang dapat ditampilkan</p>
                        </div>
                    @else
                    <div class="entry-content">
                        <p>{!! $story->story !!}</p>
                    </div>
                    @endif
                </article>
            </div>
        </div>
    </div>
  </section><!-- End Our Team Section -->

@endsection