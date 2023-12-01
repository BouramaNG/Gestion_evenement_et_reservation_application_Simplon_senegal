<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .titre{
            background-color: chocolate;
        }
        h1{
            text-align: center;
        }
        .card img{
            width: 500px;
            height: 250px;
            
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #555;
        }
        .image img{
            height: 500px;
            width: 100%;
            margin-top: 40px;
          
        }
       .carousel-item img{
        height: 500px;
        margin-top: 20px;
       }
      .event h1{
        text-align: center;
        margin-top: 30px;
        font-weight: bold;
      }
      body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .carte {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            margin-top: 50px;
        }

        .card {
            width: 18rem;
            margin-bottom: 20px; 
            border-radius: 10px;
            box-shadow: 3px 3px 3px white;
        }
    </style>
</head>

<nav>
    <a href="#">Accueil</a>
    <a href="#">Événements</a>
    <a href="#">Contact</a>
    @if(Route::has('login'))
    @auth
<form action="{{route('logout')}}" method="post">
    @csrf
    <button class="btn btn-warning">Deconnexion</button>
</form>
    @else
    <a href="{{route('login')}}" class="btn btn-primary">Connexion</a>
    <a href="{{route('register')}}" class="btn btn-success">Inscription</a>
   
    <a href="{{route('become.association')}}" class="btn btn-warning">Devenir Association</a>
    @endauth
    @endif
</nav>
<body>
   <div class="titre">
   <h1>Details Evenement</h1>
   </div>
    <section class="d-flex justify-content-center align-items-center">
    <div class="card mb-3">
  <img src="{{ asset('public/image/' . $event->photo) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$event->libelle}}</h5>
    <p class="card-text">Description : {{$event->description}}</p>
    <h5 class="card-title">Location :{{$event->lieux}}</h5>
    <h5 class="card-title">Status : {{$event->closed}}</h5>
    <h5 class="card-title">Total Place : {{$event->total_place}} places</h5>
    <h5 class="card-title">Date Limite : {{$event->date_limite_inscription}}</h5>
    <h5 class="card-title">Publie par : {{$event->user_id ? $event->user->name : 'Utilisateur inconnu'}}</h5>
<a href="{{ route('reservation_event', ['evenement_id' => $event->id]) }}" class="btn btn-danger">Reservation</a>
  </div>
</div>

    </section>
</body>
</html>