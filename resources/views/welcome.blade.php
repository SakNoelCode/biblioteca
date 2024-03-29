<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Sistema de biblioteca">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Biblioteca de la Fisme</title>


    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('assets/images/logo-untrm.png')}}" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!--====== tailwind css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}">



</head>

<body>

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="w-full">
                        <nav class="flex items-center justify-between navbar navbar-expand-md">
                            <a class="mr-4 navbar-brand" href="#">
                                <img src="assets/images/logo-untrm.png" alt="Logo" style="width: 100px;">
                            </a>

                            <button class="block navbar-toggler focus:outline-none md:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <!-- justify-center hidden md:flex collapse navbar-collapse sub-menu-bar -->
                            <div class="absolute left-0 z-30 hidden w-full px-5 py-3 duration-300 bg-white shadow md:opacity-100 md:w-auto collapse navbar-collapse md:block top-100 mt-full md:static md:bg-transparent md:shadow-none" id="navbarOne">
                                <ul class="items-center content-start mr-auto lg:justify-center md:justify-end navbar-nav md:flex">
                                    <!-- flex flex-row mx-auto my-0 navbar-nav -->
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#service">Servicios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">Libros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimonial">Tesis</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Ubicación</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="items-center justify-end hidden navbar-social lg:flex">
                                <span class="mr-4 font-bold text-gray-900 uppercase">Síguenos en</span>
                                <ul class="flex footer-social">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->

        <div id="home" class="relative z-10 header-hero" style="background-image: url(assets/images/biblioteca.jpeg)">
            <div class="container">
                <div class="justify-center row">
                    <div class="w-full lg:w-5/6 xl:w-2/3">
                        <div class="pt-48 pb-64 text-center header-content">
                            <h3 class="mb-5 text-3xl font-semibold leading-tight text-gray-900 md:text-5xl">¡Bienvenido a la Biblioteca Virtual de la FISME BAGUA!</h3>
                            <p class="px-5 mb-10 text-xl text-gray-700">
                                ¿Buscas recursos para tus estudios? ¡No busques más! Nuestra biblioteca virtual ofrece una amplia gama de materiales académicos y científicos que te ayudarán a profundizar en tus investigaciones y alcanzar tus metas educativas.
                            </p>
                            <ul class="flex flex-wrap justify-center">
                                <li><a class="mx-3 main-btn gradient-btn" href="javascript:void(0)">Realizar búsqueda</a></li>
                                <li><a class="mx-3 main-btn video-popup" href="https://www.youtube.com/watch?v=r44RKWyfcFw">Ver videotutorial <i class="ml-2 lni-play"></i></a></li>
                            </ul>
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="absolute bottom-0 z-20 w-full h-auto -mb-1 header-shape">
                <img src="assets/images/header-shape.svg" alt="shape">
            </div>
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="service" class="relative services-area py-120">
        <div class="container">
            <div class="flex">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 section-title">
                        <h4 class="title">¿Te apasiona la lectura?</h4>
                        <p class="text">
                            Descubre una experiencia de lectura envolvente con nuestra interfaz fácil de usar y funciones interactivas.
                        </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="flex">
                <div class="w-full lg:w-2/3">
                    <div class="row">
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-bolt"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title">Busqueda rápida</h4>
                                    <p class="text">Escribe el libro que estas buscando y revisa si esta disponible.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-bar-chart"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title">Libros, tesis y más</h4>
                                    <p class="text">No solo tenemos libros, también tenemos tesis, revistas y artículos.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-brush"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title">Prestamos</h4>
                                    <p class="text">Realizamos el prestamo de libros por tiempo limitado, tienes que devolverlo.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-bulb"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title">Solo personal FISME</h4>
                                    <p class="text">Actualmente solo hacemos prestamos a estudiante, docentes o personal de la FISME.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- row -->
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="services-image">
            <div class="image">
                <img src="assets/images/persona-leendo3.png" alt="Services">
            </div>
        </div> <!-- services image -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== PRICING PART START ======-->

    <section id="pricing" class="bg-gray-100 pricing-area py-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title">¡Los Más Populares!</h4>
                        <p class="text">
                            Sumérgete en una selección excepcional de los libros más cautivadores y fascinantes,
                            recomendados especialmente para ti.
                        </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row">

                <div class="w-full sm:w-3/4 md:w-3/4 lg:w-1/3">
                    <div class="single-pricing enterprise">
                        <div class="absolute top-0 left-0 w-32 mt-3 ml-3 pricing-flower">
                            <img src="assets/images/flower.svg" alt="flower">
                        </div>
                        <div class="text-right pricing-header">
                            <h5 class="sub-title">Mi primer libro de programación</h5>
                            <span class="price">1029</span>
                            <p class="year">veces prestado</p>
                        </div>
                        <div class="mb-8 pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Autor: Don Quijote</li>
                                <li><i class="lni-check-mark-circle"></i> Editorial: Navarrete</li>
                                <li><i class="lni-check-mark-circle"></i> Núm pag: 457</li>
                                <li><i class="lni-check-mark-circle"></i> Disponible</li>
                            </ul>
                        </div>
                        <div class="text-center pricing-btn">
                            <a class="main-btn" href="javascript:void(0)">ver más</a>
                        </div>
                        <div class="bottom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35">
                                <defs>
                                    <style>
                                        .color-3 {
                                            fill: #4da422;
                                            isolation: isolate;
                                        }

                                        .cls-1 {
                                            opacity: 0.1;
                                        }

                                        .cls-2 {
                                            opacity: 0.2;
                                        }

                                        .cls-3 {
                                            opacity: 0.4;
                                        }

                                        .cls-4 {
                                            opacity: 0.6;
                                        }
                                    </style>
                                </defs>
                                <title>bottom-part1</title>
                                <g id="bottom-part">
                                    <g id="Group_747" data-name="Group 747">
                                        <path id="Path_294" data-name="Path 294" class="cls-1 color-3" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)" />
                                        <path id="Path_297" data-name="Path 297" class="cls-2 color-3" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)" />
                                        <path id="Path_296" data-name="Path 296" class="cls-3 color-3" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)" />
                                        <path id="Path_295" data-name="Path 295" class="cls-4 color-3" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>

                <div class="w-full sm:w-3/4 md:w-3/4 lg:w-1/3">
                    <div class="single-pricing pro">
                        <div class="absolute top-0 right-0 w-40 -mr-20 pricing-baloon">
                            <img src="assets/images/baloon.svg" alt="baloon">
                        </div>
                        <div class="pricing-header">
                            <h5 class="sub-title">Buenas prácticas de programación</h5>
                            <span class="price">789</span>
                            <p class="year">veces prestado</p>
                        </div>
                        <div class="mb-8 pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Autor: Don Quijote</li>
                                <li><i class="lni-check-mark-circle"></i> Edición: 2024-II</li>
                                <li><i class="lni-check-mark-circle"></i> Núm pag: 457</li>
                                <li><i class="lni-check-mark-circle"></i> Disponible</li>
                            </ul>
                        </div>
                        <div class="text-center pricing-btn">
                            <a class="main-btn" href="javascript:void(0)">ver más</a>
                        </div>
                        <div class="bottom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35">
                                <defs>
                                    <style>
                                        .color-2 {
                                            fill: #0067f4;
                                            isolation: isolate;
                                        }

                                        .cls-1 {
                                            opacity: 0.1;
                                        }

                                        .cls-2 {
                                            opacity: 0.2;
                                        }

                                        .cls-3 {
                                            opacity: 0.4;
                                        }

                                        .cls-4 {
                                            opacity: 0.6;
                                        }
                                    </style>
                                </defs>
                                <title>bottom-part1</title>
                                <g id="bottom-part">
                                    <g id="Group_747" data-name="Group 747">
                                        <path id="Path_294" data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)" />
                                        <path id="Path_297" data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)" />
                                        <path id="Path_296" data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)" />
                                        <path id="Path_295" data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>

                <div class="w-full sm:w-3/4 md:w-3/4 lg:w-1/3">
                    <div class="single-pricing">
                        <div class="text-center pricing-header">
                            <h5 class="sub-title">Prácticas de programación</h5>
                            <span class="price">435</span>
                            <p class="year">veces prestado</p>
                        </div>
                        <div class="mb-8 pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Autor: Don Quijote</li>
                                <li><i class="lni-check-mark-circle"></i> Edición: 2024-II</li>
                                <li><i class="lni-check-mark-circle"></i> Núm pag: 457</li>
                                <li><i class="lni-check-mark-circle"></i> Disponible</li>
                            </ul>
                        </div>
                        <div class="text-center pricing-btn">
                            <a class="main-btn" href="javascript:void(0)">Ver más</a>
                        </div>
                        <div class="bottom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35">
                                <defs>
                                    <style>
                                        .color-1 {
                                            fill: #2bdbdc;
                                            isolation: isolate;
                                        }

                                        .cls-1 {
                                            opacity: 0.1;
                                        }

                                        .cls-2 {
                                            opacity: 0.2;
                                        }

                                        .cls-3 {
                                            opacity: 0.4;
                                        }

                                        .cls-4 {
                                            opacity: 0.6;
                                        }
                                    </style>
                                </defs>
                                <title>bottom-part1</title>
                                <g id="bottom-part">
                                    <g id="Group_747" data-name="Group 747">
                                        <path id="Path_294" data-name="Path 294" class="cls-1 color-1" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)" />
                                        <path id="Path_297" data-name="Path 297" class="cls-2 color-1" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)" />
                                        <path id="Path_296" data-name="Path 296" class="cls-3 color-1" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)" />
                                        <path id="Path_295" data-name="Path 295" class="cls-4 color-1" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRICING PART ENDS ======-->

    <!--====== CALL TO ACTION PART START ======-->

    <section id="call-to-action" class="relative overflow-hidden bg-blue-600 call-to-action">
        <div class="absolute top-0 left-0 w-1/2 h-full call-action-image">
            <img src="assets/images/call-to-action.png" alt="call-to-action">
        </div>

        <div class="container-fluid">
            <div class="justify-end row">
                <div class="w-full lg:w-1/2">
                    <div class="py-32 mx-auto text-center call-action-content">
                        <h2 class="mb-5 text-5xl font-semibold leading-tight text-white">Quieres recibir actualizaciones?</h2>
                        <p class="mb-6 text-white">Te avisaremos cuando se registre un nuevo libro.</p>
                        <form action="#" class="relative w-5/6 mx-auto md:w-2/3 call-newsletter">
                            <i class="absolute top-0 left-0 pt-3 pl-5 text-xl text-blue-600 lni-envelope"></i>
                            <input type="email" placeholder="john@email.com" class="w-full py-3 pl-12 pr-40 bg-white rounded-full focus:outline-none">
                            <button type="submit" class="absolute top-0 right-0 px-6 py-2 mt-1 mr-1 font-bold text-white duration-300 bg-blue-600 rounded-full hover:bg-blue-500">Suscribirse</button>
                        </form>
                    </div> <!-- slider-content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->

    <!--====== TESTIMONIAL THREE PART START ======-->

    <section id="testimonial" class="testimonial-area py-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title">Nuestras tesis</h4>
                        <p class="text">Revisa las tesis más populares de nuestros estudiantes, seguro te ayudara a avanzar tu proyecto y puede servirte de inspiración!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <div class="row">
                <div class="w-full">
                    <div class="row testimonial-active">
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="assets/images/author-3.jpg" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="text-lg font-semibold text-gray-900">Isabela Moreira</h6>
                                    <span class="text-sm text-gray-700">CEO, GrayGrids</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="assets/images/author-1.jpg" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="text-lg font-semibold text-gray-900">Fiona</h6>
                                    <span class="text-sm text-gray-700">Lead Designer, UIdeck</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="assets/images/author-2.jpg" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="text-lg font-semibold text-gray-900">Elon Musk</h6>
                                    <span class="text-sm text-gray-700">CEO, SpaceX</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="assets/images/author-4.jpg" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="text-lg font-semibold text-gray-900">Fajar Siddiq</h6>
                                    <span class="text-sm text-gray-700">CEO, MakerFlix</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL THREE PART ENDS ======-->

    <!--====== CLIENT LOGO PART START ======-->

    <section class="py-16 bg-gray-100 client-logo-area">
        <div class="container">
            <div class="items-center row">
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="assets/images/client_logo_01.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="assets/images/client_logo_02.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="assets/images/client_logo_03.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="assets/images/client_logo_04.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CLIENT LOGO PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area py-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title">Ubícanos en</h4>
                        <p class="text">Recuerda que los prestamos se realizan de manera presencial, visita nuestro campus universitario.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="contact-form">
                        <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="w-full md:w-1/2">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <input type="text" name="name" placeholder="Your Name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <input type="email" name="email" placeholder="Your Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <input type="text" name="subject" placeholder="Subject" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <input type="text" name="phone" placeholder="Phone" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="w-full">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <textarea rows="5" placeholder="Your Mesaage" name="message" data-error="Please, leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="mx-4 form-message"></p>
                                <div class="w-full">
                                    <div class="mx-4 mt-2 text-center single-form form-group">
                                        <button type="submit" class="main-btn gradient-btn focus:outline-none">send message</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="bg-gray-100 footer-area">
        <div class="mb-16 footer-widget">
            <div class="container">
                <div class="row">
                    <div class="w-full">
                        <div class="items-end justify-between block mb-8 footer-logo-support md:flex">
                            <div class="flex items-end footer-logo">
                                <a class="mt-8" href="index.html"><img src="assets/images/logo.svg" alt="Logo"></a>

                                <ul class="flex mt-8 ml-8 footer-social">
                                    <li><a href="javascript:void(0)"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-instagram-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div> <!-- footer logo -->

                        </div> <!-- footer logo support -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6">
                        <div class="mb-8 footer-link">
                            <h6 class="footer-title">Company</h6>
                            <ul>
                                <li><a href="javascript:void(0)">About</a></li>
                                <li><a href="javascript:void(0)">Contact</a></li>
                                <li><a href="javascript:void(0)">Career</a></li>

                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <div class="mb-8 footer-link">
                            <h6 class="footer-title">Product & Services</h6>
                            <ul>
                                <li><a href="javascript:void(0)">Products</a></li>
                                <li><a href="javascript:void(0)">Business</a></li>
                                <li><a href="javascript:void(0)">Developer</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="w-full sm:w-5/12 md:w-1/3 lg:w-1/4">
                        <div class="mb-8 footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                                <li><a href="javascript:void(0)">Support Center</a></li>
                                <li><a href="javascript:void(0)">FAQ</a></li>
                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="w-full sm:w-7/12 md:w-1/2 lg:w-1/3">
                        <div class="mb-8 footer-newsletter">
                            <h6 class="footer-title">Subscribe Newsletter</h6>
                            <div class="newsletter">
                                <form action="#" class="relative mb-4">
                                    <input type="text" placeholder="Your Email" class="w-full py-3 pl-6 pr-12 duration-300 bg-gray-200 border border-gray-200 rounded-full focus:border-blue-600 focus:outline-none">
                                    <button type="submit" class="absolute top-0 right-0 mt-3 mr-6 text-xl text-blue-600">
                                        <i class="lni-angle-double-right"></i>
                                    </button>
                                </form>
                            </div>
                            <p class="font-medium text-gray-900">Subscribe weekly newsletter to stay upto date. We don’t send spam.</p>
                        </div> <!-- footer newsletter -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->

    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->


    <!--====== jquery js ======-->
    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{asset('assets/js/ajax-contact.js')}}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/scrolling-nav.js')}}"></script>

    <!--====== Validator js ======-->
    <script src="{{asset('assets/js/validator.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>