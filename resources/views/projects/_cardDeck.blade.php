<div class="col-3 my-2">
    <a href="projects/{{ $individual->id }}" class="card">
        <ul class="icon-bar">
            <li><i class="fa fa-btn fa-times"></i> </li>
            <li><i class="fa fa-btn fa-cog"></i> </li>
        </ul>
        <img src="{{ asset('storage/thumbs/'.$individual->thumbnail) }}" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title text-center">{{$individual->name}}</h5>
        </div>
    </a>
</div>

