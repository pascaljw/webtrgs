
<button type="button" class="btn btn-sm btn-rounded btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Filter
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Filter Name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('filter.store') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control form-control-lg @error('name')
                    is-invalid @enderror" placeholder="Tuliskan nama filter gambar yang baru">
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
            </form>
        </div>
    </div>
    </div>
