@extends('frontend.partials.content')
@section('content')
<div class="container table-responsive mt-5 pt-5">
    <table class="table table-striped text-center">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Judul Skripsi</th>
            <th scope="col">Tahun Lulus</th>
            <th scope="col">Penguji 1</th>
            <th scope="col">Penguji 2</th>
            <th scope="col">Penguji 3</th>
            <th scope="col">Penguji 4</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($theses as $these)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $these->name }}</td>
            <td>{{ $these->nim }}</td>
            <td>{{ $these->title }}</td>
            <td>{{ $these->year }}</td>
            <td>{{ $these->adviser1 }}</td>
            <td>{{ $these->adviser2 }}</td>
            <td>{{ $these->adviser3 }}</td>
            <td>{{ $these->adviser4 }}</td>
        </tr>
        @empty
        <tr>
            <div class="container ">
                <td class="text-center" colspan="10">Tidak Ada Data</td>
            </div>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
