@extends('frontend.partials.app')

@section('content')

<!-- Blog Section - Blog Page -->
<section id="blog" class="blog">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">
            @foreach($announcements as $an)
            <div class="col-xl-4 col-lg-6">
                <article>
                    <div class="post-img">
                        @if($an->images != null)
                        @foreach (explode(' ', $an->images) as $images)
                            <img src="{{ asset('storage/'. $images) }}" alt="" class="img-fluid">
                            @endforeach
                        @endif
                    </div>

                    <h2 class="title">
                        <a href="blog-details.html">{{ $an->name }}</a>
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

</section><!-- End Blog Section -->
@endsection
