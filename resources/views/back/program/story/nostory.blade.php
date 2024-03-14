@extends('back.partials.master')
@section('content')

<div class="d-flex align-items-center mb-4 flex-wrap">
    <h4 class="fs-20 font-w600  me-auto">Selayang Pandang</h4>
    
</div>
<div class="card">
    <div class="card-body">
        <p>Belum ada info terkait prodi, silahkan klik tambah!</p>
        <div>
            <a href="{{ route('story.create') }}" class="btn btn-primary me-3 btn-md"><i class="fas fa-plus me-2"></i>Tambah</a>
        </div>
    </div>
</div>
@endsection

