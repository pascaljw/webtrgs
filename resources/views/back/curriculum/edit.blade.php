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
                <h4 class="card-title">Edit</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('curriculum.update', $curriculum->id) }}">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kode</label>
                            <div class="col-sm-9">
                                <input type="text" name="code" class="form-control" value="{{ old('code') ?? $curriculum->code }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Mata Kuliah</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" value="{{ old('name') ?? $curriculum->name }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Jumlah SKS</label>
                            <div class="col-sm-9">
                                <input type="number" name="credit" class="form-control" value="{{ old('credit') ?? $curriculum->credit }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Semester</label>
                            <div class="col-sm-9">
                                <select name="semester" class="form-control" required>
                                    <option value="1" {{ $curriculum->semester == '1' ? 'selected' : '' }}>1 (satu)</option>
                                    <option value="2" {{ $curriculum->semester == '2' ? 'selected' : '' }}>2 (dua)</option>
                                    <option value="3" {{ $curriculum->semester == '3' ? 'selected' : '' }}>3 (tiga)</option>
                                    <option value="4" {{ $curriculum->semester == '4' ? 'selected' : '' }}>4 (empat)</option>
                                    <option value="5" {{ $curriculum->semester == '5' ? 'selected' : '' }}>5 (lima)</option>
                                    <option value="6" {{ $curriculum->semester == '6' ? 'selected' : '' }}>6 (enam)</option>
                                    <option value="7" {{ $curriculum->semester == '7' ? 'selected' : '' }}>7 (tujuh)</option>
                                    <option value="8" {{ $curriculum->semester == '8' ? 'selected' : '' }}>8 (delapan)</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Praktikum</label>
                            <div class="col-sm-9">
                                <select name="practice" id="" class="form-control" required>
                                    <option value="Ya" {{ $curriculum->practice == 'Ya' ? 'selected' : '' }}>Ya</option>
                                    <option value="Tidak" {{ $curriculum->practice == 'Tidak' ? 'selected' : '' }}>Tidak</option>
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

    