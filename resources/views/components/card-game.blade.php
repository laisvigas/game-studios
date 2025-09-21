<div class="card h-100 p-3">
  <div class="ratio ratio-16x9">
    <img src="{{ $game->image }}" 
         class="w-100 h-100 object-fit-contain" 
         alt="{{ $game->game_name }}">
  </div>
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">{{ $game->game_name }}</h5>
    <p class="card-text flex-grow-1">{{ $game->released_date }}</p>
    <p class="card-text flex-grow-1">{{ $game->genre }}</p>
    <p class="card-text flex-grow-1">{{ $game->description }}</p>
  </div>
</div>
