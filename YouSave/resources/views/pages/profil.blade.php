@extends('layouts.main')

@section('content')

<style>
    .profile-container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        text-align: center;
        margin-bottom: 20px;
        color: #333333;
    }

    .profile-info p {
        color: #555555;
    }

    .update-profile-btn {
        background-color: #ec2742;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .update-profile-btn:hover {
        background-color: #e42706;
    }
</style>

<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        @if ($user->genre == "Femme")
                            <img src="./../images/profilF.avif" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        @else
                            <img src="./../images/homme.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        @endif
                        <h5 class="my-3">{{ $user->nom }} {{ $user->prenom }}</h5>
                        <p class="text-muted mb-1">Donateur</p>
                        <p class="text-muted mb-4">{{ $user->city->name }}</p>
                        <button type="button" class="update-profile-btn" data-toggle="modal" data-target="#updateProfileModal">
                            Mettre à jour le profil
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $user->nom }} {{ $user->prenom }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $user->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Mobile</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $user->tele }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $user->city->name }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Genre</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $user->genre }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Type de sang</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->bloodType->type}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Disponibilité</p>
                            </div>
                            <div class="col-sm-9">
                                @if($user->disponibility == 1)
                                <i class="fas fa-check-circle text-success"></i> Disponible
                            @else
                                <i class="fas fa-times-circle text-danger"></i> Pas Disponible
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="updateProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateProfileModalLabel">Mettre à jour le profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateProfileForm" action="{{ route('update.profile') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->nom }}">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $user->prenom }}">
                    </div>
                    <div class="form-group">
                        <label for="tele">Telephone</label>
                        <input type="text" class="form-control" id="tele" name="tele" value="{{ $user->tele }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <select name="genre" id="genre" class="form-select">
                            <option value="{{ $user->genre }}" selected>{{ $user->genre }}</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>


                    </div>
                    <div class="form-group">
                        <label for="city">Ville</label>
                        <select name="city_id" id="city" class="form-select">
                            <option value="{{ $user->city->id }}" selected>{{ $user->city->name }}</option>
                            @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="blood_type">Type de sang</label>
                        <select name="blood_type_id" id="blood_type" class="form-select">
                            <option value="{{ $user->bloodType->id }}" selected>{{ $user->bloodType->type }}</option>
                            @foreach($bloods as $blood)
                            <option value="{{ $blood->id }}">{{ $blood->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="disponibility">Disponibilité</label>
                        <select name="disponibility" id="disponibility" class="form-select">
                            <option value="1" {{ $user->disponibility == 1 ? 'selected' : '' }}>Oui</option>
                            <option value="0" {{ $user->disponibility == 0 ? 'selected' : '' }}>Pas maintenant</option>
                        </select>
                    </div>

                    </div>
                    <button type="submit" > Enregistrer</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>

@endsection
