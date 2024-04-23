@extends('layouts.main')
@section('content')
<style>
    body {
        background-color: #fefefe;
    }
    .text-center{
        margin-top: 10em;
    }
    #srch{
        text-align: center;
        margin-top: 50px;
        color: #670505;
    }
</style>
    <div class="container mt-5">
        <h1 class="mb-4" id="srch">À propos de YouSave</h1>

        <div class="row" data-aos="flip-left">
            <div  class="col-md-6">
                <img src="./../images/apro1.jpg" alt="Image 1" class="img-fluid mb-3">
            </div>
            <div class="col-md-6 d-flex align-items-start">
                <div class="text-center">
                    <h2 id="srch">Qui sommes-nous :</h2>
                    <p>Une jeune fille marocaine, passionnée par la technologie et désireuse de faire une différence dans la société, a fondé YouSave. Après avoir été témoin de l'importance du don de sang et des défis associés à la collecte et à la distribution de sang, elle a décidé de créer une plateforme qui facilite le processus et sensibilise les gens à cette cause vitale.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4" data-aos="flip-left">
            <div class="col-md-6 order-md-2">
                <img src="./../images/apro2.jpg" alt="Image 2" class="img-fluid mb-3">
            </div>
            <div class="col-md-6 order-md-1 d-flex align-items-start">
                <div class="text-center">
                    <h2 id="srch">Notre motivation :</h2>
                    <p >Notre motivation réside dans notre conviction que chaque personne a le pouvoir de sauver des vies. Nous croyons en la générosité, en la solidarité et en l'impact positif que chaque don de sang peut avoir sur la vie d'une personne dans le besoin. C'est cette motivation qui nous pousse à continuer à développer YouSave et à étendre notre portée pour aider autant de personnes que possible.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4" data-aos="flip-left">
            <div class="col-md-6">
                <img src="./../images/apro3.jpg" alt="Image 3" class="img-fluid mb-3">
            </div>
            <div class="col-md-6 d-flex align-items-start">
                <div class="text-center">
                    <h2 id="srch">Notre vision :</h2>
                    <p>Notre vision est de créer un monde où personne ne souffre par manque de sang. Nous aspirons à éliminer les pénuries de sang, à sensibiliser le public à l'importance du don de sang régulier et à rendre le processus de don de sang aussi simple et pratique que possible pour tous. Avec YouSave, nous visons à bâtir une communauté de donneurs engagés qui sauvent des vies chaque jour.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
  </script>
@endsection
