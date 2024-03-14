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
              {{-- <article class="entry"> --}}
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>File</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documents as $document)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $document->name }}</td>
                            <td>{!! $document->description !!}</td>
                            <td><a href="{{ $document->getFile() }}" class="btn btn-sm btn-primary">Download</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              {{-- </article> --}}
              <div>
                {{ $documents->links('front.partials.links') }}
              </div>
            </div>
        </div>
    </div>
</section>

@endsection
