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
                                <input type="text" name="name" class="form-control" placeholder="Nama dosen atau tenaga kependidikan">
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">NIP</label>
                                <input type="text" name="nip" class="form-control" placeholder="Nomor Induk Pegawai">
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Gambar <i>ukuran 600x600 px</i></label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="" class="form-label">Posisi/Jabatan</label>
                                <select name="position" id="" class="form-control">
                                    <option value="Dosen">Dosen</option>
                                    <option value="Admin">Admin</option>
                                    <option value="PLP">PLP Laboratorium</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Deksripsi</label>
                                <textarea name="description" class="form-control summernote" rows="4"></textarea>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Bidang Keahlian atau Minat</label>
                                <textarea name="interest" class="form-control summernote" rows="4"></textarea>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Pendidikan</label>
                                <textarea name="education" class="form-control summernote" rows="4"></textarea>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Informasi Lainnya</label>
                                <textarea name="more" class="form-control summernote" rows="4"></textarea>
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


    