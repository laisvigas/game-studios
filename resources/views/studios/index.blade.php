@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">The Ultimate Game Studios DB!</h1>

        @auth 
            {{-- Import CSV --}}
            @include('studios._formAddCsv')
        @endauth
        <a href="{{ route('studios.export') }}" class="btn btn-success">Download Studios</a>
    </div>

      {{-- success message --}}
      @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif

    {{-- Accordion with a form to add a studion / just for authenticated users --}}
    @auth 
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
                        @include('studios._formAddEditStudio', [
                            'submitLabel' => 'Add',
                            'action' => route('studios.store'),
                            'method' => null,
                            'studio' => null
                        ])
                </div>
            </div>
        </div>
    </div>
    @endauth

    <div class="small"> 
        <p>N° of studios: {{ $totalStudios }}</p>
    </div>

    {{-- seaching by name --}}
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
