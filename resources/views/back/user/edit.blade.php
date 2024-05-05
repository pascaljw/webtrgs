@extends('back.partials.master')
@section('content')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit</a></li>
    </ol>
</div>

<!-- row -->
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit User</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('user.update', $user->id) }}">
                        @csrf
                        @method('put')
                        <div class="row">

                            <div class="mb-3 col-12">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $user->name }}">
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') ?? $user->email }}">
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Password Baru</label>
                                <input type="password" name="password" id="password" class="form-control" onkeyup='check();'>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Ulangi Password Baru</label>
                                <input type="password" name="password2" id="password2" class="form-control" onkeyup='check();'>
                                <span id='message'></span>
                            </div>
                            <select name="rolle" id="" class="form-control">
                                <option selected value="{{ $user->rolle }}">Pilih Role</option>
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                            <div class="mb-3 col-12">
                                <label class="form-label">No Telp</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') ?? $user->phone }}">
                            </div>

                        </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('user') }}" class="btn btn-info">Close</a>
                    <button type="submit" class="btn btn-primary">Save</button>
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
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'password not matching';
    }
  }
</script>
@endpush

