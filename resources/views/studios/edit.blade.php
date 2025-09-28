@extends('layouts.app')

@section('title', 'Editing Studios')

@section('content')
<div class="d-flex justify-content-center align-items-center">
  <div class="p-4 border rounded w-50">
    <h1 class="text-center">Editing {{ $studio->studio_name }}</h1>
        {{-- partial for the form --}}
        @include('studios._formAddEditStudio', [
            'submitLabel' => 'Update',
            'action' => route('studios.update', $studio),
            'method' => 'PUT',
            'studio' => $studio
        ])
  </div>
</div>
@endsection