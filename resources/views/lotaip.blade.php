<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<link rel="icon" href="../images/descarga.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Empresa Pública de Movilidad Mancomunidad de Cotopaxi" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>TURNOS | EPMC</title>
    <link rel="shortcut icon" href="http://epmc.gob.ec/front/img/assets/preloader-logo.png" type="image/x-icon">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@232&family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
	<!-- Stlylesheet -->
	<link href="http://epmc.gob.ec/front/css/style.css" rel="stylesheet" type="text/css" />

	<!-- Skin Color -->
	<link rel="stylesheet" href="http://epmc.gob.ec/front/css/colors/red.css" id="color-skins" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159218650-1"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159218650-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-159218650-1');
        </script>

            <link href="http://epmc.gob.ec/back/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
    <style type="text/css" media="screen">
        #message, #info{
            color: red;
            font-weight: 700;
        }
        
        #placa{
            text-transform: uppercase;
        }
    </style>

    <!-- Styles -->
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

        #conta{
            background-color: #000000;
        }

		/*Estilos de footer*/
		#footer {

			background-color: #272727;
		}

		#pie {
			background-color: #000000;
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

    <!-- Start Header -->
    <header>
        <div class="px-3 py-2 bg-dark text-white">

            <div class="container-header">
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
    </header> <!-- End Header -->



    <div class="site-wrapper content">

        <section id="breadcrumb">
            <div class="container">

                <ul class="breadcrumb">
                    <li><a href="http://epmc.gob.ec" title="Inicio">Inicio</a></li>
                    <li><a href="http://epmc.gob.ec#services" title="Transparencia">Transparencia</a></li>
                    <li>Lotaip</li>
                </ul>

            </div>
        </section>

        <!-- Start Formularios Section -->
        <!-- Start Price List -->
        <section id="" class="parallax-section-5">
            <div class="container">
                <div class="row wow fadeInUp">

                    <div class="col-md-12 shortcode-title wow fadeIn">
                        <h3 class="section-title">LOTAIP</h3>
                        <p class="text-justify">Art. 7.- Difusión de la Información Pública.- Por la transparencia en la gestión administrativa que están obligadas a observar todas las instituciones del Estado que conforman el sector público en los términos de los artículos 253 y 264 de la Constitución Política de la República y demás entes señalados en el artículo 1 de la presente Ley, difundirán a través de un portal de información o página web, así como de los medios necesarios a disposición del público, implementados en la misma institución, la siguiente información mínima actualizada, que para efectos de esta Ley, se la considera de naturaleza obligatoria.</p>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="bs-example bs-example-tabs">

                            <ul id="myTab" class="nav nav-tabs">
                                <li class=" active "><a href="#tab-2022" data-toggle="tab">2022</a></li>
                                <li class=""><a href="#tab-2021" data-toggle="tab">2021</a></li>
                                <li class=""><a href="#tab-2020" data-toggle="tab">2020</a></li>
                                <li class=""><a href="#tab-2019" data-toggle="tab">2019</a></li>
                            </ul>

                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade  active in " id="tab-2022">
                                    <table class="table table-hovered table-bordered table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a1)</strong> Estructura orgánica funcional</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648501355.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646401710.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a2)</strong> Base legal que la rige</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116882.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a3)</strong> Regulaciones y procedimientos internos</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1642449759.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646401634.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a4)</strong> Metas y objetivos de las unidades administrativas</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648501719.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>b1)</strong> Directorio completo de las institución</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1642449780.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646401678.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>b2)</strong> Distributivo del personal</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1642449795.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646401690.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>c)</strong> Remuneración mensual por puesto e ingresos adicionales</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648501193.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646401653.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>d)</strong> Servicios y horarios de atención</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1642449860.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646401439.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>e)</strong> Contratos colectivos vigentes</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116919.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>e)</strong> Contratos colectivos vigentes</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>f1)</strong> Formularios para trámites inherentes</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1642449898.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646401466.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>f2)</strong> Formato para solicitudes de acceso a la información pública</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648561010.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648561030.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>g)</strong> Información del presupuesto anual</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646938668.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>h)</strong> Resultados de Auditorias</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116934.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>i)</strong> Información de procesos de contratación de bienes y servicios</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1642449735.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646401512.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>j)</strong> Contratos incumplidos por empresas y personas</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>k)</strong> Planes y programas</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648501667.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>l)</strong> Contratos de crédito internos y externos</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648560134.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646938648.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>m)</strong> Mecanismos de rendición de cuentas</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648501562.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>n)</strong> Viáticos, informes de trabajo y justificativos</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648502162.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1646938685.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>o)</strong> Responsable de atender la información pública</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1642540602.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1647015491.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>p)</strong> Sentencias ejecutorias (Función Judicial)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>q)</strong> Resoluciones ejecutorias (Organismos de Control del Estado)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>r)</strong> Resoluciones ejecutorias (Organismos de Control del Estado)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>s)</strong> Publicación de las actas de sesiones</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>t)</strong> Sentencias ejecutorias (Tribunal de lo Contencioso Administrativo)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade " id="tab-2021">
                                    <table class="table table-hovered table-bordered table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a1)</strong> Estructura orgánica funcional</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610998746.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617032825.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617033018.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617722817.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1620160944.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1623448223.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625494228.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1628255560.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1633961742.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636141857.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142585.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496133.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a2)</strong> Base legal que la rige</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115515.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115663.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115739.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115807.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116052.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116113.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116298.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116377.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116441.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116490.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116553.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116768.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a3)</strong> Regulaciones y procedimientos internos</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610998758.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617032804.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617033030.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1620160957.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1623448237.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625494294.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1628255536.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1633961755.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143032.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142616.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496147.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a4)</strong> Metas y objetivos de las unidades administrativas</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625862621.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625862654.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625862671.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625862688.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625862706.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625862727.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863295.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627931185.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1630945422.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1634229466.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142216.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>b1)</strong> Directorio completo de las institución</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610998770.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617031967.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617030831.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143790.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143456.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143171.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142990.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142640.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496190.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>b2)</strong> Distributivo del personal</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610998784.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617030712.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617030864.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143807.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143471.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143187.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143010.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142684.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496204.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>c)</strong> Remuneración mensual por puesto e ingresos adicionales</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610998796.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617031103.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617031034.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143823.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143562.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636143202.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142016.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496239.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496224.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>d)</strong> Servicios y horarios de atención</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610372367.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627315140.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627330284.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627330261.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627330189.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627330146.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1632750436.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496483.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496507.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496447.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496461.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496386.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>e)</strong> Contratos colectivos vigentes</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115536.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115715.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115846.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116194.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116221.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116137.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116333.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116391.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116504.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116652.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116737.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116784.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>e)</strong> Contratos colectivos vigentes</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115567.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115755.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115879.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116068.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116244.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116265.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116317.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116406.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116456.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116635.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116841.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116805.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>f1)</strong> Formularios para trámites inherentes</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610372477.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1613135113.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625862948.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625862972.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627330174.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627330113.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1632750368.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1634737680.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648560828.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>f2)</strong> Formato para solicitudes de acceso a la información pública</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617029767.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627330305.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617029834.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627330241.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627330352.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627330375.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1632750345.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1634737697.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1637673148.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648560891.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648560936.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1648560972.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>g)</strong> Información del presupuesto anual</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618316976.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618316533.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618316513.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618316494.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1620396141.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1624482570.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625667158.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1628255666.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1631546678.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1633961860.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1637592994.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1640097118.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>h)</strong> Resultados de Auditorias</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115585.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115693.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115771.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645115825.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116082.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116153.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116354.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116422.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116471.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116521.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116581.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1645116819.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>i)</strong> Información de procesos de contratación de bienes y servicios</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1609963439.part" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1612888737.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1615296481.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1620057552.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1620160973.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1623183155.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625233865.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627931144.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1630945517.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1633961890.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142271.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496021.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>j)</strong> Contratos incumplidos por empresas y personas</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>k)</strong> Planes y programas</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625862859.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625862917.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863044.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863076.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863110.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863152.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863196.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627931219.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1630945365.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1634229493.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142233.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>l)</strong> Contratos de crédito internos y externos</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1614202797.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1614202861.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617048837.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1623183668.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1623183506.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1623183404.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625667380.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1628255641.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1631546645.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1633961953.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1637593021.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1640097100.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>m)</strong> Mecanismos de rendición de cuentas</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863479.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863523.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863594.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863611.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863629.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863660.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625863678.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627931200.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1630945341.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1634229447.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142250.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>n)</strong> Viáticos, informes de trabajo y justificativos</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618318157.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1614201507.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618315970.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618316186.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1620396175.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1624482588.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625667226.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1628255613.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1631546615.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1633961914.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1637593042.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1640097075.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>o)</strong> Responsable de atender la información pública</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1609964131.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1614201831.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1615296714.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617723707.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1620161356.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1623183265.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1625234087.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1627931314.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1630942898.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1634229639.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1636142529.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1639496738.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>p)</strong> Sentencias ejecutorias (Función Judicial)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>q)</strong> Resoluciones ejecutorias (Organismos de Control del Estado)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>r)</strong> Resoluciones ejecutorias (Organismos de Control del Estado)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>s)</strong> Publicación de las actas de sesiones</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>t)</strong> Sentencias ejecutorias (Tribunal de lo Contencioso Administrativo)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade " id="tab-2020">
                                    <table class="table table-hovered table-bordered table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a1)</strong> Estructura orgánica funcional</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597341774.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597341806.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597341838.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597341999.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342035.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342067.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1596647410.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617118744.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599517579.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602533171.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1605104543.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610998646.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a2)</strong> Base legal que la rige</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597339632.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597339728.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597339826.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597339908.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597340024.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597340200.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597340256.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617226971.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617226993.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227014.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227031.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227046.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a3)</strong> Regulaciones y procedimientos internos</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342167.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342197.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342220.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342248.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342278.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342311.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342353.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1596646951.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599517607.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602533204.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1605104561.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610998668.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a4)</strong> Metas y objetivos de las unidades administrativas</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617049745.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617049773.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617049959.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606148221.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606148261.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606148439.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606148506.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606148582.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606148653.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606148683.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1611005304.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1611005325.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>b1)</strong> Directorio completo de las institución</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342469.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342498.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342524.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342558.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342586.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342618.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617119045.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617118910.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599517643.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602533241.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1605104629.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610998685.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>b2)</strong> Distributivo del personal</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342702.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342733.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342766.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342793.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342966.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342995.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617118991.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1596646996.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599517662.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602533267.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1605104653.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610998704.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>c)</strong> Remuneración mensual por puesto e ingresos adicionales</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597343194.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597343224.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597343253.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597343283.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597343313.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597343339.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597343390.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1596647023.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599517698.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602533355.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1605104688.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1610998720.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>d)</strong> Servicios y horarios de atención</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823802.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823833.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823855.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591819605.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591650840.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1597342822.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617231790.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617231847.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1603209818.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1603209896.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1605097865.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1608390011.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>e)</strong> Contratos colectivos vigentes</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227074.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227091.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227105.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227126.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227141.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227156.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227172.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227190.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227215.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227232.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227247.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227274.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>e)</strong> Contratos colectivos vigentes</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>f1)</strong> Formularios para trámites inherentes</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823287.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823312.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823425.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591819481.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591650889.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617231669.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617231596.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599747191.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1603209688.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1603209778.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1605097899.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1608389938.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>f2)</strong> Formato para solicitudes de acceso a la información pública</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586824576.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586824597.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586824624.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586824656.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591647245.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591647278.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599747331.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599747376.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599747409.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602516855.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>g)</strong> Información del presupuesto anual</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317445.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618316593.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618316636.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618316670.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618316727.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618316763.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317648.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317547.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317577.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317597.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317982.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618318033.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>h)</strong> Resultados de Auditorias</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227329.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227348.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227370.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227386.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227404.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227425.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227474.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227491.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227510.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227527.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227550.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227595.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>i)</strong> Información de procesos de contratación de bienes y servicios</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587822963.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587823081.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587823266.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587823376.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591651048.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591648133.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1596647835.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1596647875.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599061743.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602515720.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1605015817.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1607090128.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>j)</strong> Contratos incumplidos por empresas y personas</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227639.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227667.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227697.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227718.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227736.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227784.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227804.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227824.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227841.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227860.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227876.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617227895.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>k)</strong> Planes y programas</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617050135.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617050389.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606149537.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606149606.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606149635.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606149663.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606149684.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606149714.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606149746.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606149775.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606149799.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617050158.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>l)</strong> Contratos de crédito internos y externos</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588898029.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588898396.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588898428.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588898457.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588898489.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591648811.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602530492.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602530782.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1609963556.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602516043.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1605016120.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1607089386.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>m)</strong> Mecanismos de rendición de cuentas</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617046906.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617046933.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617046968.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617047008.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617047035.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617047059.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617047079.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617047122.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617047158.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617047188.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1606149959.xls" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1617047228.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>n)</strong> Viáticos, informes de trabajo y justificativos</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588949687.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1583435639.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588906869.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588907212.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588906769.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591648691.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317757.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317779.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317799.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317818.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618318104.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618318126.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>o)</strong> Responsable de atender la información pública</span>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1583270839.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Enero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587821322.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Febrero</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587821351.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Marzo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587821404.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Abril</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591652745.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Mayo</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1591652901.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Junio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1596653713.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1596653822.xlsx" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1599063714.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1602516592.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1605016540.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1607102469.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>p)</strong> Sentencias ejecutorias (Función Judicial)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>q)</strong> Resoluciones ejecutorias (Organismos de Control del Estado)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>r)</strong> Resoluciones ejecutorias (Organismos de Control del Estado)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>s)</strong> Publicación de las actas de sesiones</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>t)</strong> Sentencias ejecutorias (Tribunal de lo Contencioso Administrativo)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade " id="tab-2019">
                                    <table class="table table-hovered table-bordered table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a1)</strong> Estructura orgánica funcional</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a2)</strong> Base legal que la rige</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a3)</strong> Regulaciones y procedimientos internos</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>a4)</strong> Metas y objetivos de las unidades administrativas</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>b1)</strong> Directorio completo de las institución</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>b2)</strong> Distributivo del personal</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>c)</strong> Remuneración mensual por puesto e ingresos adicionales</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>d)</strong> Servicios y horarios de atención</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823502.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823528.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823583.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823618.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823656.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823690.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>e)</strong> Contratos colectivos vigentes</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>e)</strong> Contratos colectivos vigentes</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>f1)</strong> Formularios para trámites inherentes</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823038.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823074.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823125.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823175.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823203.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1586823236.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>f2)</strong> Formato para solicitudes de acceso a la información pública</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1583439974.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1583440004.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1583440015.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1583440041.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1583440075.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1583440097.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>g)</strong> Información del presupuesto anual</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588902717.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317033.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317268.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317302.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317337.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1618317387.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>h)</strong> Resultados de Auditorias</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>i)</strong> Información de procesos de contratación de bienes y servicios</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587822276.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587822362.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587822428.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587822519.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587822853.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>j)</strong> Contratos incumplidos por empresas y personas</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1593700431.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>k)</strong> Planes y programas</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>l)</strong> Contratos de crédito internos y externos</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588899138.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588899188.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588899281.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588899434.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588899499.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588899531.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>m)</strong> Mecanismos de rendición de cuentas</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>n)</strong> Viáticos, informes de trabajo y justificativos</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1589399208.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588949133.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Agosto</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588949236.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588949345.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588949510.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1588949585.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>o)</strong> Responsable de atender la información pública</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587821683.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Julio</a>
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1583269807.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Septiembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1583270406.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Octubre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587821490.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Noviembre</a>
                                                </td>
                                                <td>
                                                    <a href="http://epmc.gob.ec/uploads/lotaip_1587821523.pdf" class="bg-info" target="_blank"><i class="fa fa-eye"></i> Diciembre</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>p)</strong> Sentencias ejecutorias (Función Judicial)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>q)</strong> Resoluciones ejecutorias (Organismos de Control del Estado)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>r)</strong> Resoluciones ejecutorias (Organismos de Control del Estado)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>s)</strong> Publicación de las actas de sesiones</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="feature"><strong>t)</strong> Sentencias ejecutorias (Tribunal de lo Contencioso Administrativo)</span>
                                                </td>
                                                <td>
                                                    Enero
                                                </td>
                                                <td>
                                                    Febrero
                                                </td>
                                                <td>
                                                    Marzo
                                                </td>
                                                <td>
                                                    Abril
                                                </td>
                                                <td>
                                                    Mayo
                                                </td>
                                                <td>
                                                    Junio
                                                </td>
                                                <td>
                                                    Julio
                                                </td>
                                                <td>
                                                    Agosto
                                                </td>
                                                <td>
                                                    Septiembre
                                                </td>
                                                <td>
                                                    Octubre
                                                </td>
                                                <td>
                                                    Noviembre
                                                </td>
                                                <td>
                                                    Diciembre
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div><!-- End bs-example -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End Price List -->
        <!-- End Formularios Section -->

        <!-- Start Fun Facts Section -->
        <section id="fun-facts">
            <div class="container">

                <div class="counter-row row text-center wow fadeInUp">
                    <div class="col-md-3 col-sm-6 fact-container">
                        <div class="fact">
                            <span class="counter highlight">620</span>
                            <h4>Turnos diarios</h4>
                            <p>Para el <span class="highlight">2022-03-29</span></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 fact-container">
                        <div class="fact">
                            <span class="counter highlight">7349</span>
                            <h4>Turnos generados</h4>
                            <p>Año <span class="highlight">2022</span></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 fact-container">
                        <div class="fact">
                            <h2 class="highlight" id="visitas-totales">0</h2>
                            <h4>Visitas totales</h4>
                            <p>Desde <span class="highlight">2020-03-01</span></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 fact-container">
                        <div class="fact">
                            <h2 class="highlight" id="visitas-mensuales">0</h2>
                            <h4>Visitas mensuales</h4>
                            <p>Usuarios <span class="highlight">March</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </section> <!-- End Fun Facts Section -->

       <!-- Start Footer 1 -->
       <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <br>
                            <p style="color:#FFFFFF; font-family: Bebas Neue, cursive;">ÚLTIMAS NOTICIAS</p>
                            <a class="link-dark" href="{{route('calendarioMatriculacion')}}">
                                <p style="color:#FF0000; font-family: Bebas Neue, cursive;">CALENDARIO DE MATRICULACIÓN VEHICULAR 2021</p>
                            </a>
                        </div>
                        <div class="col-3">
                            <br>
                            <p style="color:#FFFFFF; font-family: Bebas Neue, cursive;">CONTACTANOS AHORA</p>
                            <a class="link-dark" href="https://www.google.com/maps/place/Empresa+P%C3%BAblica+De+Movilidad+Cotopaxi/@-1.0375142,-78.5820813,15z/data=!4m5!3m4!1s0x0:0x487e2b4c613888ce!8m2!3d-1.0375105!4d-78.5821879">
                                <p style="color:#C0C0C0; font-family: Bebas Neue, cursive;"><svg fill="red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg> Instalaciones del terminal terrestre del cantón Salcedo</p>
                            </a>
                            <p style="color:#C0C0C0; font-family: Bebas Neue, cursive;"><svg fill="red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg> (03)-3-700-490 Ext:211</p>
                            <p style="color:#C0C0C0 ; font-family: Bebas Neue, cursive;"> <svg fill="red" x0mlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg> info@epmc.gob.ec</p>
                        </div>
                        <div class="col-3">
                            <br>
                            <p style="color:#FFFFFF; font-family: Bebas Neue, cursive;">ENLACES ÚTILES</p>
                            <p style="color:#FF0000; font-family: Bebas Neue, cursive;">NOTICIAS</p>
                            <p style="color:#FF0000; font-family: Bebas Neue, cursive;">FORMULARIOS</p>
                            <p style="color:#FF0000; font-family: Bebas Neue, cursive;">REQUISITOS</p>
                            <p style="color:#FF0000; font-family: Bebas Neue, cursive;">CONSULTAS</p>
                            <p style="color:#FF0000; font-family: Bebas Neue, cursive;">INICIAR SECIÓN</p>
                        </div>
                        <div class="col-3">
                            <br>
                            <p style="color:#FFFFFF; font-family: Bebas Neue, cursive;">Redes sociales</p>
                            <p style="color:#FFFFFF">
                                <a href="https://twitter.com/epmc2017" class="nav-link text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </a>
                                <a href="https://twitter.com/epmc2017" class="nav-link text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pie">
                <div class="container">
                    <div class="row">
                        <br>
                        <div class="col">
                            <br>

                            <p style="color:#FFFFFF">
                                <font size=2>© 2020. Todos los derechos reservados.</font>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- End Footer 1 -->

        <!-- Start Back To Top -->
        <a id="back-to-top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
            </svg></i></a>
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
</body>

</html>