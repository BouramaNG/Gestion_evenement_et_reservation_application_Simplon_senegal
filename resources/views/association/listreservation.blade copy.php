<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <title>Liste Reservation</title>
   
  </head>
  <body class="d-flex flex-column h-100">
    
  <div class="container pt-4 pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="#">Gestion ReserV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Acceuil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('liste_evenement')}}">Ajout Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                   
                </ul>
                @if(auth()->check())
    <!-- Utilisateur connecté -->
    <form class="form-inline my-2 my-md-0" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-link" type="submit">Déconnexion</button>
    </form>
@else
    <!-- Utilisateur non connecté -->
    <form class="form-inline my-2 my-md-0">
        <a class="btn btn-link" href="{{ route('login') }}">Connexion</a>
    </form>
@endif
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Listes des Evenement</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Reference</th>
                    <th scope="col">Nom Evenement</th>
                    <th scope="col">Client</th>
                    <th scope="col">Place Reserver</th>
                    <th scope="col">Status</th>
                    <th scope="col">Reservation Date</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                    <tr>
                    <th scope="row">{{$reservation->reference}}</th>
                    <th scope="row">{{$reservation->evenement_id ? $reservation->evenement->libelle :'Aucun evenement'}}</th>
                    <th scope="row">{{$reservation->user_id ? $reservation->user->name :'Aucun evenement'}}</th>
                    <th scope="row">{{$reservation->place_reserver}}</th>
                    <th scope="row">{{$reservation->status}}</th>
                    <th scope="row">{{$reservation->reservation_date}}</th>
                   
                   
                    
                    <td>
                    <div class="btn-group">
    <form action="{{ route('accepter_reservation', ['id' => $reservation->id]) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Accepter</button>
    </form>

    <form action="{{ route('refuser_reservation', ['id' => $reservation->id]) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Refuser</button>
    </form>
</div>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
      
    <footer class="footer mt-auto py-3">
        <div class="container pb-5">
            <hr>
            
        </div>
    </footer>

    
    <script src="{{asset('assets/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  </body>
</html>