@extends('back.partials.master')
@section('content')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Buat</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Pengumuman</a></li>
    </ol>
</div>

<!-- row -->
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">Create a Blog</h4>
            </div> --}}
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('announcement.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Judul</label>
                            <input type="text" name="name" class="form-control form-control-lg 
                            @error('name') is-invalid @enderror" value="{{ old('name') }}">

                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 form-file">
                            <label for="">Gambar (<i>ukuran 1000x600 px</i>)</label>
                            {{-- <span class="input-group-text">Image <i>ukuran 1000x600 px</i></span> --}}
                            <input type="file" name="images[]" accept="image/*" class="form-file-input form-control
                            @error('images') is-invalid @enderror" value="{{ old('images') }}" multiple>

                            @error('images')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Isi Pengumuman</label>
                            <textarea name="content" class="form-control" rows="4" id="summernote">{{ old('content') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('announcement') }}" class="btn btn-info">Close</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection
@push('style')
<!----summernote lite------>
<link href="{{ asset('backend/vendor/summernote/lite/summernote-lite.min.css') }}" rel="stylesheet">
<!----end summernote lite------>

<link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css') }}">
<link href="{{ asset('backend/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
@endpush

@push('script')
<script src="{{ asset('backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('backend/vendor/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins-init/select2-init.js') }}"></script>
{{-- summernote-lite --}}
<script src="{{ asset('backend/vendor/summernote/lite/summernote-lite.js') }}"></script>
<script>
    $('#summernote').summernote({
      tabsize: 2,
      height: 300,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript' ]],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>

@endpush
