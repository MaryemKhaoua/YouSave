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
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #ae0505;">Informations sur le groupe sanguin B-</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        B- est moins fréquent que B+ mais constitue tout de même une proportion importante de la population.
                                    </li>
                                    <li class="list-group-item">
                                        Les patients avec le groupe sanguin B- peuvent recevoir du sang des groupes sanguins B- et O-.
                                    </li>
                                    <li class="list-group-item">
                                        Les donneurs de sang avec le groupe sanguin B- sont particulièrement utiles pour les dons de plasma.
                                    </li>
                                    <li class="list-group-item">
                                        Les personnes avec le groupe sanguin B- peuvent donner du sang à d'autres personnes avec le même groupe sanguin.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="./../images/blood-typeB-neg.png" class="img-fluid" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
