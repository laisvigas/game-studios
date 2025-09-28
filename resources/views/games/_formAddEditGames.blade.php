<form method="POST" action="{{ $action }}">
  @csrf
  @if (!empty($method) && in_array($method, ['PUT','PATCH','DELETE']))
    @method($method)
  @endif

  <div class="mb-3">
    <input type="text" class="form-control" id="game_name" name="game_name"
           placeholder="Super Game"
           value="{{ old('game_name', $game->game_name ?? '') }}">
    @error('game_name') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="mb-3">
    <label for="image" class="form-label">Image (URL)</label>
    <input type="text" class="form-control" id="image" name="image"
           placeholder="https://example.com/image.png"
           value="{{ old('image', $game->image ?? '') }}">
    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description"
           placeholder="Short description of the game"
           value="{{ old('description', $game->description ?? '') }}">
    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="mb-3">
    <label for="genre" class="form-label">Genre</label>
    <input type="text" class="form-control" id="genre" name="genre"
           value="{{ old('genre', $game->genre ?? '') }}">
    @error('genre') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="mb-3">
    <label for="released_date" class="form-label">Released date</label>
    <input type="date" class="form-control" id="released_date" name="released_date"
           value="{{ old('released_date', $game->released_date ?? now()->format('Y-m-d')) }}">
    @error('released_date') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <button type="submit" class="btn btn-dark">{{ $submitLabel ?? 'Save' }}</button>
</form>
