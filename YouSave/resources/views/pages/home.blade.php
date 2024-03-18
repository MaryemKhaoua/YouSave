@extends('layouts.main')
@section('content')

<style>
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .left-side, .right-side {
        width: 100%;
        max-width: 500px; /* Adjust as needed */
    }

    /* Style for buttons */
    .buttons {
        margin-top: 20px;
    }

    .buttons button {
        margin-right: 10px;
        padding: 10px 20px;
        background-color: #fd2062;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        position: relative; /* Added for positioning the heart icon */
    }

    .buttons button:hover {
        background-color: #970707;
    }



    @media screen and (min-width: 768px) {
        .left-side, .right-side {
            width: 48%; /* Adjust as needed */
        }
    }
</style>

<div class="container">
    <div class="left-side">
        <h1>Sauvez des vies dès aujourd'hui</h1>
        <p>Chaque année, un million de vies sont sauvées grâce à votre générosité. En donnant votre sang, vous contribuez à sauver des vies et à faire une différence concrète. Que ce soit des plaquettes, du plasma ou même du sang placentaire, chaque don compte. Rejoignez-nous dans cette noble cause et faites partie du mouvement pour un monde meilleur</p>
        <div class="buttons">
            <button>Je donne mon sang <span class="heart-icon">&hearts;</span></button>
            <button id='btnS'>Besoin de sang</button>
        </div>
    </div>
    <div class="right-side">
        <img src="https://linatabara3.com/imgs/homeHeroImage.svg" alt="Image description" style="width: 100%; height: auto;">
    </div>
</div>

@endsection
