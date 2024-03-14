@extends('back.partials.master')
@section('content')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Contact</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Contact Detail</a></li>
    </ol>
</div>

<!-- row -->
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Contact Editable</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('contact.update', $contact->id) }}">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">Alamat</label>
                                <textarea name="address" class="form-control summernote" rows="4">
                                    {{ $contact->address }}
                                </textarea>
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Telp</label>
                                <input name ="phone" type="text" class="form-control" value="{{ $contact->phone }}">
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Email</label>
                                <input name ="email" type="email" class="form-control" value="{{$contact->email }}">
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Facebook</label>
                                <input name ="facebook" type="text" class="form-control" value="{{ $contact->facebook }}">
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Instagram</label>
                                <input name ="instagram" type="text" class="form-control" value="{{ $contact->instagram }}">
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">LinkedIn</label>
                                <input name ="linkedin" type="text" class="form-control" value="{{ $contact->linkedin }}">
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Youtube</label>
                                <input name ="youtube" type="text" class="form-control" value="{{ $contact->youtube }}">
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Tiktok</label>
                                <input name ="tiktok" type="text" class="form-control" value="{{ $contact->tiktok }}">
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Koordinate</label>
                                <input name ="coordinate" type="text" class="form-control" value="{{ $contact->coordinate }}">
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

    