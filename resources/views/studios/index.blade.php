@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>All Studios</h1>
    <div class="accordion pb-4" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Add Games
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <!-- Form to add new studios -->
                    <form method="POST" action="{{ route('studios.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="studio_name" class="form-label">Studio name</label>
                            <input type="text" class="form-control" id="studio_name" name="studio_name"
                                placeholder="Ninstation" value="{{ old('studio_name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo (URL)</label>
                            <input type="text" class="form-control" id="logo" name="logo"
                                placeholder="https://example.com/logo.png" value="{{ old('logo') }}">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                placeholder="Greatest studio ever" value="{{ old('description') }}">
                        </div>

                        <button type="submit" class="btn btn-dark">Add Studio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div> 
        <p>N° of studios: {{ $totalStudios }}</p>
    </div>

    <div class="row">
        @foreach ($studios as $studio)
            <div class="col-lg-3 col-md-4 col-12 mb-4">
                <x-card-studio :studio="$studio" />
            </div>
        @endforeach
    </div>
@endsection
