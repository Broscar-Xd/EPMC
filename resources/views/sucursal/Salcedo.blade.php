<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-159218650-1');
    </script>

    <link href="http://epmc.gob.ec/back/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
    <style type="text/css" media="screen">
        #message,
        #info {
            color: red;
            font-weight: 700;
        }

        #placa {
            text-transform: uppercase;
        }
    </style>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

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

        #conta {
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

<body class="antialiased">
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
                                INICIO
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
                                <a href="">Equipo Administrativo</a>
                                <a href="">Equipo Directivo</a>
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
                                <a href="{{'lotaip'}}">LOTAIP</a>
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
                            <a href="{{route('informate')}}" class="nav-link text-white">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>
                                Informate
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropbtn">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                </svg>
                                Servicios
                            </a>
                            <div class="dropdown-content">
                                <a href="{{route('turnos')}}">SISTEMAS DE TURNOS</a>
                                <a href="{{route('consultas')}}">CONSULTAS</a>
                                <a href="{{route('requisitos')}}">REQUISITOS</a>
                                <a href="{{route('formularios')}}">FORMULARIOS</a>
                            </div>
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
    </header><!-- End Header -->
    <section>
        <script type="text/javascript">
            window.addEventListener("scroll", function() {
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>
    </section>


    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card bg-dark text-white">
                    <img src="http://epmc.gob.ec/front/img/backgrounds/bg-shortcodes.jpg" class="card-img" alt="..." width="1000" height="200">
                    <div class="card-img-overlay">
                        <h1 class="card-title" align="center" style="color:#FFFFFF">Sistema de emición de turnos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-wrapper content">

        <section id="breadcrumb">
            <div class="container">

                <ul class="breadcrumb">
                    <li><a href="http://epmc.gob.ec" title="Inicio">Inicio</a></li>
                    <li><a href="http://epmc.gob.ec#services" title="Servicios">Servicios</a></li>
                    <li>Sistema de emisión de Turnos</li>
                </ul>
            </div>
        </section>

        <!-- End Turnero List -->
        <section id="contact">
            <div class="container">
                <div class="row">


                    <div class="col-md-12">
                        <h3 class="section-title wow fadeInUp">Genera tu turno</h3>
                        <h4 class="text-center"> <small>Sucursal:</small> Salcedo</h4>
                        <p class="text-justify"></p>
                    </div>
                    <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">

                        <!-- Contact Form will be functional only on your server. Upload to your server when testing. -->
                        <form method="post" action="http://epmc.gob.ec/sistema-turnos/1">
                            <input type="hidden" name="_token" value="f5CW4zcxWyxtoh6dedmmVz7HjpScyXyt5B27Otem">
                            <fieldset>
                                <input type="hidden" name="sucursal_id" value="1">
                                <select name="requisito_id" id="requisito_id" required class="form-control">
                                    <option value="12">REVISIÓN VEHÍCULOS PARTICULARES</option>
                                    <option value="13">AUTORIZACIÓN PARA RENOVACIÓN ANUAL DE MATRÍCULA</option>
                                    <option value="2">RENOVACIÓN ANUAL DE MATRICULACIÓN CAMBIO DE STICKER O ESPECIE PARTICULAR</option>
                                    <option value="1">TRASPASOS DE VEHÍCULOS PARTICULARES</option>
                                    <option value="3">DUPLICADO DE ESPECIE DE MATRÍCULA POR PÉRDIDA</option>
                                    <option value="4">CAMBIO DE TIPO O COLOR DEL VEHÍCULO</option>
                                    <option value="5">CAMBIO DE SERVICIO DE PARTICULAR A PÚBLICO, COMERCIAL Y POR CUENTA PROPIA</option>
                                    <option value="6">CAMBIO DE SOCIO O UNIDAD</option>
                                    <option value="7">CAMBIO DE ESPECIE DE VEHÍCULOS DE SERVICIO PÚBLICO</option>
                                    <option value="8">TRASPASO DE VEHÍCULOS PÚBLICOS</option>
                                    <option value="9">MATRICULACIÓN DE VEHÍCULOS NUEVOS DE SERVICIO PÚBLICO</option>
                                    <option value="10">REVISIÓN VEHÍCULOS PÚBLICOS</option>
                                </select>
                                <div id="info" class="text-danger"></div>
                                <input name="cedula" type="text" id="cedula" placeholder="Nº Cédula / RUC" required />
                                <div id="info-placa" class="text-danger"></div>
                                <input name="placa" type="text" id="placa" placeholder="Placa" required />
                                <div id="info-digito" class="text-danger"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="datepicker" data-date="" class="text-center"></div>
                                        <input type="hidden" name="fecha" id="fecha">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="turno-info">
                                            <div>Fecha: <strong id="current_date">2022-03-24</strong></div>
                                            <div>Último turno: <strong id="last_turno">353</strong></div>
                                            <!-- <div>Turnos generados: <strong id="n_turnos">353</strong></div>-->
                                            <div>Turnos disponibles: <strong id="turnos_disponibles">0</strong></div>
                                            <div>Hora: <strong id="last_turno_hora">17:33:36</strong></div>
                                            <div>Placas terminadas en: <strong id="digito-placa">0,1,2,3,4,5,6,7,8,9</strong></div>
                                        </div>
                                    </div>
                                </div>

                                <!--<input name="fecha" type="text" id="fecha" placeholder="Fecha para turno" required/>-->

                            </fieldset>
                            <input type="submit" class="submit" id="submit" value="Siguiente" disabled />
                        </form>
                    </div>
                    <div class="row">
                        <div class="col">
                            Nos permitimos informar a la ciudadanía que los pagos realizados en las diferentes entidades bancarias correspondientes a las tasas de Matriculación y Trasferencia de Domínio serán validados en las próximas 48 horas para realizar los respectivos trámites debido a los nuevos requerimientos del sistema de matriculación vehicular.

                            Recomendamos a nuestros usuarios realizar los pagos corresponientes con 72 horas de anticipación antes de finalizar el mes para evitar inconvenientes.. </i>

                        </div>
                    </div>
                    <div class="col-md-12 text-center wow fadeInUp" style="margin-top:20px;">

                        <div id="message"></div>
                        <a href="http://epmc.gob.ec/turnos/reimpresion" class="btn btn-primary submit">Reimprimir turno</a>
                    </div>



                </div>
            </div>
        </section>
        <!-- End Turnero Section -->

        <!-- Start Formularios Section -->
        <section id="shortcodes" class="parallax-section-2">
            <div class="container">
                <div class="row shortcode-heading">

                    <div class="col-md-12 shortcode-title wow fadeIn ">
                        <h3 class="section-title white">Requisitos</h3>
                        <p class="subheading semi-white">Conoce los requisitos para realizar tus trámites fácilmente</p>
                    </div>

                    <div class="col-md-6">

                        <div class="panel-group wow fadeIn grupo-requisitos" id="toggle">
                            <!-- First Panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse12" data-parent=".grupo-requisitos">
                                        REVISIÓN VEHÍCULOS PARTICULARES
                                    </h4>
                                </div>
                                <div id="collapse12" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621612947.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621612947.jpg" alt="REVISIÓN VEHÍCULOS PARTICULARES">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse13" data-parent=".grupo-requisitos">
                                        AUTORIZACIÓN PARA RENOVACIÓN ANUAL DE MATRÍCULA
                                    </h4>
                                </div>
                                <div id="collapse13" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621613267.pdf" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621613267.pdf" alt="AUTORIZACIÓN PARA RENOVACIÓN ANUAL DE MATRÍCULA">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse2" data-parent=".grupo-requisitos">
                                        RENOVACIÓN ANUAL DE MATRICULACIÓN CAMBIO DE STICKER O ESPECIE PARTICULAR
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1622472781.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1622472781.jpg" alt="RENOVACIÓN  ANUAL  DE MATRICULACIÓN  CAMBIO DE  STICKER O ESPECIE PARTICULAR">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse1" data-parent=".grupo-requisitos">
                                        TRASPASOS DE VEHÍCULOS PARTICULARES
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621612706.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621612706.jpg" alt="TRASPASOS DE VEHÍCULOS PARTICULARES">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse3" data-parent=".grupo-requisitos">
                                        DUPLICADO DE ESPECIE DE MATRÍCULA POR PÉRDIDA
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621606748.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621606748.jpg" alt="DUPLICADO DE ESPECIE DE MATRÍCULA POR PÉRDIDA">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="panel-group wow fadeIn grupo-requisitos" id="toggle">
                            <!-- First Panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse4" data-parent=".grupo-requisitos">
                                        CAMBIO DE TIPO O COLOR DEL VEHÍCULO
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621606770.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621606770.jpg" alt="CAMBIO DE TIPO O COLOR DEL VEHÍCULO">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse5" data-parent=".grupo-requisitos">
                                        CAMBIO DE SERVICIO DE PARTICULAR A PÚBLICO, COMERCIAL Y POR CUENTA PROPIA
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621606792.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621606792.jpg" alt="CAMBIO DE SERVICIO DE PARTICULAR A PÚBLICO, COMERCIAL Y POR CUENTA PROPIA">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse6" data-parent=".grupo-requisitos">
                                        CAMBIO DE SOCIO O UNIDAD
                                    </h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621606817.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621606817.jpg" alt="CAMBIO DE SOCIO O UNIDAD">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse7" data-parent=".grupo-requisitos">
                                        CAMBIO DE ESPECIE DE VEHÍCULOS DE SERVICIO PÚBLICO
                                    </h4>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621605230.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621605230.jpg" alt="CAMBIO DE ESPECIE DE VEHÍCULOS DE SERVICIO PÚBLICO">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse8" data-parent=".grupo-requisitos">
                                        TRASPASO DE VEHÍCULOS PÚBLICOS
                                    </h4>
                                </div>
                                <div id="collapse8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621612821.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621612821.jpg" alt="TRASPASO DE VEHÍCULOS PÚBLICOS">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="panel-group wow fadeIn grupo-requisitos" id="toggle">
                            <!-- First Panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse9" data-parent=".grupo-requisitos">
                                        MATRICULACIÓN DE VEHÍCULOS NUEVOS DE SERVICIO PÚBLICO
                                    </h4>
                                </div>
                                <div id="collapse9" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621606855.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621606855.jpg" alt="MATRICULACIÓN DE  VEHÍCULOS NUEVOS DE SERVICIO PÚBLICO">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" data-target="#collapse10" data-parent=".grupo-requisitos">
                                        REVISIÓN VEHÍCULOS PÚBLICOS
                                    </h4>
                                </div>
                                <div id="collapse10" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="http://epmc.gob.ec/requisitos/f_1621612622.jpg" target="_blank">
                                            <img src="http://epmc.gob.ec/requisitos/f_1621612622.jpg" alt="REVISIÓN  VEHÍCULOS PÚBLICOS">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--<div class="col-md-12">
        <button id="collapse-init" class="btn btn-primary">Abrir todos</button>
    </div>-->
                </div>
            </div>
        </section> <!-- End Formularios Section -->

        <!-- Start Fun Facts Section -->
        <section id="fun-facts">
            <div class="container">

                <div class="counter-row row text-center wow fadeInUp">
                    <div class="col-md-3 col-sm-6 fact-container">
                        <div class="fact">
                            <span class="counter highlight">587</span>
                            <h4>Turnos diarios</h4>
                            <p>Para el <span class="highlight">2022-03-24</span></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 fact-container">
                        <div class="fact">
                            <span class="counter highlight">11168</span>
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
        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <br>
                            <p style="color:#FFFFFF; font-family: Bebas Neue, cursive;">ÚLTIMAS NOTICIAS</p>
                            <p style="color:#FF0000; font-family: Bebas Neue, cursive;">CALENDARIO DE MATRICULACIÓN VEHICULAR 2021</p>
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
        </footer>
        <!-- Start Back To Top -->
        <a id="back-to-top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
            </svg></a>
        <!-- End Back To Top -->
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
        <script src="http://epmc.gob.ec/back/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="http://epmc.gob.ec/back/assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js" type="text/javascript"></script>
        <script src="http://epmc.gob.ec/back/assets/plugins/inputmask/jquery.inputmask.min.js" type="text/javascript"></script>

        <script>
            var placa_valida = false;
            var cedula_valida = false;
            var digito_valido = true;
            var fecha_seteada = false;

            $(document).ready(function() {
                $("#placa").inputmask("aa[a]-999[9|a]");
                $("#cedula").inputmask("9999999999[999]");

                $('#datepicker').datepicker({
                    language: 'es',
                    format: 'yyyy-mm-dd',
                    weekStart: 1,
                    startDate: Date('Y-m-d'),
                    endDate: '2022-03-25',
                    datesDisabled: ["2022-03-25", "2022-03-24"],
                    autoclose: true,
                    todayHighlight: false,
                });

                function validarDigito() {
                    var placa = $('#placa').val().replace('-', '');
                    placa = placa.replace('_', '');
                    var ultimo_digito = placa.slice(-1);
                    if (ultimo_digito.toLowerCase().match(/[a-z]/i)) {
                        ultimo_digito = placa.slice(-2, -1);
                    }
                    if ($('#digito-placa').html().includes(ultimo_digito) > 0) {
                        digito_valido = true;
                        $('#info-digito').html('');
                        if (placa_valida && cedula_valida && fecha_seteada && digito_valido) {
                            $('#submit').removeAttr("disabled");
                        }
                    } else {
                        digito_valido = false;
                        $('#info-digito').html('En esta fecha solo se pueden generar turnos para placas terminadas en ' + $('#digito-placa').html());
                        $('#submit').attr("disabled", true);
                    }
                }
                $('#placa').on('change', function(data) {
                    var placa = $(this).val().replace('-', '');
                    placa = placa.replace('_', '');
                    $('#submit').val("validando...");
                    var url_consulta = "http://epmc.gob.ec/validar_placa/" + placa;
                    $.get(url_consulta, {}, function(data) {
                        if (data.mensajeServidor) {
                            $('#info-placa').html('La placa ingresada es incorrecta o no existe');
                            $('#submit').attr("disabled", true);
                            placa_valida = false;
                        } else {
                            placa_valida = true;
                            $('#info-placa').html('');
                            if (placa_valida && cedula_valida && fecha_seteada && digito_valido) {
                                $('#submit').removeAttr("disabled");
                            }
                        }
                        validarDigito();
                        $('#submit').val("Siguiente");
                    }, 'json');
                });

                $('#cedula').on('change', function(data) {
                    var valor = $(this).val();
                    $('#submit').val("validando...");
                    $.get('http://epmc.gob.ec/validar_cedula/' + valor, {}, function(data) {
                        if (data) {
                            cedula_valida = true;
                            $('#info').html('');
                            if (placa_valida && cedula_valida && fecha_seteada && digito_valido) {
                                $('#submit').removeAttr("disabled");
                            }
                        } else {
                            cedula_valida = false;
                            $('#info').html('El número de CI o RUC ingresado es incorrecto');
                            $('#submit').attr("disabled", true);
                        }
                        $('#submit').val("Siguiente");
                    }, 'json');
                });
                $('#datepicker').on('changeDate', function() {
                    fecha_seteada = true;
                    $('#fecha').val(
                        $('#datepicker').datepicker('getFormattedDate')
                    );
                    $('#current_date').html(
                        $('#datepicker').datepicker('getFormattedDate')
                    );
                    var url = 'http://epmc.gob.ec/stats_calendario/' + $('#datepicker').datepicker('getFormattedDate');
                    var sucursal_id = '1';
                    $.get(url, {
                        'sucursal_id': sucursal_id
                    }, function(data) {
                        $('#n_turnos').html(data.n_turnos);
                        $('#turnos_disponibles').html(data.turnos_disponibles);
                        $('#digito-placa').html(data.digitos);
                        if (data.last_turno) {
                            $('#last_turno').html(data.last_turno.turno);
                            $('#last_turno_hora').html(data.last_turno.hora);
                        } else {
                            $('#last_turno').html(0);
                            $('#last_turno_hora').html('');
                        }
                        validarDigito();
                        if (placa_valida && cedula_valida && fecha_seteada && digito_valido) {
                            $('#submit').removeAttr("disabled");
                        }
                    }, 'json');
                });

                $('#reimprimir').on('click', function() {
                    var placa = $('#placa').val();
                    var cedula = $('#cedula').val();
                    var fecha = $('#fecha').val();
                    $.post('http://epmc.gob.ec/turnos/reimpresion', {
                        '_token': 'f5CW4zcxWyxtoh6dedmmVz7HjpScyXyt5B27Otem',
                        'placa': placa,
                        'cedula': cedula,
                        'fecha': fecha
                    }, function(data) {
                        if (data.existe) {
                            location.href = "http://epmc.gob.ec/sistema-turnos/" + data.turno;
                        } else {
                            $('#message').html(data.msg);
                        }
                    }, 'json');
                });

            });
        </script>
</body>

</html>