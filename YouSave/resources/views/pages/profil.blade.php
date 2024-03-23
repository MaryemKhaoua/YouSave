@extends('layouts.main')

@section('content')
<style>
    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .profile-info {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .profile-info h2 {
        margin-bottom: 10px;
    }

    .profile-info p {
        margin-bottom: 5px;
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

<div class="container">
    <h1>Profil du YouSaver</h1>

    <div class="profile-info">
        <h2>Bonjour Maryem</h2>
        <p><strong>Nom:</strong> Maryem KHAOUA</p>
        <p><strong>Adresse:</strong> Safi, Maroc</p>
        <p><strong>Téléphone:</strong> +1234567890</p>
        <p><strong>Type de Sang:</strong> A+</p>
    </div>

    <button class="update-profile-btn">Mettre à jour le profil</button>
</div>
@endsection
