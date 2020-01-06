<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editTasksModal-{{$todo->id}}">
    <i class="fa fa-cog"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="editTasksModal-{{$todo->id}}" tabindex="-1" role="dialog" aria-labelledby="editTasksModal-{{$todo->id}}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTasksModal-{{$todo->id}}Label">Task Edit</h5>
            </div>
            {!! Form::model($todo, ['route' => ['tasks.update', $todo->id], 'method' => 'patch']) !!}
            <div class="modal-body">
                        {!! Form::label('name', 'Task Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="modal-footer">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! $errors->edit->first('name','<div class="alert alert-danger">:message</div>') !!}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
