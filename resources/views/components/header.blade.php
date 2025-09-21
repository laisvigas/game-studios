<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    {{-- Logo ou nome da aplicação --}}
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="logo.svg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
    </a>

    {{-- Botão do menu no mobile --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Links de navegação --}}
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-start"> 
        <li class="nav-item">
          <a class="nav-link" href="{{ route('studios.index') }}">Studios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
