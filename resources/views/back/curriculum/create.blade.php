@extends('back.partials.master')
@section('content')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Kurikulum</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Prodi</a></li>
    </ol>
</div>

<!-- row -->
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Mata Kuliah</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('curriculum.store') }}">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kode</label>
                            <div class="col-sm-9">
                                <input type="text" name="code" class="form-control" placeholder="Kode mata kuliah" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Mata Kuliah</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" placeholder="Nama mata kuliah" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Jumlah SKS</label>
                            <div class="col-sm-9">
                                <input type="number" name="credit" class="form-control" placeholder="Kode mata kuliah" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Semester</label>
                            <div class="col-sm-9">
                                <select name="semester" class="form-control" required>
                                    <option value="1">1 (satu)</option>
                                    <option value="2">2 (dua)</option>
                                    <option value="3">3 (tiga)</option>
                                    <option value="4">4 (empat)</option>
                                    <option value="5">5 (lima)</option>
                                    <option value="6">6 (enam)</option>
                                    <option value="7">7 (tujuh)</option>
                                    <option value="8">8 (delapan)</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Praktikum</label>
                            <div class="col-sm-9">
                                <select name="practice" id="" class="form-control" required>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('curriculum') }}" class="btn btn-info">Close</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
    