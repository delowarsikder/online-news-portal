<nav class="navbar sticky-top navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('pages.index') }}">KUET</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#top-header-navbar"
      aria-controls="top-header-navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="top-header-navbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('pages.index') }}">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pages.about') }}">about</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">student</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('post.index') }}">post</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex me-2">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <div class="d-flex">
        <button class="btn btn-success me-2" type="submit">SignUp</button>
        <button class="btn btn-primary me-2" type="submit">SignIn</button>
      </div>
    </div>
  </div>
</nav>