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
                      <label  class="form-label font-w600">Nama Mahasiswa<span class="text-danger scale5 ms-2">*</span></label>
                        <input name="name" type="text" class="form-control solid" placeholder="Nama" aria-label="name" value="{{$theses->name}}" required>
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                      <label  class="form-label font-w600">NIM<span class="text-danger scale5 ms-2">*</span></label>
                        <input name="nim" type="text" class="form-control solid" placeholder="Nomor Induk Mahasiswa" aria-label="name" value="{{$theses->nim}}" required>
                    </div>
                    <div class="col-xl-12  col-md-12 mb-4">
                        <label  class="form-label font-w600">Judul Skripsi<span class="text-danger scale5 ms-2">*</span></label>
                        <textarea name="title" class="form-control solid" aria-label="With textarea" required>{{$theses->title}}</textarea>
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Pembimbing 1<span class="text-danger scale5 ms-2">*</span></label>
                        <input name="adviser1" type="text" class="form-control solid" placeholder="Nama Pembimbing 1" aria-label="name" value="{{$theses->adviser1}}" required>
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Pembimbing 2<span class="text-danger scale5 ms-2">*</span></label>
                        <input name="adviser2" type="text" class="form-control solid" placeholder="Nama Pembimbing 2" aria-label="name" value="{{$theses->adviser2}}" required>
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Penguji 1<span class="text-danger scale5 ms-2">*</span></label>
                        <input name="adviser3" type="text" class="form-control solid" placeholder="Nama Penguji 1" aria-label="name" value="{{$theses->adviser3}}" required>
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Penguji 2<span class="text-danger scale5 ms-2">*</span></label>
                        <input name="adviser4" type="text" class="form-control solid" placeholder="Nama Penguji 2" aria-label="name" value="{{$theses->adviser4}}" required>
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Tahun<span class="text-danger scale5 ms-2">*</span></label>
                        <input name="year" type="number" class="form-control solid" placeholder="2024" aria-label="name" value="{{$theses->year}}" required>
                        
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