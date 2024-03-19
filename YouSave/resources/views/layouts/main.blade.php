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
    <style>
        .input-group-append {
            cursor: pointer;
        }
        body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.wrapper {
    flex: 1;
}

.footer {
    background-color: #f8f9fa;
    padding: 20px;
    text-align: center;
    margin-top: auto;
    width: 100%;
}
a{
    text-decoration: none;
    font-size: 1.2em;
    color: #31040d;
}

    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-white bg-white shadow sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}" style="color: #FF204E;"><span style="color: #A0153E;" class="nav-brand-two">You</span>Save</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search">
                <button class="btn btn-outline-danger" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('search.page') }}">List des sonneurs</a>
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
            </ul>
        </div>
    </header>

    <div class="wrapper">
        @yield('content')
    </div>

    <footer class="footer" style="background-color: #dca6a6; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h4>À propos de YouSave</h4>
                    <p>YouSave est une plateforme dédiée au don de sang. Notre mission est de sauver des vies en facilitant le processus de don de sang et en sensibilisant le public à l'importance de ce geste altruiste.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>Contactez-nous</h4>
                    <ul class="list-unstyled">
                        <li>Adresse:  Youssofia, Maroc</li>
                        <li>Téléphone: +123456789</li>
                        <li>Email: contact@yousave.com</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Suivez-nous</h4>
                    <ul class="list-unstyled">
                        <li><a href="www.facebook.com/Khaouamaryem"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="www.instagram.com/maryemkhaoua"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="twitter.com/maryem_khaoua"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
</body>
</html>