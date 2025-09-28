@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="d-flex justify-content-start align-items-start">
  <div class="text-start p-4 border rounded bg-light shadow">
    <h1 class="mb-4">About the App</h1>

    <p class="lead">
      This project was developed as the final activity for the <strong>Back-End Frameworks</strong> course, taught by Professor <strong>Sara Monteiro</strong>.
    </p>

    <p>The application applies concepts learned throughout the course, including:</p>
    <ul class="text-start d-inline-block">
      <li>Creation and organization of controllers, models, and views</li>
      <li>Proper routing practices</li>
      <li>Blade templates</li>
      <li>Authentication with <strong>Laravel Fortify</strong></li>
      <li>Middleware usage</li>
      <li>Database migrations</li>
      <li>Integration with a <strong>MySQL database</strong></li>
      <li>Basic front-end styling with <strong>Bootstrap</strong></li>
    </ul>

    <p class="fst-italic">
      ✨ I chose file upload as an extra feature not covered in class that I wanted to implement in this app. ✨
    </p>

    <p>
      The app is a <strong>Video Game Studios Management System</strong>.
      Unauthenticated users can view studios and games and download all studios or all games for a given studio.
      Authenticated users can add, edit, and delete studios and games, as well as upload CSV files to import multiple records at once.
    </p>
  </div>
</div>
@endsection
