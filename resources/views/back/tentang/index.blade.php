@extends('back.partials.master')
@section('content')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tentang</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">New Tentang</a></li>
    </ol>
</div>

<!-- row -->
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tentang Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('admin.tentang.update', $tentang->slug) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $tentang->title) }}" placeholder="Title Of Content">
                                @error('title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Content</label>
                                <textarea name="body" class="form-control summernote @error('body') is-invalid @enderror" rows="4">{{ old('content', $tentang->body) }}</textarea>
                                @error('body')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('contact') }}" class="btn btn-info">Close</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@push('style')
<link href="{{ asset('backend/vendor/summernote/lite/summernote-lite.min.css') }}" rel="stylesheet">
@endpush

@push('script')
<!----summernote lite------>
<script src="{{ asset('backend/vendor/summernote/lite/summernote-lite.js') }}"></script>
<script>
    $('.summernote').summernote({
      tabsize: 2,
      height: 150,
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

