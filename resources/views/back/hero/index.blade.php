@extends('back.partials.master')
@section('content')

<div class="d-flex align-items-center mb-4 flex-wrap">
    <h4 class="fs-20 font-w600  me-auto">Gambar Halaman Utama</h4>
    <div>
    <a href="{{ route('hero.create') }}" class="btn btn-primary me-3 btn-md"><i class="fas fa-plus me-2"></i>Tambah Image</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Gambar Halaman Utama</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="dataTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Detail</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($heros as $hero)    
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $hero->title }}</td>
                            <td>{{ $hero->detail }}</td>
                            <td>{{ $hero->getImage() }}</td>
                            <td>Hapus</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
