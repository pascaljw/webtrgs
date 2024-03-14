@extends('back.partials.master')
@section('content')

<div class="d-flex align-items-center mb-4 flex-wrap">
    <h4 class="fs-20 font-w600  me-auto">Kontak Program Studi</h4>
    
</div>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Contact</h4>
    </div>
    <div class="card-body">
        <p>Belum ada alamat dan nomor kontak, silahkan klik tambah kontak!</p>
        <div>
            <a href="{{ route('contact.create') }}" class="btn btn-primary me-3 btn-md"><i class="fas fa-plus me-2"></i>Tambah Kontak</a>
        </div>
    </div>
</div>
@endsection

