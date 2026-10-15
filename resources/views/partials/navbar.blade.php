<nav class="navbar navbar-expand-lg">
  <div class="container">
    <img src="{{ URL::asset('assets/images/logo.png') }}" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="main">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link p-2 p-lg-3 active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-2 p-lg-3" href="#">services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-2 p-lg-3" href="#">portofilio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-2 p-lg-3" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-2 p-lg-3" href="#">Contact</a>
        </li>
      </ul>
      <div class="search ps-3 pe-3 d-none d-lg-block">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>
      <div class="login">
        <a href="#" class="btn rounded-pill main-btn">login</a>
      </div>
    </div>
  </div>
</nav>