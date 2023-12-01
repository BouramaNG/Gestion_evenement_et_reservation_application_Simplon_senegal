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
                        <a class="nav-link" href="{{route('all_reservation')}}">Liste Reservation</a>
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
        <h1>Ajouter un événement</h1>
        <form action="{{ route('association.add_event') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="libelle">Nom de l'événement</label>
                <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Entrez le nom de l'événement" required>
                <small class="form-text text-muted">Aide : Nom de l'événement.</small>
            </div>
            <div class="form-group">
                <label for="date_evenement">Date de l'événement</label>
                <input type="date" class="form-control" id="date_evenement" name="date_evenement" required>
                <small class="form-text text-muted">Aide : Sélectionnez la date de l'événement.</small>
            </div>
            <div class="form-group">
                <label for="lieux">Lieu de l'événement</label>
                <input type="text" class="form-control" id="lieux" name="lieux" placeholder="Entrez le lieu de l'événement" required>
                <small class="form-text text-muted">Aide : Lieu de l'événement.</small>
            </div>
            <div class="form-group">
                <label for="lieux">Choisir votre Logo</label>
                <input class="form-control" name="photo" type="file" id="multiImg">
                <small class="form-text text-muted">Aide : Choisir un image</small>
            </div>
           
            <div class="form-group">
                <label for="description">Description de l'événement</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrez une description de l'événement" required></textarea>
                <small class="form-text text-muted">Aide : Description de l'événement.</small>
            </div>
            <div class="form-group">
                <label for="date_limite_inscription">Date limite d'inscription</label>
                <input type="date" class="form-control" id="date_limite_inscription" name="date_limite_inscription" required>
                <small class="form-text text-muted">Aide : Sélectionnez la date limite d'inscription.</small>
            </div>
            <div class="form-group">
                <label for="closed">Statut</label>
                <select class="form-control" id="closed" name="closed">
                    <option value="ouvert">Ouvert</option>
                    <option value="fermé">Fermé</option>
                </select>
                <small class="form-text text-muted">Aide : Statut de l'événement.</small>
            </div>
            <div class="form-group">
                <label for="total_place">Nombre de places</label>
                <input type="number" class="form-control" id="total_place" name="total_place" placeholder="Entrez le nombre de places" required>
                <small class="form-text text-muted">Aide : Nombre total de places disponibles.</small>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
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