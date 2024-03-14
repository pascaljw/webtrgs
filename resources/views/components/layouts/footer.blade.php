<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <footer id="footer">

        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-2 col-md-6 text-center py-3">
                <img src="{{ asset('frontend/assets/img/logotrpl.png')}}">
              </div>
              <div class="col-lg-3 col-md-6 footer-contact  py-3">
                <h3>TRPL</h3>
                    <p>
                    {!! $contact->address ?? null !!}<br>
                    <strong>Phone:</strong> {{ $contact->phone ?? null }}<br>
                    <strong>Email:</strong> {{ $contact->email ?? null}}<br>
                    </p>   
              </div>
      
              <div class="col-lg-2 col-md-6 footer-links py-3">
                <h4>Tautan Cepat</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('site.beranda') }}">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="http://pmb.politanisamarinda.ac.id/">Calon Mahasiswa</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('site.blogs') }}">Artikel</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('site.contact') }}">Kontak</a></li>
                  </ul>
              </div>
              <div class="social-links text-center col-lg-3 py-3">
                <h4>Follow Sosial Media Kami</h4>
                <a href="#" class="tiktok"><i class="bx bxl-tiktok"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                
              </div>
              <div class="col-lg-2 col-md-6 text-center footer-newsletter py-3">
                <h4>Akreditasi Prodi TRPL</h4>
                <img src="{{ asset('frontend/assets/img/akre.png') }}" height="200" alt="...">
              </div>
      
            </div>
          </div>
        </div>
      
        <div class="container d-md-flex py-4">
      
          <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
              &copy; Copyright <strong><span>TRPL Politani Samarinda</span></strong>. by Company
            </div>
            {{-- <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
            </div>
          </div>
          
        </div>
      </footer><!-- End Footer -->
</div>