@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="d-flex justify-content-center align-items-center">
  <div class="p-4 border rounded w-50">
    <h1 class="text-center">Editing {{ $game->game_name }}</h1>
        {{-- partial for the form --}}
        @include('games._formAddEditGames', [
            'submitLabel' => 'Update',
            'action' => route('games.update', $game),
            'method' => 'PUT',
            'game' => $game
        ])
  </div>
</div>
@endsection