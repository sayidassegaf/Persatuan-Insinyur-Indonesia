<nav class="navbar navbar-expand-lg navbar-light bg-light p-3 border-bottom">
  <div class="container">
    {{-- <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"> --}}
    <a href="/" class="flex items-center py-8 px-4 lg:px-8 xl:px-16">
      <img src="/img/Logo-Header-PII.png" alt="" width="150">
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li class="nav-item">
                  <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Aggrements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">Certification</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Membership</a>
              </li>
          </ul>
                <form class="form-inline my-2 my-lg-0 col-50 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                   <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="search" value="{{ request('search') }}">
                </form>

              <ul class="navbar-nav">
                @auth
                  <li class="nav-item dropdown justify-content-end">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/logout" method="post">
                                @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                          </form>
                      </li>
                    </ul>
                  </li>
                @else
                <li class="nav-item d-block">
                    <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
        </div>
      {{-- </div> --}}
  </div>
</nav>