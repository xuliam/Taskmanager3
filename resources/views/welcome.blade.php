@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card-deck">
            @each('projects._cardDeck', $projects, 'individual')
        </div>

        @include('projects._createModal')

    </div>

    @include('projects._JS')

@endsection
