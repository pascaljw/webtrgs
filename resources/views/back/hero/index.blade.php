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
            <table id="dataTable" class="display table" style="width:100%; height: auto;">
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
                            <td><a href="{{ asset('storage/'.$hero->image) }}" target="__blank" class="btn btn-success"><i class="bi bi-eye"></i></a></td>
                            <td>

                                <form action="{{ route('hero.delete', [$hero->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('script')
<script type="text/javascript">
    // Select all elements with the class 'confirmation'
    var elems = document.getElementsByClassName('confirmation');

    // Define a function to confirm deletion
    var confirmIt = function (e) {
        // If the user confirms deletion, do nothing
        // If the user cancels deletion, prevent the default action (i.e., form submission)
        if (!confirm('Are you sure?')) e.preventDefault();
    };

    // Attach the confirmIt function to the click event of all elements with the class 'confirmation'
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

@endpush
@endsection
