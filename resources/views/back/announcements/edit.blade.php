@extends('back.partials.master')
@section('content')
{{-- {{ dd($categories) }} --}}
<div class="card">
    <div class="col-12">
        <div class="card-header">
            <h4 class="card-title">Edit</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="post" action="{{ route('announcement.update', $announcement->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Judul</label>
                            <input type="text" name="name" class="form-control" value="{{ $announcement->name }}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Gambar (Choose to change current image) <i>Ukuran 1000x600 px</i></label>
                            <input type="file" name="images[]" accept="image/*" id="image" class="form-control" multiple>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="content" class="form-label">Isi Pengumuman</label>
                            <textarea name="content" id="summernote" cols="30" rows="10">
                                {{ $announcement->content }}
                            </textarea>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('announcement') }}" class="btn btn-info">Close</a>
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
                @if($announcement->images != null)
                    @foreach (explode(' ', $announcement->images) as $images) 
                    <div class="item">
                        <img src="{{ asset('storage/'.$images) }}" class="img-fluid">
                    </div>
                    @endforeach
                @endif
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
