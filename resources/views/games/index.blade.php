@extends('layouts.app')

@section('title', 'Games')

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1>All games from {{ $studio->studio_name }}</h1>

            @auth 
              {{-- Import CSV --}}
              @include('games._formAddCsv')
          @endauth
  </div>
  {{-- success message --}}
  @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

  <p class="card-text">Games published: {{ $gamesCount = $games->count() }}</p>

  {{-- Accordion with a form to add a game / just for authenticated users --}}
    @auth 
    <div class="accordion pb-4" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Add a new game for {{ $studio->studio_name }}
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {{-- partial for the form --}}
                        @include('games._formAddEditGames', [
                            'submitLabel' => 'Add',
                            'action' => route('games.store', $studio),
                            'method' => null,
                            'studio' => null
                        ])
                </div>
            </div>
        </div>
    </div>
    @endauth

  <div class="row row-cols-1 row-cols-md-2 g-4">
    @forelse ($games as $game)
      <div class="col">
        <x-card-game :game="$game" />
      </div>
    @empty
      <p>No games found for this studio.</p>
    @endforelse
  </div>

  <div class="d-flex justify-content-end mt-4">
    {{ $games->links() }}
  </div>
@endsection
