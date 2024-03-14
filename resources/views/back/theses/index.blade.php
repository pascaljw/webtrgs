@extends('back.partials.master')
@section('content')

<div class="d-flex align-items-center mb-4 flex-wrap">
    <h4 class="fs-20 font-w600  me-auto">Repository</h4>
    <div>
    <a href="{{ route('theses.create') }}" class="btn btn-sm btn-primary me-3 btn-md"><i class="fas fa-plus me-2"></i>Tambah</a>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="dataTableThesis" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Judul</th>
                        <th>Tahun</th>
                        <th>Pembimbing 1</th>
                        <th>pembimbing 2</th>
                        <th>Penguji 1</th>
                        <th>Penguji 2</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection


@push('style')
<link href="{{ asset('./backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endpush

@push('script')
<script>
    $(function() {
        $('#dataTableThesis').DataTable({
            "processing"    : true,
            "serverSide"    : true,
            "responsive"    : true,
            "autoWidth"     : true,
            ajax: '{{ Route('theses.data') }}',
            columns: [
                {data: 'DT_RowIndex', orderable: false, sortable: false},
                {data: 'name'},
                {data: 'nim'},
                {data: 'title'},
                {data: 'year'},
                {data: 'adviser1'},
                {data: 'adviser2'},
                {data: 'adviser3'},
                {data: 'adviser4'},
                {data: 'action'}
            ]
        })
    }
    )
</script>
<!-- Chart piety plugin files -->
<script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script> 
<script src="{{ asset('backend/DataTables/datatables.min.js') }}"></script>
@endpush
