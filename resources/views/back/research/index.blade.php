@extends('back.partials.master')
@section('content')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Riset</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">& Pengabdian</a></li>
    </ol>
</div>

<!-- row -->
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Riset & Pengabdian (editable)</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('research.update', $research->id) }}">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">Riset & Pengabdian</label>
                                <textarea name="research" class="form-control summernote" rows="10">
                                    {{ $research->research }}
                                </textarea>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
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

    