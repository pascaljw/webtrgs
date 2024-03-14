@extends('back.partials.master')
@section('content')
{{-- {{ dd($categories) }} --}}
<div class="card">
    <div class="col-12">
        <div class="card-header">
            <h4 class="card-title">Edit Galeri Foto</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="post" action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nama Galeri</label>
                            <input type="text" name="name" class="form-control" value="{{ $gallery->name }}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Image (Choose to change current image)</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Tag</label>
                            <select name="filter_id" class="form-control">
                                @foreach ($filters as $filter)
                                    <option value="{{ $filter->id }}" @if ($gallery->filter_id == $filter->id) selected="selected" @endif>
                                      {{ $filter->name }} 
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="content" class="form-label">Deskripsi</label>
                            <textarea name="description" id="summernote" cols="30" rows="10">
                                {{ $gallery->description }}
                            </textarea>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('gallery') }}" class="btn btn-info">Close</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Current Image</h4>
            </div>
            <div class="card-body">
                <img src="{{ $gallery->getImage() }}" alt="No Image">
            </div>
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
{{-- <script src="{{ asset('backend/vendor/ckeditor/ckeditor.js') }}"></script> --}}
<script src="{{ asset('backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('backend/vendor/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins-init/select2-init.js') }}"></script>
<!----summernote lite------>
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
