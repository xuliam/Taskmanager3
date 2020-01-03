@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $bug)
            <li>{{$bug}}</li>
        @endforeach
    </ul>
@endif
