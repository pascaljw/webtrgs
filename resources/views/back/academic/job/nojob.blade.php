@extends('back.partials.master')
@section('content')

<div class="d-flex align-items-center mb-4 flex-wrap">
    <h4 class="fs-20 font-w600  me-auto">Profil Lulusan</h4>
    
</div>
<div class="card">
    <div class="card-body">
        <p>Belum ada profil lulusan, silahkan klik tambah!</p>
        <div>
            <a href="{{ route('job.create') }}" class="btn btn-primary me-3 btn-md"><i class="fas fa-plus me-2"></i>Tambah Profil Lulusan</a>
        </div>
    </div>
</div>
@endsection

