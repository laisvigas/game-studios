<div class="card h-100 p-3">
  <div class="d-flex justify-content-end">
    @auth
      <form action="{{ route('studios.destroy', $studio) }}" method="POST" 
            onsubmit="return confirm('Delete this studio?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-link p-0 text-danger" title="Delete">
          x
        </button>
      </form>
    @endauth
  </div>

  <div class="ratio ratio-16x9">
    <img src="{{ $studio->logo }}" 
         class="w-100 h-100 object-fit-contain" 
         alt="{{ $studio->studio_name }}">
  </div>

  <div class="card-body d-flex flex-column">
    <h5 class="card-title">{{ $studio->studio_name }}</h5>
    <p class="card-text flex-grow-1">{{ $studio->description }}</p>
    <p class="card-text">Games published: {{ $studio->games_count }}</p>

    <div class="d-flex justify-content-between mt-auto">
      @auth
        <a href="{{ route('studios.edit', $studio) }}" class="btn btn-outline-secondary btn-sm" title="Edit">
          <img src="{{ asset('/edit.svg') }}" alt="Edit" width="20" height="20">
        </a>
      @endauth

      <a href="{{ route('studios.games.index', $studio->id) }}" class="btn">
        <img src="{{ asset('/go.svg') }}" alt="Go" width="20" height="20">
      </a>
    </div>
  </div>
</div>
