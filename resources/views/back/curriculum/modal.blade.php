
<button type="button" class="btn btn-md btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fa fa-upload" aria-hidden="true"></i> Import from Excel
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pilih File</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('curriculum.import') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="file" name="file" class="form-control form-control-lg">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
            </form>
        </div>
    </div>
    </div>