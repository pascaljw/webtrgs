@extends('frontend.partials.content')
@section('content')
<div class="container table-responsive mt-5 pt-5">
  <table class="table table-striped">
</div>
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
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
@endsection