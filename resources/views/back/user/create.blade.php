@extends('back.partials.master')
@section('content')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">All</a></li>
    </ol>
</div>

<!-- row -->
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Insert new User</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap User Baru">
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="user@gmail.com">
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" onkeyup='check();'>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Ulangi Password</label>
                                <input type="password" name="password2" id="password2" class="form-control" onkeyup='check();'>
                                <span id='message'></span>
                            </div>

                            <div class="mb-3 col-12">
                                <label class="form-label">Role</label>
                                <select name="rolle" id="" class="form-control">
                                    <option selected disabled>Pilih Role</option>
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                </select>

                            </div>

                            <div class="mb-3 col-12">
                                <label class="form-label">No HP</label>
                                <input type="text" name="phone" class="form-control" placeholder="081388889999">
                            </div>

                        </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('user') }}" class="btn btn-info">Close</a>
                    <button type="submit" class="btn btn-primary" id="save" style="display:none;">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
var check = function() {
    if (document.getElementById('password').value ==
      document.getElementById('password2').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'password matching';
      document.getElementById('save').style.display = '';
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'password not matching';
    }
  }
</script>
@endpush

