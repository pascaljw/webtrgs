@extends('back.partials.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Kategori</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        @foreach($category as $c)    
                        <form method="post" action="{{ route('category.update', $c->id) }}">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <input name="name" type="text" class="form-control form-control-lg" value="{{ $c->name }}">
                            </div>
                            @endforeach
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