<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouSave</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    {{-- <header class="navbar navbar-expand-lg navbar-white bg-white shadow sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}" style="color: #FF204E;"><span style="color: #A0153E;" class="nav-brand-two">You</span>Save</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex ms-auto mb-2 mb-lg-0">
                    <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.show') }}">List des donneurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apropos.page') }}">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->prenom}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('user.profil') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('users.show') }}">List des donneurs</a></li>
                            <li><a class="dropdown-item" href="{{ route('post.index') }}">Fil d'actualité</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
    </header> --}}

    <header class="navbar navbar-expand-lg navbar-white bg-white shadow sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}" style="color: #FF204E;">
            <span style="color: #A0153E;" class="nav-brand-two">You</span>Save
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <ul class="navbar-nav ms-auto">
                @guest
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.show') }}">List des donneurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.index') }}">Fil d'actualité</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apropos.page') }}">A propos</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>

                @else
                @if(Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.index') }}">Fil d'actualité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.show') }}">List des donneurs</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apropos.page') }}">A propos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->prenom }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="{{ route('users.show') }}">List des donneurs</a></li>
                        <li><a class="dropdown-item" href="{{ route('post.index') }}">Fil d'actualité</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.profil') }}">Profile</a></li>
                        @if(Auth::user()->role[0]->id == 1)
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @endif
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</header>

    <div class="wrapper">
        @yield('content')
    </div>

      <div
           class="text-center p-3"
           style="background-color: rgba(228, 130, 130, 0.2)"
           >
        © 2024 Copyright:
        <a class="text-dark" href="{{ route('home') }}"
           >YouSave.com</a
          >
      </div>

    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-5m2g2I8sH5OZS2wyv4xkW/Zk6oCR5EP6bC+YLZB9nqzDxe/+nvAvCk5QV8KSImBf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
</body>
</html>