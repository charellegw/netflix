<nav class="navbar navbar-expand-lg bg-black p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images\logo\logo.png') }}" alt="logo" style="width: 50px; height:50px;">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Route::is('home') ? 'active text-primary' : 'text-white' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::is('movies') ? 'active text-primary' : 'text-white' }}" href="{{ route('movies') }}">Movies</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" id="genreDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Genres
          </a>
          <ul class="dropdown-menu text-white border-0" aria-labelledby="genreDropdown">
            @foreach ($genres as $genre)
              <li><a class="dropdown-item" href="#">{{ $genre->name }}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Casts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Popular Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>