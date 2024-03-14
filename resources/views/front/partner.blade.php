@extends('front.partials.master')
@section('breadcrumb')
  @include('front.partials.breadcrumb')
@endsection

@section('content')
<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
          <h2>Link and Match</h2>
          <h3>Mengikuti program DitJen DIKSI, prodi TRPL menjalin kerjasama dengan berbagai Mitra yang relevan.</h3>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
          <p>
            Konsep "link and match" antara dunia pendidikan dan dunia industri merupakan fondasi penting dalam mempersiapkan generasi muda untuk menghadapi kebutuhan dan tantangan pasar kerja yang terus berkembang. 
            Dengan menghubungkan kurikulum yang relevan dari perguruan tinggi dengan kebutuhan industri yang aktual, lulusan akan memiliki pengetahuan dan keterampilan yang sesuai dengan permintaan pasar kerja.
          </p>
          
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Our Edu Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Mitra Institusi Pendidikan</h2>
      </div>

      <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

        @foreach($edupartners as $edupartner)
            {{-- @if($partner->edu == 'yes') --}}
                <div class="col-lg-3 col-md-4 col-6">
                <div class="client-logo">
                    <img src="{{ $edupartner->getImage() }}" class="img-fluid" alt="">
                </div>
                <div class="aligment-center">
                    <span>{{ $edupartner->name }}</span>
                </div>
                </div>
            {{-- @endif --}}
        @endforeach
      </div>
    </div>
  </section><!-- End Our Edu Section -->

  <!-- ======= Dudi Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Mitra <strong>Industri dan Dunia Kerja</strong></h2>
      </div>
      <div class="row">

        <div class="col-lg-12 col-md-12 align-items-stretch">
          <div data-aos="fade-up">
            <!-- table -->
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Mitra</th>
                  <th scope="col">No SK Kerjasama</th>
                  <th scope="col">Mulai</th>
                  <th scope="col">Berakhir</th>
                  <th scope="col">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($partners as $partner) 
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $partner->name }}</td>
                  <td>{{ $partner->letter }}</td>
                  <td>{{ date('d M Y', strtotime($partner->start)) }}</td>
                  <td>{{ date('d M Y', strtotime($partner->end)) }}</td>
                  <td>{!! $partner->description !!}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- end table -->
          </div>
          <div>
            {{ $partners->links('front.partials.links') }}
          </div>
        </div>  

      </div>
    </div>
  </section><!-- End Our Team Section -->
@endsection