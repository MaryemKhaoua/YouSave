@extends('layouts.main')
@section('content')

<section>
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div>
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #ae0505;">Informations sur le groupe sanguin O+</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        O+ est le groupe sanguin le plus courant et peut être donné à n'importe quel receveur de Rh positif.
                                    </li>
                                    <li class="list-group-item">
                                        Les personnes avec le groupe sanguin O+ sont des donneurs universels de globules rouges pour les receveurs de Rh positif.
                                    </li>
                                    <li class="list-group-item">
                                        Les donneurs de sang avec le groupe sanguin O+ sont particulièrement utiles pour les dons de globules rouges, car ils peuvent être transfusés à la plupart des patients.
                                    </li>
                                    <li class="list-group-item">
                                        O+ est souvent en forte demande dans les situations d'urgence et les centres de transfusion sanguine.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="./../images/blood-typeOpos.png" class="img-fluid" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
