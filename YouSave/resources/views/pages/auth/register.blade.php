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
                                <form method="post" action="{{ route('user.register') }}" class="mx-1 mx-md-4">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="form3Example1c" class="form-label" style="color: #ae0505;">Nom</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fas fa-user fa-lg me-3 fa-fw" style="color: #ae0505;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" name="nom" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form3Example1c" class="form-label" style="color: #ae0505;">Prénom</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fas fa-user fa-lg me-3 fa-fw" style="color: #ae0505;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" name="prenom" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form3Example1c" class="form-label" style="color: #ae0505;">Phone</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fa-solid fa-phone fa-lg me-3 fa-fw" style="color: #ae0505;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="tel" id="form3Example1c" name="tele" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form3Example1c" class="form-label" style="color: #ae0505;">Type De Sang</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fa-solid fa-droplet fa-lg me-3 fa-fw" style="color: #ae0505;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <select name="blood_type" id="">
                                                    <option value="1">A+</option>
                                                    <option value="2">O+</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form3Example1c" class="form-label" style="color: #ae0505;">Ville</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fa-solid fa-city fa-lg me-3 fa-fw" style="color: #ae0505;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <select name="city" id="">
                                                    <option value="1">Safi</option>
                                                    <option value="2">Youssofia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form3Example1c" class="form-label" style="color: #ae0505;">Prêt à donner</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fa-solid fa-hand-holding-hand fa-lg me-3 fa-fw" style="color: #ae0505;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <select name="disponibility" id="">
                                                    <option value="1">Oui</option>
                                                    <option value="0">Pas maintenant</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form3Example3c" class="form-label" style="color: #ae0505;">Email</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw" style="color: #ae0505;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" name="email" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form3Example4c" class="form-label" style="color: #ae0505;">Password</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw" style="color: #ae0505;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" name="password" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #ae0505;">Register</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="https://img.freepik.com/vecteurs-libre/don-sang-humain-fond-blanc_1308-111266.jpg?t=st=1710713007~exp=1710716607~hmac=2623635d8706d9b41b64441c32ef29f12661ab9d6cf4013badf175304bae7747&w=900" class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section

@endsection
