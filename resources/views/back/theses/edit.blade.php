@extends('back.partials.master')
@section('content')
<div class="d-flex align-items-center mb-4">
    <h4 class="fs-20 font-w600 mb-0 me-auto">Skripsi Baru</h4>
    <div>
        <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"> <i class="fas fa-envelope"></i></a>
        <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"><i class="fas fa-phone-alt"></i></a>
        <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fas fa-info"></i></a>

    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('theses.update', $theses->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-xl-6  col-md-6 mb-4">
                      <label  class="form-label font-w600">Nama Mahasiswa</label>
                        <input name="name" type="text" class="form-control solid @error('name') is-invalid @enderror" placeholder="Nama" aria-label="name" value="{{ old('name', $theses->name) }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                      <label  class="form-label font-w600">NIM</label>
                        <input name="nim" type="text" class="form-control solid @error('nim') is-invalid @enderror" placeholder="Nomor Induk Mahasiswa" aria-label="nim" value="{{ old('nim', $theses->nim) }}">
                        @error('nim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-xl-12  col-md-12 mb-4">
                        <label  class="form-label font-w600">Judul Skripsi</label>
                        <textarea name="title" class="form-control solid @error('title') is-invalid @enderror" aria-label="With textarea">{{ old('title', $theses->title) }}</textarea>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Pembimbing 1</label>
                        <input name="adviser1" type="text" class="form-control solid @error('adviser1') is-invalid @enderror" placeholder="Nama Pembimbing 1" aria-label="name" value="{{ old('adviser1', $theses->adviser1) }}">
                        @error('adviser1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Pembimbing 2</label>
                        <input name="adviser2" type="text" class="form-control solid @error('adviser2') is-invalid @enderror" placeholder="Nama Pembimbing 2" aria-label="name" value="{{ old('adviser2', $theses->adviser2) }}">
                        @error('adviser2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Penguji 1</label>
                        <input name="adviser3" type="text" class="form-control solid @error('adviser3') is-invalid @enderror" placeholder="Nama Penguji 1" aria-label="name" value="{{ old('adviser3', $theses->adviser3) }}">
                        @error('adviser3')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Penguji 2</label>
                        <input name="adviser4" type="text" class="form-control solid @error('adviser4') is-invalid @enderror" placeholder="Nama Penguji 2" aria-label="name" value="{{ old('adviser4', $theses->adviser4) }}">
                        @error('adviser4')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Tahun</label>
                        <input name="year" type="number" class="form-control solid @error('year') is-invalid @enderror" placeholder="2024" aria-label="name" value="{{ old('year', $theses->year) }}">
                        @error('year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

            </div>
            <div class="card-footer text-end">
                <div>
                    <a href="javascript:void(0);" class="btn btn-primary me-3">Close</a>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
