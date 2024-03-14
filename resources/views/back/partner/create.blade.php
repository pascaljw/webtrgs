@extends('back.partials.master')
@section('content')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Partner</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Prodi</a></li>
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
                    <form method="post" action="{{ route('partner.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Nama Mitra</label>
                                <input type="text" name="name" class="form-control
                                @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nama DUDI">

                                @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Image (Choose to change current image)</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Nomor Surat</label>
                                <input type="text" name="letter" class="form-control" placeholder="No Surat Perjanjian (MoU)" value="{{ old('letter') }}">
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Tanggal Mulai</label>
                                <input type="date" name="start" class="form-control form_datetime" value="{{ old('start') }}">
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Tanggal Berakhir</label>
                                <input type="date" name="end" class="form-control form_datetime" value="{{ old('end') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <textarea name="description" class="form-control" rows="4" id="summernote">{{ old('description') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <div class="form-check custom-checkbox mb-3">
                                    <input type="checkbox" name="edu" value="yes" class="form-check-input" id="customCheckBox1">
                                    <label class="form-check-label" for="customCheckBox1">Mitra Institusi Pendidikan</label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('partner') }}" class="btn btn-info">Close</a>
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