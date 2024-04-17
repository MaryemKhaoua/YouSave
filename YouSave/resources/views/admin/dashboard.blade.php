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
            background-color: #dc3545;
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
        }

        aside li:hover {
            background-color: #c11717;
        }

        aside li:hover a {
            color: #ffffff;
        }
        #mym {
            background-color :#f63b3b;
            height: auto;


        }
        #st{
            color: #7a1e1e;
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
        <center> <h1 id="st">STATISTIQUES</h1></center>

        <div class="card-container">
            <div class="card user-card">
                <div class="card-title">Users</div>
                <div class="card-content">
                    <div>Total Users</div>
                    <div class="card-number">{{ $userCount }}</div>
                </div>
            </div>
            <div class="card citie-card">
                <div class="card-title">Cities</div>
                <div class="card-content">
                    <div>Total Cities</div>
                    <div class="card-number">{{ $cityCount }}</div>
                </div>
            </div>
        </div>


        {{-- chart --}}

            <canvas width="500"  id="myChart"></canvas>

   <!-- Script pour initialiser le graphique -->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  var ctx = document.getElementById("myChart").getContext('2d');

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai"],
        datasets: [{
            data: [500,	50,	2424,	14040], // Specify the data values array

            borderColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color border
            backgroundColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color background (Points and Fill)
            borderWidth: 1 // Specify bar border width
        }]},
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height
    }
});
</script>



{{-- <canvas width="500" id="myChart"></canvas>

        <script>
            var ctx = document.getElementById("myChart").getContext('2d');

            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: {!! json_encode($cityLabels) !!},
                    datasets: [{
                        data: {!! json_encode($cityData) !!},
                        borderColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'],
                        backgroundColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        </script> --}}
</div>
</div>
@endsection
