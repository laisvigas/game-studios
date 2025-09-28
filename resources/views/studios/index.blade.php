@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>All Studios</h1>

      {{-- success message --}}
      @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif

    {{-- Accordion with a form to add a studion --}}
    <div class="accordion pb-4" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Add Studio
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {{-- partial for the form --}}
                      <h1>Add Studio</h1>
                        @include('studios._form', [
                            'submitLabel' => 'Add',
                            'action' => route('studios.store'),
                            'method' => null,
                            'studio' => null
                        ])
                </div>
            </div>
        </div>
    </div>

    <div class="small"> 
        <p>N° of studios: {{ $totalStudios }}</p>
    </div>

    <form class="pb-4 d-flex gap-2" method="GET" action="{{ route('studios.index') }}">
        <input type="text" name="search" placeholder="search" value="{{ $search }}">
        <button class="btn btn-secondary">Search</button>
        <a href="{{ route('studios.index') }}" class="btn btn-outline-secondary">Clear</a>
    </form>

    <div class="row">
        @foreach ($studios as $studio)
            <div class="col-lg-3 col-md-4 col-12 mb-4">
                <x-card-studio :studio="$studio" />
            </div>
        @endforeach
    </div>

<div class="d-flex justify-content-end mt-4">
    {{ $studios->links() }}
</div>


@endsection
