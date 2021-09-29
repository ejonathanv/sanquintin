<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.html">
    <title>{{ env('APP_NAME') }}</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" media="all" type="text/css" href="fontawesome-free-5.0.7/css/fontawesome-all.css">
    <link rel="stylesheet" media="all" type="text/css" href="../../../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div id="top-header">
            <div class="container">
                <div class="row">
                    <!-- text -->
                    <div class="col-md-4"><p>Tenemos mas de 15 años de experiencia. <a href="#"><u>Contáctanos</u></a></p></div>
                    <!-- location -->
                    <div class="col-md-4 location"><p><i class="fas fa-map-marker-alt"></i> Del Sauzal 51 Fracc. El Rubí</p></div>
                    <div class="col-md-4">
                        <!-- social icon -->
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>   
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- navigation -->
        <div id="myHeader">
        <nav class="navbar navbar-inverse">
            <div class="container">   
                <div class="navbar-header"> 
                    <!-- mobile toggle -->               
                    <button class='nav-toggle' id='nav-toggle'>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- logo -->
                    <a href="index.html" class="navbar-brand">
                        <img src="{{ asset('/images/LOGO_SAN_QUINTIN.svg') }}" alt="img" style="height: 45px">
                    </a>
                </div>
                <!-- header contact -->
                <div class="top-contact">
                    <ul>
                        <li>
                            <div class="contact-txt">Comunícate con nosotros<span><a href="tel:+123 4567 7890">(664) 123-4567</a></span></div>
                        </li>
                        <li>
                            <div class="contact-txt">Escríbenos para más información <span><a href="mailto:Support@gmail.com">info@sanquintin.com</a></span></div>
                        </li>
                    </ul>             
                    <div class="get-quote"><a href="contact-us.html">Obtén una cotización</a></div>
                </div>
            </div>
            <!-- menu bar -->
            <div id="menu">
                <div class="container d-flex align-items-center justify-content-center">
                    <nav class='nav-collapse' id='nav'>
                        <ul class='menu-items'>            
                            <li><a href="index.html">Inicio</a></li>
                            <li><a href="about-us.html">Nosotros</a></li>
                            <li class='dropdown'>
                                <a class='has-dropdown' href='services.html'>Servicios</a>
                                <ul class='sub-menu'>
                                    <li><a href="single-service.html">Service Name1</a></li>
                                    <li><a href="single-service.html">Service Name2</a></li>
                                    <li><a href="single-service.html">Service Name3</a></li>
                                    <li><a href="single-service.html">Service Name4</a></li>
                                </ul>
                            </li>
                            <li><a href='contact-us.html'>Contáctanos</a></li>
                        </ul>
                    </nav> 
                </div>  
            </div>
        </nav>
        </div>
    </header>