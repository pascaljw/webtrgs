@extends('back.partials.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Nama Filter</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post" action="{{ route('filter.update', $filter->id) }}">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <input name="name" type="text" class="form-control form-control-lg @error('name')
                                is-invalid @enderror" value="{{ $filter->name }}">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
