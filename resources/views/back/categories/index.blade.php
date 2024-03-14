@extends('back.partials.master')
@section('content')

<div class="d-flex align-items-center mb-4 flex-wrap">
    <h4 class="fs-20 font-w600  me-auto">Kategori</h4>
    <div>
    @include('back.categories.modal')
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">* wajib dibuat, kategori 'Prestasi' dan 'Pengumuman'</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="dataTableCategory" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('style')
<link href="{{ asset('./backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/DataTables/datatables.min.css')}}" rel="stylesheet"/>
@endpush

@push('script')
<script>
    $(function() {
        $('#dataTableCategory').DataTable({
            "processing"    : true,
            "serverSide"    : true,
            "responsive"    : true,
            "autoWidth"     : true,
            ajax: '{{ Route('category.data') }}',
            columns: [
                {data: 'DT_RowIndex', orderable: false, sortable: false},
                {data: 'name'},
                {data: 'slug'},
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


