@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo" role="tab" aria-controls="Todo" aria-selected="true">To do</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="done-tab" data-toggle="tab" href="#done" role="tab" aria-controls="Done" aria-selected="false">Done</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="todo" role="tabpanel" aria-labelledby="todo-tab">
            @if(count($todo))
                <table class="table table-striped">
                    @foreach ($todo as $todos)
                        <tr>
                            <td class="col-9">{{$todos->name}}</td>
{{--                            <td>@include('tasks._check')</td>--}}
{{--                            <td>@include('tasks._edit')</td>--}}
{{--                            <td>@include('tasks._delete')</td>--}}
                        </tr>
                    @endforeach
                </table>
                <div class="pull-right">
                    {{$todo->links()}}
                </div>
            @endif
        </div>
        <div class="tab-pane fade" id="done" role="tabpanel" aria-labelledby="done-tab">
            @if(count($done))
                <table class="table table-striped">
                    @foreach ($done as $dones)
                        <tr>
                            <td>{{$dones->name}}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="pull-right">
                    {{$todo->links()}}
                </div>
            @endif
        </div>
    </div>

</div>
@endsection
