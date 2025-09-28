@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="p-4 border rounded w-50">
        <h1 class="h4 mb-3 text-center">Login</h1>

        {{-- Mensagens de erro --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" 
                       class="form-control" 
                       name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" 
                       class="form-control" 
                       name="password" required>
            </div>

            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">
                    Remember Me
                </label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-dark">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
