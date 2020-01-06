{!! Form::open(['route' => ['tasks.destroy', $todo->id], 'method' => 'delete']) !!}
<button type="submit" class="btn btn-danger btn-sm">
    <i class="fa fa-times"></i>
</button>
{!! Form::close() !!}
