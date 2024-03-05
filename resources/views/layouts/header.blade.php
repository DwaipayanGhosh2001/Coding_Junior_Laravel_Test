<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/heroes/hero-3/assets/css/hero-3.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div class="container-fluid px-0">
            <nav
            class="navbar navbar-expand-sm navbar-light bg-light border shadow-sm border-0 rounded-2 pb-3 pt-3 pt-md-0 "
        >
            <div class="container">
                <a class="navbar-brand text-danger fst-italic " href="{{route('home')}}">Digital<span class="text-secondary">Guide</span>                    
                </a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'fw-bold text-decoration-underline ' : 'text-secondary-subtle' }}" href="{{ route('home') }}" aria-current="page">Home</a>
                        </li>
                        
                        @auth
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard') ? 'fw-bold text-decoration-underline ' : 'text-secondary-subtle' }}" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        @endauth
                       
                       
                    </ul>
                    @guest
                    <a href="{{route('register')}}"><button class="signupbtn">
                        Sign up
                        <div class="arrow-wrapper ">
                            <div class="arrow"></div>
                    
                        </div>
                    </button></a>
                    @else
                    <form action="{{ route('logout') }}" method="POST" id="logout-form">
                        @csrf
                        <button class="signupbtn">
                            Logout
                            <div class="arrow-wrapper ">
                                <div class="arrow"></div>
                        
                            </div>
                        </button>
                    </form>
                    @endguest
                    
                   
                </div>
            </div>
        </nav>
        </div>  
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

