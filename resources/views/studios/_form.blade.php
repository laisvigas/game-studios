<form method="POST" action="{{ $action }}">
    @csrf
    @if (!empty($method) && in_array($method, ['PUT','PATCH','DELETE']))
        @method($method)
    @endif
    <div class="mb-3">
        <input type="text" class="form-control" id="studio_name" name="studio_name"
               placeholder="Ninstation"
               value="{{ old('studio_name', $studio->studio_name ?? '') }}">
        @error('studio_name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label for="logo" class="form-label">Logo (URL)</label>
        <input type="text" class="form-control" id="logo" name="logo"
               placeholder="https://example.com/logo.png"
               value="{{ old('logo', $studio->logo ?? '') }}">
        @error('logo') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description"
               placeholder="Greatest studio ever"
               value="{{ old('description', $studio->description ?? '') }}">
        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="btn btn-dark">{{ $submitLabel ?? 'Save' }}</button>
</form>
