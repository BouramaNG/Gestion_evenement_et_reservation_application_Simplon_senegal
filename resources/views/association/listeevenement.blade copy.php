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

    <title>List of User</title>
   
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
                    <th scope="col">Association</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Date Evenement</th>
                    <th scope="col">Lieux</th>
                    <th scope="col">Description</th>
                    <th scope="col">Closed</th>
                    <th scope="col">Date Limite</th>
                    <th scope="col">Total Place</th>
                    <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                    
                    <th scope="row">{{$event->libelle}}</th>
                    <th scope="row">{{$event->date_evenement}}</th>
                    <th scope="row">{{$event->lieux}}</th>
                    <th scope="row">{{$event->description}}</th>
                    <th scope="row">{{$event->closed}}</th>
                    <th scope="row">{{$event->date_limite_inscription}}</th>
                    <th scope="row">{{$event->total_place}}</th>
                    <th scope="row"><img src="{{ asset('public/image/' . $event->photo) }}" alt="Event Image" style="max-width: 50px;"></th>
                    <td>
                    <div class="btn-group">
  
                            <a href="{{route('update_event',['id'=>$event->id])}}" class="btn btn-outline-success">Modifier</a>
                            <button class="btn btn-warning"> <a href="{{ route('delete_event', ['id' => $event->id]) }}" class="btn btn-warning">Supprimer</a>
</button>
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