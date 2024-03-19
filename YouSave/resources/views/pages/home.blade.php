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
        max-width: 500px;
    }

    .buttons {
        margin-top: 20px;
    }

    .buttons button {
        margin-right: 10px;
        padding: 10px 20px;
        background-color: #f12a2a;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        position: relative;
    }

    .buttons button:hover {
        background-color: #970707;
    }

    .benif{
        text-align: center;
        margin-top: 50px;
        color: #670505;
    }
    #benif{
        text-align: center;
        font-size: 1em;
    }

    .benif-container {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .benif-icon {
        margin-right: 20px;
        font-size: 24px;
        color: #28a745;
    }

    .benif-text {
        flex-grow: 1;
    }

    @media screen and (min-width: 768px) {
        .left-side, .right-side {
            width: 48%;
        }
    }

    img {
        max-width: 100%;
        height: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }

    .blood-group-column {
        font-weight: bold;
    }

    .compatible-icon {
        color: #28a745;
    }

    .blood-type-shape {
        width: 60px;
        height: 60px;
        border-radius:100% 0% 100% 100%;
        background-color: #fd2020;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        cursor: pointer;
        color: #fff;
        font-size: 1.2em;
    }
    .blood{
        text-align: center;
        margin-bottom: 2em;
    }

</style>
<main>
    <section>
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
                <img src="https://linatabara3.com/imgs/homeHeroImage.svg" alt="Image description">
            </div>
        </div>
    </section>
    <section>
        <h2 class="benif">Les bienfaits du don de sang pour la santé</h2>
        <p id="benif">Faites du bien à votre santé en donnant votre sang !</p>
        <div class="container">
            <div class="left-side">
                <img src="https://img.freepik.com/vecteurs-libre/femme-donneuse-sang-poche-sang-bandage-platre_1308-129877.jpg?t=st=1710792104~exp=1710795704~hmac=7a1933392bbe97f7e66ae4e6cc089518b9a5837adb963bb3d6dc7e70e2c1346a&w=740" alt="Don de sang">
            </div>
            <div class="right-side">
                <div class="benif-container">
                    <div class="benif-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="benif-text">
                        <p>Augmente la production de nouveaux globules rouges</p>
                    </div>
                </div>
                <div class="benif-container">
                    <div class="benif-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="benif-text">
                        <p>Réduit le risque de maladies cardiovasculaires</p>
                    </div>
                </div>
                <div class="benif-container">
                    <div class="benif-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="benif-text">
                        <p>Renouvelle le sang et aide à maintenir sa qualité</p>
                    </div>
                </div>
                <div class="benif-container">
                    <div class="benif-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="benif-text">
                        <p>Stimule la production d'anticorps et renforce le système immunitaire</p>
                    </div>
                </div>
                <div class="benif-container">
                    <div class="benif-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="benif-text">
                        <p>Diminue le risque de cancer lié au fer</p>
                    </div>
                </div>
                <div class="benif-container">
                    <div class="benif-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="benif-text">
                        <p>Contribue à une meilleure santé mentale en aidant les autres</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="benif">Les patients que votre groupe sanguin peut aider</h2>
        <p id="benif">Le groupe sanguin du donneur</p>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th class="blood-group-column"></th>
                        <th>A+</th>
                        <th>A-</th>
                        <th>B+</th>
                        <th>B-</th>
                        <th>AB+</th>
                        <th>AB-</th>
                        <th>O+</th>
                        <th>O-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A+</td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                        <td></td>
                        <td><i class="fas fa-check-circle compatible-icon"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section>
        <h2 class="benif">Inventaire sanguin actuel</h2>
        <p id="benif">De nombreuses variables peuvent avoir un impact sur notre inventaire comme la météo,<br> les vacances ou les événements tragiques.<br> Vous trouverez ci-dessous un aperçu de nos niveaux de stocks pour tous les groupes sanguins.</p>
        <div >
            <div class="blood">
                <a href="{{ route('aplus.page') }}">
                    <div class="blood-type-shape" title="A+">A+</div>
                </a>

                <a href="{{ route('amoins.page') }}">
                    <div class="blood-type-shape" title="A-">A-</div>
                </a>

                <a href="{{ route('bplus.page') }}">
                    <div class="blood-type-shape" title="B+">B+</div>
                </a>

                <a href="{{ route('bmoins.page') }}">
                    <div class="blood-type-shape" title="B-">B-</div>
                </a>

                <a href="{{ route('abplus.page') }}">
                    <div class="blood-type-shape" title="AB+">AB+</div>
                </a>

                <a href="{{ route('abmoins.page') }}">
                    <div class="blood-type-shape" title="AB-">AB-</div>
                </a>

                <a href="{{ route('oplus.page') }}">
                    <div class="blood-type-shape" title="O+">O+</div>
                </a>

                <a href="{{ route('omoins.page') }}">
                    <div class="blood-type-shape" title="O-">O-</div>
                </a>

            </div>
        </div>
    </section>
</main>

@endsection