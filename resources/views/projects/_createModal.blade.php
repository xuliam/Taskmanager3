<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
    <i class="fa fa-btn fa-plus"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">New Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route' => 'project.store', 'method' => 'post', 'files' => true]) !!}

                <div class="modal-body">
    {{--                --}}
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', '', ['class' => 'form-control']) !!}

                        {!! Form::label('thumbnail', 'Thumbnail') !!}
                        {!! Form::file('thumbnail', ['class'=>'form-control-file']) !!}
                </div>
                <div class="modal-footer">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
