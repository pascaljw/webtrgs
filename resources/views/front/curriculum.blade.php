@extends('front.partials.master')
@section('breadcrumb')
  @include('front.partials.breadcrumb')
@endsection

@section('content')
<!-- ======= Curriculum ======= -->

<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Kurikulum</h2>
    </div>

    <div class="faq-list">
      <ul>
        {{-- <li data-aos="fade-up">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li> --}}
        @foreach($curriculums as $currs)
          <li data-aos="fade-up">
            <a data-bs-toggle="collapse" data-bs-target="#faq-list-{{ $loop->iteration }}" class="collapsed">Semester {{ $loop->iteration }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-{{ $loop->iteration }}" class="collapse" data-bs-parent=".faq-list">
              <table class="table table-striped table-responsive-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Praktik</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($currs as $cur )
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $cur->code }}</td>
                        <td>{{ $cur->name }}</td>
                        <td>{{ $cur->credit }}</td>
                        <td>{{ $cur->practice }}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            </div>
          </li>
        @endforeach
      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->
<!-- End Our Clients Section -->    

@endsection
