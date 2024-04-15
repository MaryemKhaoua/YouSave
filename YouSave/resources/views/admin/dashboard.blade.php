@extends('layouts.main')

@section('content')
<style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        header {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .container-fluid {
            display: flex;
            height: 95vh;
        }

        .aside {
            width: 200px;
            background-color: #dc3545; /* Red color associated with blood */
            color: white;
            padding: 20px;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        aside li a {
            text-decoration: none;
            color: white;
        }

        aside li {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: .3s;
        }

        aside li:hover {
            background-color: #c82333;
        }

        aside li:hover a {
            color: #ffffff;
        }
        #mym {
            background-color :#5D0E41;
        }
        .card-container {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }

    .card {
        flex-basis: 45%;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(8, 94, 222, 0.1);
    }

    .card-title {
        font-size: 1.2em;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .card-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card-number {
        font-size: 2em;
        font-weight: bold;
    }

    .user-card {
        background-color: #5e72e4;
        color: white;
    }

    .citie-card {
        background-color: #f5365c;
        color: white;
    }

    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <div class="container-fluid">
        <aside id="mym"  class="col-md-2 text-light p-4 aside">
            <ul class="list-unstyled">
                <li><h5>dashboard</h5></li>
                <li><a href="">BLOOD TYPES</a></li>
                <li><a href="{{ route('cities.index') }}">CITIES</a></li>
                <li><a href="">USERS</a></li>
                <li><a href="">STATISTIQUES</a></li>
            </ul>
        </aside>

    <div class="col-md-10">
        <h1 id="st">STATISTICS</h1>
        <div class="card-container">
            <div class="card user-card">
                <div class="card-title">Users</div>
                <div class="card-content">
                    <div>Total Users</div>
                    <div class="card-number"></div>
                </div>
            </div>
            <div class="card citie-card">
                <div class="card-title">Cities</div>
                <div class="card-content">
                    <div>Total Cities</div>
                    <div class="card-number"></div>
                </div>
            </div>
        </div>
   <!-- Canvas pour le graphique -->
   <canvas id="myChart" width="400" height="400"></canvas>

   <!-- Script pour initialiser le graphique -->
   <script>
       // Données du graphique
       var data = {
           labels: ["Users", "Cities"],
           datasets: [{
               label: 'Statistics',
               data: [/* Insérez ici les données */],
               backgroundColor: [
                   'rgba(255, 99, 132, 0.2)',
                   'rgba(54, 162, 235, 0.2)'
               ],
               borderColor: [
                   'rgba(255, 99, 132, 1)',
                   'rgba(54, 162, 235, 1)'
               ],
               borderWidth: 1
           }]
       };

       // Options du graphique
       var options = {
           scales: {
               yAxes: [{
                   ticks: {
                       beginAtZero: true
                   }
               }]
           }
       };

       // Créer le graphique
       var ctx = document.getElementById('myChart').getContext('2d');
       var myChart = new Chart(ctx, {
           type: 'bar',
           data: data,
           options: options
       });
   </script>
</div>
</div>
@endsection
