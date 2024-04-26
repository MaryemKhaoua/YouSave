@extends('layouts.main')
@section('content')

<section class="vh-100%" style="background-color: #f8f9fa;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px; background-color: #ffffff;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #ae0505;">Sign up</p>
                                <form id="loginForm" method="post" action="{{ route('user.login') }}" class="mx-1 mx-md-4">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="form3Example3c" class="form-label" style="color: #ae0505;">Email</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw" style="color: #ae0505;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="email" name="email" class="form-control"  />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form3Example4c" class="form-label" style="color: #ae0505;">Password</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw" style="color: #ae0505;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="password" name="password" class="form-control"  />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #ae0505;">LogIn</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="./../images/login.avif" class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        if (!email || !password) {
            event.preventDefault();
            alert("remplir tous les champs");
        }
    });
</script>

@endsection
