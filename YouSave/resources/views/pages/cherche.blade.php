@extends('layouts.main')

@section('content')
<style>
    .blood-donation-heading {
        color: #ae0505;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .user-card {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .user-name {
        color: #ae0505;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .user-details {
        color: #591f1f;
        font-size: 16px;
        font-weight: bolder;
        margin-bottom: 5px;
    }
    .spn{
        font-weight: bold;
        color: #1f0303;

    }

    .icon-phone {
        color: green;
    }

    .icon-type {
        color: red;
    }

    .icon-city {
        color: rgb(112, 49, 49);
    }
</style>

<div class="container mt-5">
    <h1 class="blood-donation-heading">Trouvez des donneurs près de vous</h1>
    <div class="row">
        @foreach($users as $user)
        <div class="col-md-4 mb-4">
            <div class="user-card">
                <div class="user-info">
                    <h5 class="user-name">{{ $user->nom }} {{ $user->prenom }}</h5>
                    <p class="user-details"><i class="fas fa-map-marker-alt icon icon-city"></i>  <span class="spn">Ville:</span> {{ $user->city->name }}</p>
                    <p class="user-details"><i class="fas fa-tint icon icon-type"></i>  <span class="spn">Type de Sang:</span> {{ $user->bloodType->type }}</p>
                    <p class="user-details"><i class="fas fa-phone icon icon-phone"></i>  <span class="spn">Téléphone:</span> {{ $user->tele }}</p>
                    <p class="user-details">
                        @if($user->disponibility == 1)
                            <i class="fas fa-check-circle text-success"></i> Disponible
                        @else
                            <i class="fas fa-times-circle text-danger"></i> Pas Disponible
                        @endif
                    </p>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
