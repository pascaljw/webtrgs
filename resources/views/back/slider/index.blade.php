@extends('back.partials.master')
@section('content')

<div class="d-flex align-items-center mb-4 flex-wrap">
    <h4 class="fs-20 font-w600  me-auto">All Slider</h4>
    <div>
    <a href="{{ route('slider.create') }}" class="btn btn-primary me-3 btn-md"><i class="fas fa-plus me-2"></i>Tambah Slider</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Sliders</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="dataTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('style')
<link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endpush

@push('script')
<!-- Chart piety plugin files -->
<script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script> 

<script>
    $(function() {
        $('#dataTable').DataTable({
            "processing"    : true,
            "serverSide"    : true,
            "responsive"    : true,
            "autoWidth"     : true,
            ajax: '{{ route('slider.data') }}',
            columns: [
                {data: 'DT_RowIndex', orderable: false, sortable: false},
                {data: 'title'},
                {data: 'link'},
                {data: 'image'},
                {data: 'action'}
            ]
        })
    }
    )
</script>

<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

@endpush

