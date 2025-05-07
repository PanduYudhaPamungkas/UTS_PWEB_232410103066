<nav class="navbar navbar-expand-lg custom-navbar sticky-top" style="background-color: #8B5E3C;">
  <div class="container">
      <a class="navbar-brand text-black fw-bold" href="#">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        BookShelf
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" style="font-family: Poppins; padding:10px">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link text-black" href="/dashboard?username={{ $slot }}">Dashboard</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-black" href="/profile?username={{ $slot }}">Profile</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-black" href="/pengelolaan?username={{ $slot }}">Kelola</a>
              </li>
          </ul>
      </div>
  </div>
</nav>