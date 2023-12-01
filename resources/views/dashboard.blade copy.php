<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Menu</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
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
<body>

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

<section>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/about-bg.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h1>Bienvenue preparons votre Evenement</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/about-bg.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1>Bienvenue preparons votre Evenement</h1>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/about-bg.jpg')}}" class="d-block  w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1>Bienvenue preparons votre Evenement</h1>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<section>
    <div class="event">
<h1>Tout les evenment</h1>
    </div>
</section>

<section class="carte">
    @foreach($event as $events)
<div class="card" style="width: 18rem; height: 30rem;">
  <img src="{{ asset('public/image/' . $events->photo) }}" class="card-img-top overflow-hidden" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$events->libelle}}</h5>
    <h5 class="card-title">Date: {{$events->date_evenement}}</h5>
    <p class="card-text overflow-hidden" style="max-height: 10rem;">Description : {{$events->description}}</p>
    <h5 class="card-title">Lieux: {{$events->lieux}}</h5>
    <h5 class="card-title">Total Place: {{$events->total_place}}</h5>
    <h5 class="card-title">Publie Par: {{ $events->user_id ? $events->user->name : 'Utilisateur inconnu' }}</h5>
  <a href="{{route('details',['id'=>$events->id])}}" class="btn btn-primary">Voir Details</a>
  </div>
</div>
@endforeach




</section>
</body>
</html>
