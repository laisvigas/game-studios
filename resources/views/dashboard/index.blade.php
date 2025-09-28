@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="small mb-5 fw-bold"> 
        Welcome, {{ Auth::user()->name }}!
    </div>
@endsection