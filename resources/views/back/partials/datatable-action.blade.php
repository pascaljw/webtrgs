<a href="{{request()->segment(2)}}/{{$model->id}}/edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
<a href="{{request()->segment(2)}}/{{$model->id}}/delete" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
