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
                <form action="{{ route('theses.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label for="name" class="form-label font-w600">Nama Mahasiswa<span class="text-danger scale5 ms-2">*</span></label>
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror solid" placeholder="Nama" aria-label="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label for="nim" class="form-label font-w600">NIM<span class="text-danger scale5 ms-2">*</span></label>
                        <input id="nim" name="nim" type="text" class="form-control @error('nim') is-invalid @enderror solid" placeholder="Nomor Induk Mahasiswa" aria-label="nim" value="{{ old('nim') }}">
                        @error('nim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-12  col-md-12 mb-4">
                        <label for="title" class="form-label font-w600">Judul Skripsi<span class="text-danger scale5 ms-2">*</span></label>
                        <textarea id="title" name="title" class="form-control @error('title') is-invalid @enderror solid" aria-label="With textarea"></textarea>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label for="adviser1" class="form-label font-w600">Pembimbing 1<span class="text-danger scale5 ms-2">*</span></label>
                        <input id="adviser1" name="adviser1" type="text" class="form-control @error('adviser1') is-invalid @enderror solid" placeholder="Nama Pembimbing 1" aria-label="adviser1" value="{{ old('adviser1') }}">
                        @error('adviser1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label for="adviser2" class="form-label font-w600">Pembimbing 2<span class="text-danger scale5 ms-2">*</span></label>
                        <input id="adviser2" name="adviser2" type="text" class="form-control @error('adviser2') is-invalid @enderror solid" placeholder="Nama Pembimbing 2" aria-label="adviser2" value="{{ old('adviser2') }}">
                        @error('adviser2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label for="adviser3" class="form-label font-w600">Penguji 1<span class="text-danger scale5 ms-2">*</span></label>
                        <input id="adviser3" name="adviser3" type="text" class="form-control @error('adviser3') is-invalid @enderror solid" placeholder="Nama Penguji 1" aria-label="adviser3" value="{{ old('adviser3') }}">
                        @error('adviser3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label for="adviser4" class="form-label font-w600">Penguji 2<span class="text-danger scale5 ms-2">*</span></label>
                        <input id="adviser4" name="adviser4" type="text" class="form-control @error('adviser4') is-invalid @enderror solid" placeholder="Nama Penguji 2" aria-label="adviser4" value="{{ old('adviser4') }}">
                        @error('adviser4')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label for="year" class="form-label font-w600">Tahun<span class="text-danger scale5 ms-2">*</span></label>
                        <input id="year" name="year" type="number" class="form-control @error('year') is-invalid @enderror solid" placeholder="2024" aria-label="year" value="{{ old('year') }}">
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
