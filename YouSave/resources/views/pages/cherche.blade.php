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
        color: #495057;
        font-size: 16px;
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
                    <p class="user-details">Ville: {{ $user->city->name }}</p>
                    <p class="user-details">Type de Sang: {{ $user->bloodType->type }}</p>
                    <p class="user-details">Téléphone: {{ $user->tele }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
