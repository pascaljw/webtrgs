@extends('back.partials.master')
@section('content')
{{-- {{ dd($categories) }} --}}
<div class="card">
    <div class="col-12">
        <div class="card-header">
            <h4 class="card-title">Edit Partner</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="post" action="{{ route('partner.update', $partner->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nama Mitra</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') ?? $partner->name }}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Image (Choose to change current image)</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nomor Surat</label>
                            <input type="text" name="letter" class="form-control" placeholder="No Surat Perjanjian (MoU)" value="{{ old('letter') ?? $partner->letter }}">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Tanggal Mulai</label>
                            <input type="date" name="start" class="form-control form_datetime" value="{{ old('start') ?? $partner->start }}">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Tanggal Berakhir</label>
                            <input type="date" name="end" class="form-control form_datetime" value="{{ old('end') ?? $partner->end }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea name="description" class="form-control" rows="4" id="summernote">{{ old('description') ?? $partner->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check custom-checkbox mb-3">
                                <input type="checkbox" name="edu" value="yes" class="form-check-input" id="customCheckBox1" @if($partner->edu == 'yes') checked @endif>
                                <label class="form-check-label" for="customCheckBox1">Mitra Institusi Pendidikan</label>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('partner') }}" class="btn btn-info">Close</a>
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
                <img src="{{ $partner->getImage() }}" alt="No Image">
            </div>
        </div>
    </div>
</div>

@endsection



@push('style')
<!----summernote lite------>
<link href="{{ asset('backend/vendor/summernote/lite/summernote-lite.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

<!----end summernote lite------>

<link href="{{ asset('backend/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
@endpush

@push('script')
<script src="{{ asset('backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
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