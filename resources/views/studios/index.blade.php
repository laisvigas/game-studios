@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Lista de Estúdios</h1>
    <p>Todos os estúdios cadastrados aqui.</p>

    <div class="row">
        @foreach ($studios as $studio)
            <div class="col-lg-3 col-md-4 col-12 mb-4">
                <x-card-studio :studio="$studio" />
            </div>
        @endforeach
    </div>
@endsection
