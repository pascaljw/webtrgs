@extends('front.partials.master')
@section('breadcrumb')
  @include('front.partials.breadcrumb')
@endsection

@section('content')
<!-- ======= Curriculum ======= -->

<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Frequently Asked Questions</h2>
    </div>

    <div class="faq-list">
      <ul>
        @foreach($faqs as $faq)
          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i><a data-bs-toggle="collapse" data-bs-target="#faq-list-{{$loop->iteration}}" class="collapsed">{{ $faq->question }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-{{$loop->iteration}}" class="collapse" data-bs-parent=".faq-list">
                <p>{!! $faq->answer !!}
            </div>
          </li>
        @endforeach
      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->
<!-- End Our Clients Section -->    

@endsection
