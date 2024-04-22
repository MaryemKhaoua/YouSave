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
            </ul>
        </div>
    </header>

    <div class="wrapper">
        @yield('content')
    </div>

    {{-- <footer class="footer" style="background-color: #dca6a6; padding: 50px 0;">
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
    </footer> --}}

    <!-- Footer -->
    {{-- <footer
            class="text-center text-lg-start text-dark"
            style="background-color: #ECEFF1"
            >
      <!-- Section: Social media -->
      <section
               class="d-flex justify-content-between p-4 text-white"
               style="background-color: #d24452"
               >
        <!-- Left -->
        <div class="me-5">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media --> --}}

      <!-- Section: Links  -->
      {{-- <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">YouSave</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                YouSave est une plateforme dédiée au don de sang.
                Notre mission est de sauver des vies en facilitant le processus de don de sang et en sensibilisant le public à l'importance de ce geste altruiste.</p>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Products</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-dark">MDBootstrap</a>
              </p>
              <p>
                <a href="#!" class="text-dark">MDWordPress</a>
              </p>
              <p>
                <a href="#!" class="text-dark">BrandFlow</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-dark">Your Account</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p><i class="fas fa-home mr-3"></i> Youcode, Youssofia, Maroc</p>
              <p><i class="fas fa-envelope mr-3"></i> maryem.khaoua@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 212 610929409</p>
              <p><i class="fas fa-print mr-3"></i> + 212 610929408</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section> --}}
      {{-- <div
           class="text-center p-3"
           style="background-color: rgba(228, 130, 130, 0.2)"
           >
        © 2024 Copyright:
        <a class="text-dark" href="{{ route('home') }}"
           >YouSave.com</a
          >
      </div> --}}

    </footer>
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