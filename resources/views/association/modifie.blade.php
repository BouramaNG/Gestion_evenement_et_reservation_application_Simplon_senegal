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
   <style>
    
.navbar {
	color: #fff;
	background: #926dde !important;
	padding: 5px 16px;
	border-radius: 0;
	border: none;
	box-shadow: 0 0 4px rgba(0,0,0,.1);
}
.navbar img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin-right: 10px;
}
.navbar .navbar-brand {
	color: #efe5ff;
	padding-left: 0;
	padding-right: 50px;
	font-size: 24px;		
}
.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
	color: #fff;
}
.navbar .navbar-brand i {
	font-size: 25px;
	margin-right: 5px;
}
.search-box {
	position: relative;
}	
.search-box input {
	padding-right: 35px;
	min-height: 38px;
	border: none;
	background: #faf7fd;
	border-radius: 3px !important;
}
.search-box input:focus {		
	background: #fff;
	box-shadow: none;
}
.search-box .input-group-addon {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 10px 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .nav-item i {
	font-size: 18px;
}
.navbar .nav-item span {
	position: relative;
	top: 3px;
}
.navbar .navbar-nav > a {
	color: #efe5ff;
	padding: 8px 15px;
	font-size: 14px;		
}
.navbar .navbar-nav > a:hover, .navbar .navbar-nav > a:focus {
	color: #fff;
	text-shadow: 0 0 4px rgba(255,255,255,0.3);
}
.navbar .navbar-nav > a > i {
	display: block;
	text-align: center;
}
.navbar .dropdown-item i {
	font-size: 16px;
	min-width: 22px;
}
.navbar .dropdown-item .material-icons {
	font-size: 21px;
	line-height: 16px;
	vertical-align: middle;
	margin-top: -2px;
}
.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
	color: #fff;
	background: none !important;
}
.navbar .dropdown-menu {
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a {
	color: #777 !important;
	padding: 8px 20px;
	line-height: normal;
	font-size: 15px;
}
.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:focus {
	color: #333 !important;
	background: transparent !important;
}
.navbar .navbar-nav .active a, .navbar .navbar-nav .active a:hover, .navbar .navbar-nav .active a:focus {
	color: #fff;
	text-shadow: 0 0 4px rgba(255,255,255,0.2);
	background: transparent !important;
}
.navbar .navbar-nav .user-action {
	padding: 9px 15px;
	font-size: 15px;
}
.navbar .navbar-toggle {
	border-color: #fff;
}
.navbar .navbar-toggle .icon-bar {
	background: #fff;
}
.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
	background: transparent;
}
.navbar .navbar-nav .open .dropdown-menu {
	background: #faf7fd;
	border-radius: 1px;
	border-color: #faf7fd;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .divider {
	background-color: #e9ecef !important;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 350px;
		margin-left: 30px;
	}
}
@media (max-width: 1199px){
	.navbar .navbar-nav > a > i {
		display: inline-block;			
		text-align: left;
		min-width: 30px;
		position: relative;
		top: 4px;
	}
	.navbar .navbar-collapse {
		border: none;
		box-shadow: none;
		padding: 0;
	}
	.navbar .navbar-form {
		border: none;			
		display: block;
		margin: 10px 0;
		padding: 0;
	}
	.navbar .navbar-nav {
		margin: 8px 0;
	}
	.navbar .navbar-toggle {
		margin-right: 0;
	}
	.input-group {
		width: 100%;
	}
}
   </style>
  </head>
  <body class="d-flex flex-column h-100">
    
    <div class="container pt-4 pb-4">
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
	<a href="#" class="navbar-brand"><i class="fa fa-cube"></i>Brand<b>Name</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif		
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<div class="navbar-nav ml-auto">
			<a href="#" class="nav-item nav-link active"><i class="fa fa-home"></i><span>Home</span></a>
			<a href="#" class="nav-item nav-link"><i class="fa fa-gears"></i><span>Projects</span></a>
	
			<a href="{{route('all_reservation')}}" class="nav-item nav-link"><i class="fa fa-pie-chart"></i><span>List Reservation</span></a>
			<a href="#" class="nav-item nav-link"><i class="fa fa-envelope"></i><span>Messages</span></a>		
			<a href="#" class="nav-item nav-link"><i class="fa fa-bell"></i><span>Notifications</span></a>
			@if (Auth::check())
    <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action">
            <img src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar">
            {{ Auth::user()->name }} <b class="caret"></b>
        </a>
        <div class="dropdown-menu">
            <a href="{{ url('/profile') }}" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
            <a href="{{ url('/calendar') }}" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a>
            <a href="{{ url('/settings') }}" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a>
            <div class="divider dropdown-divider"></div>
           <form action="{{ route('logout') }}" method="post">
			@csrf 
			<button class="btn btn-success">Deconnexion</button>
		   </form>
        </div>
    </div>
@else
    <script>window.location = "{{ url('/login') }}";</script>
@endif
		</div>
	</div>
</nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
    <div class="modal-dialog">
		<div class="modal-content">
        <h1>Modification Info</h1>
        <form action="{{ route('update_event', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="libelle">Nom de l'événement</label>
                <input type="text" value="{{$event->libelle}}" class="form-control" id="libelle" name="libelle" placeholder="Entrez le nom de l'événement" required>
                <small class="form-text text-muted">Aide : Nom de l'événement.</small>
            </div>
            <div class="form-group">
                <label for="date_evenement">Date de l'événement</label>
                <input type="date" value="{{$event->date_evenement}}" class="form-control" id="date_evenement" name="date_evenement" required>
                <small class="form-text text-muted">Aide : Sélectionnez la date de l'événement.</small>
            </div>
            <div class="form-group">
                <label for="lieux">Lieu de l'événement</label>
                <input type="text" value="{{$event->lieux}}" class="form-control" id="lieux" name="lieux" placeholder="Entrez le lieu de l'événement" required>
                <small class="form-text text-muted">Aide : Lieu de l'événement.</small>
            </div>
            <div class="form-group">
                <label for="lieux">Choisir votre Logo</label>
                <input class="form-control" value="{{$event->photo}}" name="photo" type="file" id="multiImg">
                <small class="form-text text-muted">Aide : Choisir un image</small>
            </div>
           
            <div class="form-group">
                <label for="description">Description de l'événement</label>
                <textarea class="form-control" value="{{$event->description}}" id="description" name="description" rows="3" placeholder="Entrez une description de l'événement" required></textarea>
                <small class="form-text text-muted">Aide : Description de l'événement.</small>
            </div>
            <div class="form-group">
                <label for="date_limite_inscription">Date limite d'inscription</label>
                <input type="date" class="form-control" value="{{$event->date_limit_inscription}}" id="date_limite_inscription" name="date_limite_inscription" required>
                <small class="form-text text-muted">Aide : Sélectionnez la date limite d'inscription.</small>
            </div>
            <div class="form-group">
                <label for="closed">Statut</label>
                <select class="form-control" id="closed" value="{{$event->closed}}" name="closed">
                    <option value="ouvert">Ouvert</option>
                    <option value="fermé">Fermé</option>
                </select>
                <small class="form-text text-muted">Aide : Statut de l'événement.</small>
            </div>
            <div class="form-group">
                <label for="total_place">Nombre de places</label>
                <input type="number" class="form-control" value="{{$event->total_place}}" id="total_place" name="total_place" placeholder="Entrez le nombre de places" required>
                <small class="form-text text-muted">Aide : Nombre total de places disponibles.</small>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>
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