<div class="card h-100 p-3">
  <div class="ratio ratio-16x9">
    <img src="{{ $studio->logo }}" 
         class="w-100 h-100 object-fit-contain" 
         alt="{{ $studio->studio_name }}">
  </div>
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">{{ $studio->studio_name }}</h5>
    <p class="card-text flex-grow-1">{{ $studio->description }}</p>
    <p class="card-text">Games published: {{ $studio->games_count }}</p>
    <a href="{{ route('studios.games.index', $studio->id) }}" class="btn btn-primary mt-auto">
      See more
    </a>
  </div>
</div>
