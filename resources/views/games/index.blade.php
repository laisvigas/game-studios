@extends('layouts.app')

@section('title', 'Games')

@section('content')
  <h1>All games from {{ $studio->studio_name }}</h1>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    @forelse ($games as $game)
      <div class="col">
        <x-card-game :game="$game" />
      </div>
    @empty
      <p>No games found for this studio.</p>
    @endforelse
  </div>
@endsection
