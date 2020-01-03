<div class="col-3 my-2">
    <div class="card">
        <ul class="icon-bar">
            <li>
                {!! Form::open(['route' => ['projects.destroy',$individual->id], 'method' => 'delete']) !!}
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-btn fa-times"></i>
                </button>
                {!! Form::close() !!}
            </li>
            <!-- Button trigger modal -->
            <li>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#editModal-{{$individual->id}}">
                    <i class="fa fa-btn fa-cog"></i>
                </button>
            </li>
        </ul>
        <a href="projects/{{ $individual->id }}" >
        <img src="{{ asset('storage/thumbs/'.$individual->thumbnail) }}" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title text-center">{{$individual->name}}</h5>
        </div>
    </a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModal-{{$individual->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{$individual->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel-{{$individual->id}}">Edit Model</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::model($individual,['route' => ['project.update', $individual->id], 'method' => 'patch', 'files' => true]) !!}

                <div class="modal-body">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}

                    {!! Form::label('thumbnail', 'pic') !!}
                    {!! Form::file('thumbnail', ['class'=>'form-control-file']) !!}
                    @include('errors.__projectCreate')
                </div>
                <div class="modal-footer">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

