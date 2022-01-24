<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' :  '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ (Route::currentRouteName() === 'movies') ? 'active' :  '' }}" aria-current="page" href="{{ route('movies') }}">Movies</a>
  </li>
</ul>