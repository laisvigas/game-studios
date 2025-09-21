@extends('layouts.app')

@section('title', 'Games')

@section('content')
    <h1>All games from ...</h1>

    <div class="row">
        @foreach ($games as $game)
            <div class="col-lg-3 col-md-4 col-12 mb-4">
                <x-card-game :studio="$game" />
            </div>
        @endforeach
    </div>
@endsection
