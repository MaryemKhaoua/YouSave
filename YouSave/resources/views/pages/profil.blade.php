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
                        <img src="https://img.freepik.com/photos-gratuite/portrait-belle-jeune-femme-coiffure-elegante-lunettes_1142-40217.jpg?t=st=1711244510~exp=1711248110~hmac=cc70f1f2114f995b5fa759bf0874a5c729ee9487e3da02b531a4fca42a2868b5&w=740"
                            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{ $user->nom }} {{ $user->prenom }}</h5>
                        <p class="text-muted mb-1">Donateur</p>
                        <p class="text-muted mb-4">{{ $user->city->name }}</p>
                        <button class="update-profile-btn">Mettre à jour le profil</button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
