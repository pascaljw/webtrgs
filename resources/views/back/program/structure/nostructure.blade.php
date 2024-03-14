@extends('back.partials.master')
@section('content')

<div class="d-flex align-items-center mb-4 flex-wrap">
    <h4 class="fs-20 font-w600  me-auto">Struktur Organisasi</h4>
    
</div>
<div class="card">
    <div class="card-body">
        <p>Belum ada Struktur Organisasi, silahkan klik tambah!</p>
        <div>
            <a href="{{ route('structure.create') }}" class="btn btn-primary me-3 btn-md"><i class="fas fa-plus me-2"></i>Tambah</a>
        </div>
    </div>
</div>
@endsection

