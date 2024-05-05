@extends('back.partials.master')
@section('content')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tim</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Dosen dan Tenaga Kependidikan</a></li>
    </ol>
</div>

<!-- row -->
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">

            <div class="card-header">
                <h4 class="card-title">Tambah Baru</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('team.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">NIP</label>
                                <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}" placeholder="Nomor Induk Pegawai">
                                @error('nip')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Gambar <i>ukuran 600x600 px</i></label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" accept="image/*">
                                @error('image')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label for="" class="form-label">Posisi/Jabatan</label>
                                <select name="position" id="" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}" placeholder="Posisi/Jabatan" style="width: 100%;">
                                    <option disabled selected>Pilih Posisi/Jabatan</option>
                                    <option value="Dosen" @if (old('position') == "Dosen") {{ 'selected' }} @endif>Dosen</option>
                                    <option value="Admin" @if (old('position') == "Admin") {{ 'selected' }} @endif>Admin</option>
                                    <option value="PLP"   @if (old('position') == "PLP") {{ 'selected' }} @endif>PLP Laboratorium</option>
                                </select>
                                @error('positon')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Deksripsi</label>
                                <textarea name="description" class="form-control summernote @error('description') is-invalid @enderror" rows="4"></textarea>
                                @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Bidang Keahlian atau Minat</label>
                                <textarea name="interest" class="form-control summernote @error('interest') is-invalid @enderror" rows="4"></textarea>
                                @error('interest')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Pendidikan</label>
                                <textarea name="education" class="form-control summernote @error('education') is-invalid @enderror" rows="4"></textarea>
                                @error('education')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Informasi Lainnya</label>
                                <textarea name="more" class="form-control summernote @error('more') is-invalid @enderror" rows="4"></textarea>
                                @error('more')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('team') }}" class="btn btn-info">Close</a>
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


