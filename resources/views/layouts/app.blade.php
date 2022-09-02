<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/daftar.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">

<!--===============================================================================================-->

</head>
<body>
	
	<div id="navbar-animmenu">
        <ul class="show-dropdown main-navbar">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
			
			
				<li {!! (Route::is('dashboard.index') ? 'class="active"' : '') !!}>
					<a href="{{ route('dashboard.index') }}"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
					{{-- <a href="javascript:void(0); {{ route('dashboard.index') }};"><i class="fas fa-tachometer-alt"></i>Dashboard</a> --}}
				</li>
				<li {!! (Route::is('daftarkosan.index') ? 'class="active"' : '') !!}>
					<a href="{{ route('daftarkosan.index') }}"><i class="far fa-address-book"></i>Daftar Kosan</a>
				</li>
				<li {!! (Route::is('contactperson.index') ? 'class="active"' : '') !!}>
					<a href="{{ route('contactperson.index') }}"><i class="far fa-clone"></i>Contact Person</a>	
				</li>
				<li>
					<li {!! (Route::is('profil.index') ? 'class="active"' : '') !!}>
					<a href="{{ route('profil.index') }}" ><i class="far fa-chart-bar"></i>Profil</a>
				</li>
					<li {!! (Route::is('loggingout') ? 'class="active"' : '') !!}>
						<form id="logout_form" action="{{ route('loggingout') }}" method="post">
							@csrf
							<a href="javascript:void(0); javascript:{}" onclick="document.getElementById('logout_form').submit(); return false;"><i class="far fa-chart-bar"></i>Logout</a>
						</form>
					</li>
				
            
            
        </ul>
    </div>

	

    <div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/main.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/listkosan.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    @yield('content')
	@include('sweetalert::alert')
</body>
</html>