<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="manifest" href="/manifest.json">
	<link rel="shortcut icon" href="http://epmc.gob.ec/front/img/assets/preloader-logo.png" type="image/x-icon">
	<title>Directivo | EPMC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Stlylesheet -->
	<link href="http://epmc.gob.ec/front/css/style.css" rel="stylesheet" type="text/css" />

	<!-- Skin Color -->
	<link rel="stylesheet" href="http://epmc.gob.ec/front/css/colors/red.css" id="color-skins" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159218650-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-159218650-1');
	</script>

	<style>
		.header {
			width: 100%;
			height: 100px;
			position: fixed;
			top: 0;
			left: 0;
		}

		.container {
			width: 90%;
			max-width: 1200px;
			margin: auto;
		}

		.container .btn-menu,
		.logo {
			float: left;
			line-height: 100px;
		}

		.container .btn-menu label {
			color: #fff;
			font-size: 25px;
			cursor: pointer;
		}

		.logo h1 {
			color: #fff;
			font-weight: 400;
			font-size: 22px;
			margin-left: 10px;
		}

		.container .menu {
			float: right;
			line-height: 100px;
		}

		.container .menu a {
			display: inline-block;
			padding: 15px;
			line-height: normal;
			text-decoration: none;
			color: #fff;
			transition: all 0.3s ease;
			border-bottom: 2px solid transparent;
			font-size: 15px;
			margin-right: 5px;
		}

		.container .menu a:hover {
			border-bottom: 2px solid #c7c7c7;
			padding-bottom: 5px;
		}

		/*Fin de Estilos para el encabezado*/



		/*Estilos de footer*/
		#footer {

			background-color: #272727;
		}

		#pie {
			background-color: #000000;
		}
	</style>

	<style>
		body {
			font-family: 'Nunito', sans-serif;
		}
	</style>

	<style>
		.dropbtn {
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
			text-decoration: none;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: relative;
			background-color: #f1f1f1;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {
			background-color: #ddd;
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}
	</style>
</head>


<body>

	<!-- Start Preloader -->
	<div id="preloader">
		<div class="loader">
			<img src="http://epmc.gob.ec/front/img/assets/preloader-logo.png" alt="EPMC">
		</div>
	</div>
	<!-- End Preloader -->

	<header>
		<div class="px-3 py-2 bg-dark text-white">

			<div class="container">
				<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
					<div class="btn-menu">
						<label for="btn-menu"><img src="http://epmc.gob.ec/front/img/assets/logo-negro.png" class="img-fluid" alt="..." width="400" height="80"></label>
					</div>
					<a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
						<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
							<use xlink:href="#bootstrap" />
						</svg>
					</a>

					<ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
						<li>
							<a href="{{route('home')}}" class="nav-link text-white">
								<svg class="bi d-block mx-auto mb-1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
									<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
								</svg>
								Inicio
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropbtn">
								<svg class="bi d-block mx-auto mb-1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
									<path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
								</svg>
								Institución
							</a>
							<div class="dropdown-content">
								<a href="{{route('quienes-somos')}}">Quienes Somos</a>
								<a href="{{route('Administrativo')}}">Equipo Administrativo</a>
								<a href="{{route('Directivo')}}">Equipo Directivo</a>
							</div>
						</li>
						<li class="dropdown">
							<a href="#" class="dropbtn">
								<svg class="bi d-block mx-auto mb-1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
									<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
								</svg>
								Transparencia
							</a>
							<div class="dropdown-content">
								<a href="#">LOTAIP</a>
								<a href="{{'Publicaciones'}}">PUBLICACIONES</a>
								<a href="#">RESOLUCIONES</a>
								<a href="#">RENDICIÓN DE CUENTAS 2019</a>
								<a href="#">AUTORIZACIÓN PARA RENOVACIÓN ANUAL DE MATRÍCULA</a>
								<a href="#">SOLICITUD DE COTIZACIÓN</a>
								<a href="#">PAC</a>
								<a href="#">PAC REFORMAS</a>
								<a href="#">ESTADOS FINANCIEROS</a>
							</div>

						</li>
						<li>
							<a href="#" class="nav-link text-white">
								<svg class="bi d-block mx-auto mb-1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
									<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
								</svg>
								Informate
							</a>
						</li>
						<li>
							<a href="#" class="nav-link text-white">
								<svg class="bi d-block mx-auto mb-1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
									<path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
									<path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
									<path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
								</svg>
								Servicios
							</a>
						</li>
						<li>
							<a href="https://www.facebook.com/Movilidad-Cotopaxi-Epmc-109619743719632" class="nav-link text-white">
								<svg class="bi d-block mx-auto mb-1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
									<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
								</svg>
								Facebook
							</a>
						</li>
						<li>
							<a href="https://twitter.com/epmc2017" class="nav-link text-white">
								<svg class="bi d-block mx-auto mb-1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
									<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
								</svg>
								Twitter
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<div class="site-wrapper content">

		<section id="breadcrumb">
			<div class="container">

				<ul class="breadcrumb">
					<li><a href="{{'home'}}" title="Inicio">Inicio</a></li>
					<li><a href="{{'quienes-somos'}}" title="Institución">Institución</a></li>
					<li>Directorio</li>
				</ul>

			</div>
		</section>

		<!-- Start Team Section -->
		<section id="team">
			<div class="container">

				<div class="col-md-12 text-center wow fadeInUp">
					<h3 class="section-title">Directorio de la EPMC</h3>
					<p class="subheading">Conoce a los miembros del directorio</p>
				</div>

				<div class="row">
					<div class="col-md-4 col-sm-4 team-member">
						<div class="effect effects wow fadeInUp">
							<div class="img">
								<img src="http://epmc.gob.ec/team/WILLIAN_NARANJO.jpg" class="img-responsive" alt="Willan Naranjo" />
								<div class="overlay">
									<ul class="expand">
										<li class="social-icon"><a href="https://www.salcedo.gob.ec/" target="blank"><i class="icon-paper-plane"></i></a></li>
									</ul>
									<a class="close-overlay hidden">x</a>
								</div>
							</div>
						</div>
						<div class="member-info wow fadeInUp">
							<h4>Willan Naranjo</h4>
							<h5 class="highlight">Miembro del Directorio</h5>
							<p>Alcalde del Cantón Salcedo 2019-2023</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 team-member">
						<div class="effect effects wow fadeInUp">
							<div class="img">
								<img src="http://epmc.gob.ec/team/LUIS_UGSHA.jpg" class="img-responsive" alt="Luis Ugsha" />
								<div class="overlay">
									<ul class="expand">
										<li class="social-icon"><a href="https://www.municipiopujili.gob.ec/pujili/" target="blank"><i class="icon-paper-plane"></i></a></li>
									</ul>
									<a class="close-overlay hidden">x</a>
								</div>
							</div>
						</div>
						<div class="member-info wow fadeInUp">
							<h4>Luis Ugsha</h4>
							<h5 class="highlight">Miembro del Directorio</h5>
							<p>Alcalde del Cantón Pujilí 2019-2023</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 team-member">
						<div class="effect effects wow fadeInUp">
							<div class="img">
								<img src="http://epmc.gob.ec/team/JAVIER_VELASQUEZ.jpg" class="img-responsive" alt="Javier Velásquez" />
								<div class="overlay">
									<ul class="expand">
										<li class="social-icon"><a href="https://saquisili.gob.ec/" target="blank"><i class="icon-paper-plane"></i></a></li>
									</ul>
									<a class="close-overlay hidden">x</a>
								</div>
							</div>
						</div>
						<div class="member-info wow fadeInUp">
							<h4>Javier Velásquez</h4>
							<h5 class="highlight">Miembro del Directorio</h5>
							<p>Alcalde del Cantón Saquisilí 2019-2023</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 team-member">
						<div class="effect effects wow fadeInUp">
							<div class="img">
								<img src="http://epmc.gob.ec/team/HIPOLITO_CARRERA.jpg" class="img-responsive" alt="Hipólito Carrera" />
								<div class="overlay">
									<ul class="expand">
										<li class="social-icon"><a href="http://lamana.gob.ec/" target="blank"><i class="icon-paper-plane"></i></a></li>
									</ul>
									<a class="close-overlay hidden">x</a>
								</div>
							</div>
						</div>
						<div class="member-info wow fadeInUp">
							<h4>Hipólito Carrera</h4>
							<h5 class="highlight">Presidente del Directorio</h5>
							<p>Alcalde del Cantón La Maná 2019-2023</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 team-member">
						<div class="effect effects wow fadeInUp">
							<div class="img">
								<img src="http://epmc.gob.ec/team/HUGO_ARGUELLO.jpg" class="img-responsive" alt="Hugo Arguello" />
								<div class="overlay">
									<ul class="expand">
										<li class="social-icon"><a href="https://www.gadmsigchos.gob.ec/" target="blank"><i class="icon-paper-plane"></i></a></li>
									</ul>
									<a class="close-overlay hidden">x</a>
								</div>
							</div>
						</div>
						<div class="member-info wow fadeInUp">
							<h4>Hugo Arguello</h4>
							<h5 class="highlight">Miembro del Directorio</h5>
							<p>Alcalde del Cantón Sigchos 2019-2023</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 team-member">
						<div class="effect effects wow fadeInUp">
							<div class="img">
								<img src="http://epmc.gob.ec/team/SAUL_MEJIA.jpg" class="img-responsive" alt="Saúl Mejía" />
								<div class="overlay">
									<ul class="expand">
										<li class="social-icon"><a href="https://pangua.gob.ec/index.php/home" target="blank"><i class="icon-paper-plane"></i></a></li>
									</ul>
									<a class="close-overlay hidden">x</a>
								</div>
							</div>
						</div>
						<div class="member-info wow fadeInUp">
							<h4>Saúl Mejía</h4>
							<h5 class="highlight">Miembro del Directorio</h5>
							<p>Alcalde del Cantón Pangua 2019-2023</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Section -->;

		<!-- Start Back To Top -->
		<a id="back-to-top"><i class="icon ion-chevron-up"></i></a>
		<!-- End Back To Top -->

	</div> <!-- End Site Wrapper -->


	<!-- jQuery -->
	<script src="http://epmc.gob.ec/front/js/plugins/jquery.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/moderniz.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/smoothscroll.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/revslider.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/bootstrap.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/waypoints.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/parallax.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/easign1.3.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/cubeportfolio.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/owlcarousel.min.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBCT_YSl_vNgxGOsCdJvOGlbIe0_9K_MA4&sensor=false&amp;language=es"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/gmap3.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/wow.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/plugins/counterup.min.js"></script>
	<script src="http://epmc.gob.ec/front/js/scripts.js"></script>

	<script src="http://epmc.gob.ec/front/js/plugins/masonry.js"></script>
	<script>
		var msnry = new Masonry('#masonry', {
			// options
		});
	</script>
</body>

</html>