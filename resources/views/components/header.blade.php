<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    {{-- app logo --}}
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="/logo.svg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
    </a>

    {{-- mobile buttons --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- nav links --}}
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-start"> 
        @auth
          {{-- if user isn't logged --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
          </li>
        @endauth
      </ul>
      <ul class="navbar-nav ms-start"> 
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto"> 
        @guest
          {{-- if user isn't logged --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
        @endguest

        @auth
          {{-- if user is logged --}}
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn nav-link border-0 bg-transparent">
                Logout
              </button>
            </form>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
