@extends('back.partials.master')
@section('content')

<div class="d-flex align-items-center mb-4 flex-wrap">
    <h4 class="fs-20 font-w600  me-auto">Kontak Program Studi</h4>

</div>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tentang Kam</h4>
    </div>
    <div class="card-body">
        <p>Belum ada Tentang, silahkan klik tambah Tentang!</p>
        <div>
            <a href="{{ route('admin.tentang.create') }}" class="btn btn-primary me-3 btn-md"><i class="fas fa-plus me-2"></i>Tambah Tentang</a>
        </div>
    </div>
</div>
@endsection

