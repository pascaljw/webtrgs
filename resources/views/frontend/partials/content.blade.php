<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.partials.head')
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header-content" class="header-content fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('frontend/trgs.png') }}" alt=""> 
        {{-- <h1>TRGS</h1> --}}
        {{-- <span>.</span> --}}
      </a>

      <!-- Nav Menu -->
      @include('frontend.partials.navbar-content')

      {{-- <a class="btn-getstarted" href="index.html#about">Get Started</a> --}}

    </div>
  </header><!-- End Header -->

  <main id="main">
    {{-- conntent start --}}
    @yield('content')
    {{-- content end --}}
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    @include('frontend.partials.footer')

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  {{-- <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div> --}}

 @include('frontend.partials.script')

</body>

</html>