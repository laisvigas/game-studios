<div class="card h-100">
  <div class="row g-0 h-100">
    <!-- left content (image) -->
    <div class="col-12 col-md-4 align-self-center p-2">
      <div class="ratio ratio-1x1">
        <img
          src="{{ $game->image }}"
          alt="{{ $game->game_name }}"
          class="w-100 h-100 object-fit-cover rounded"
        >
      </div>
    </div>

    <!-- right content -->
    <div class="col-12 col-md-8">
      <div class="card-body d-flex flex-column h-100">
        <h5 class="card-title mb-1">{{ $game->game_name }}</h5>

        <div class="text-muted small mb-2">
          Released: {{ $game->released_date }}
        </div>

        @if(!empty($game->genre))
          <span class="badge bg-secondary align-self-start mb-2">{{ $game->genre }}</span>
        @endif

        <p class="card-text flex-grow-1">
          {{ $game->description }}
        </p>

        <div class="mt-auto d-flex gap-2">
          <a href="#" class="btn btn-outline-secondary btn-sm" title="Edit">
            <img src="{{ asset('/edit.svg') }}" alt="Edit" width="18" height="18">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
