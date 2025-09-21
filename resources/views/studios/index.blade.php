@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Lista de Estúdios</h1>
    <p>todos os estúdios cadastrados aqui.</p>

    @foreach ($studios as $studio)
    <x-card-studio :studio="$studio" />
    @endforeach

@endsection
