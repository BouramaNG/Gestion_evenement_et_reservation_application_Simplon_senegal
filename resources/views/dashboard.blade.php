<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
       






        .carousel {
	margin: 30px 0;
    background: #ccc;
  	position: relative;
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.carousel:after {
	content: "";
    position: absolute;
    z-index: -1;
    box-shadow: 0 0 20px rgba(0,0,0,0.8);
    height: 60px;
    bottom: 0px;
    left: 10px;
    right: 10px;
    border-radius: 100px / 20px;
}
.carousel .item {
    text-align: center;
	overflow: hidden;
    height: 475px;
}
.carousel .item img {
	max-width: 100%;
    margin: 0 auto; /* Align slide image horizontally center in Bootstrap v3 */
}
.carousel .carousel-control {
	width: 50px;
    height: 50px;
    background: #000;
    margin: auto 0;
	opacity: 0.8;
}
.carousel .carousel-control:hover {
	opacity: 0.9;
}
.carousel .carousel-control i {
    font-size: 41px;
}
.carousel-caption h3, .carousel-caption p {
	color: #fff;
	display: inline-block;
	font-family: 'Oswald', sans-serif;
	text-shadow: none;
	margin-bottom: 20px;
}
.carousel-caption h3 {
	background: rgba(0,0,0,0.9);
	padding: 12px 24px;
	font-size: 40px;	
	text-transform: uppercase;
}
.carousel-caption p {
	background: #8fc93c;
	padding: 10px 20px;
	font-size: 20px;
	font-weight: 300;
}
.carousel-action {
	padding: 10px 0 30px;
}
.carousel-action .btn {
	min-height: 34px;
	border-radius: 0;
	margin: 3px;
	min-width: 150px;
	text-transform: uppercase;
	font-family: 'Oswald', sans-serif;
}
.carousel-action .btn-primary {
	border-color: #000;
	background: none;
	color: #000;
}
.carousel-action .btn-primary:hover {
	background: #000;
	color: #fff;
}
.carousel-action .btn-success {
	background: #8fc93c;
	border: none;
}
.carousel-action .btn-success:hover {
	background: #87bd35;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 11px;
	height: 11px;
	border-radius: 50%;
	margin: 1px 6px;
}
.carousel-indicators li {
	background: transparent;
	border: 1px solid #fff;
}
.carousel-indicators li.active {
	background: #8fc93c;
	border-color: #8fc93c;
}











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






        h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	border-radius: 1px;
	background: #7ac400;
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #747d89;
	min-height: 325px;
	text-align: center;
	overflow: hidden;
}
.carousel .thumb-wrapper {
	padding: 25px 15px;
	background: #fff;
	border-radius: 6px;
	text-align: center;
	position: relative;
	box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.carousel .item .img-box {
	height: 120px;
	margin-bottom: 20px;
	width: 100%;
	position: relative;
}
.carousel .item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
	margin-bottom: 5px;
}
.carousel .thumb-content .btn {
	color: #7ac400;
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
	background: none;
	border: 1px solid #7ac400;
	padding: 6px 14px;
	margin-top: 5px;
	line-height: 16px;
	border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
	color: #fff;
	background: #7ac400;
	box-shadow: none;
}
.carousel .thumb-content .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	opacity: 0.7;
	margin-right: 5px;
}
.carousel-control-prev, .carousel-control-next {
	height: 44px;
	width: 40px;
	background: #7ac400;	
	margin: auto 0;
	border-radius: 4px;
	opacity: 0.8;
}
.carousel-control-prev:hover, .carousel-control-next:hover {
	background: #78bf00;
	opacity: 1;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: #fff;
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -2px;
}
.carousel-control-next i {
	margin-right: -4px;
}		
.carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border: none;
}
.carousel-indicators li {	
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {	
	background: rgba(0, 0, 0, 0.6);
}
.carousel .wish-icon {
	position: absolute;
	right: 10px;
	top: 10px;
	z-index: 99;
	cursor: pointer;
	font-size: 16px;
	color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
	color: #ff6161;
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}









</style>
</head>
<body>

<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
    <a href="{{ route('dashboard') }}" class="navbar-brand"><i class="fa fa-cube"></i>Sen<b>ReserV</b></a>  		
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
	<form class="navbar-form form-inline" action="{{ route('search') }}" method="get">
    <div class="input-group search-box">								
        <input type="text" name="query" id="search" class="form-control" placeholder="Rechercher...">
        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" name="filter_name" id="filter_name">
        <label class="form-check-label" for="filter_name">Nom</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" name="filter_location" id="filter_location">
        <label class="form-check-label" for="filter_location">Lieu</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" name="filter_association" id="filter_association">
        <label class="form-check-label" for="filter_association">Association</label>
    </div>
    <button type="submit" class="btn btn-primary">Rechercher</button>
</form>

        <div class="navbar-nav ml-auto">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-home"></i><span>Home</span></a>

            <a href="{{ route('historique') }}" class="nav-item nav-link"><i class="fa fa-envelope"></i><span>Historique</span></a>		
            <a href="#" class="nav-item nav-link"><i class="fa fa-bell"></i><span>Notifications</span></a>
            <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action">
                    @auth
                        <img src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar">
                        {{ Auth::user()->name }}
                    @else
                        <i class="material-icons">&#xE7FD;</i> Connexion
                    @endauth
                    <b class="caret"></b>
                </a>
                <div class="dropdown-menu">
                    @auth
                        <div class="divider dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Deconnexion</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="dropdown-item"><i class="material-icons">&#xE7FD;</i> Connexion</a>
                        <a href="{{ route('register') }}" class="dropdown-item"><i class="material-icons">&#xE7FD;</i> Inscription</a>
                        <a href="{{ url('become_association') }}" class="dropdown-item"><i class="material-icons">&#xE7FD;</i> Become Association</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
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


<section class="carte">
<div class="container-xl">
	<div class="row">
		<div class="col-md-12">
			<h2>Tout Les <b>Evenements</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
          @foreach($event as $events)
						<div class="col-md-4 mb-4">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
                <img src="{{ asset('public/image/' . $events->photo) }}" class="card-img-top overflow-hidden" alt="...">
								</div>
								<div class="thumb-content">
                <h5 class="card-title">{{$events->libelle}}</h5>
    <h5 class="card-title">Date: {{$events->date_evenement}}</h5>
    <p class="card-text overflow-hidden" style="max-height: 10rem;">Description : {{$events->description}}</p>
    <h5 class="card-title">Lieux: {{$events->lieux}}</h5>
    <h5 class="card-title">Publie Par: {{ $events->user_id ? $events->user->name : 'Utilisateur inconnu' }}</h5>
  <a href="{{route('details',['id'=>$events->id])}}" class="btn btn-primary">Voir Details</a>
  <a href="{{ route('qrcode', ['event' => $events->libelle]) }}" class="btn btn-primary" target="_blank">Voir le QR Code</a>

								</div>						
							</div>
						</div>
            @endforeach
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>



</section>


</body>
</html>
