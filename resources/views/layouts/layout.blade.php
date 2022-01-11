<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="animation">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
</head>

<body id="layout">
    <header>
        <div class="container position-relative">
            <img src="{{asset('img/positive_rounded_brand.png')}}" alt="logo"
                class="img-fluid interactive-logo no-showed animation" data-logo="positive">
            <img src="{{asset('img/negative_rounded_brand.png')}}" alt="logo"
                class="img-fluid interactive-logo showed animation wow rollIn" data-logo="negative">
            <div class="navbar-father position-relative px-3">
                <nav class="navbar navbar-expand-lg rounded-pill animation expanded slow-animation shadow">
                    <a class="d-none btn-logo ml-3" href="/">
                        <img src="{{asset('img/svg/LOGO_REDONDO_SIN_SOMBRA.svg')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-action="open">
                        <img src="{{asset('img/hamburger.png')}}" alt="" class="burger-menu">
                    </button>
                    <div class="w-100 navbar-collapse animation">
                        <img src="{{asset('img/svg/curve-banner.svg')}}" alt="" class="navbar-semicircle">
                        <ul
                            class="navbar-nav d-lg-flex d-none justify-content-evenly align-items-center m-auto w-100 animation">
                            <li class="nav-item ml-3">
                                <a class="nav-link animation" data-reference="services" href="/services">Servicios</a>
                            </li>
                            <li class="nav-item ml-3">
                                <a class="nav-link animation" data-reference="projects" href="/projects">Proyectos</a>
                            </li>
                            <li class="nav-item ml-3">
                                <a class="nav-link animation" data-reference="about" href="/about">Sobre mí</a>
                            </li>
                            <li class="nav-item ml-3">
                                <a class="nav-link animation" data-reference="contact" href="/contact">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main id="@yield('view')">
        @yield('main')
    </main>
    <footer id="footer">
        <div class="footer wow fadeInUpBig" data-wow-duration="1s">
            <img src="{{asset('img/svg/curve-banner.svg')}}" alt="" class="footer-semicircle">
            <div class="container big-container">
                <div
                    class="d-flex flex-lg-row flex-column justify-content-lg-evenly justify-content-evenly align-items-lg-start align-items-center footer-box">
                    <div class="d-flex justify-content-center align-items-center footer-brand">
                        <img src="{{asset('img/negative_rounded_brand.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="d-flex justify-content-evenly align-items-start w-100 footer-child">
                        <ul class="footer-list">
                            <li class="title mb-3">CONTENIDO</li>
                            <li class="mb-1"><a href="/">Home</a></li>
                            <li class="mb-1"><a href="/services">Servicios</a></li>
                            <li class="mb-1"><a href="/projects">Proyectos</a></li>
                            <li class="mb-1"><a href="/about">Sobre mí</a></li>
                            <li class="mb-1"><a href="/contact">Contacto</a></li>
                        </ul>
                        <ul class="footer-list">
                            <li class="title mb-3">REDES SOCIALES</li>
                            <li class="mb-1">
                                <a href=""
                                    class="d-flex justify-content-lg-start justify-content-center align-items-center icon-text animation">
                                    <img src="{{asset('img/svg/instagram.svg')}}" alt="" class="img-fluid">
                                    <p class="mb-0 ml-1">alexdevs_</p>
                                </a>
                            </li>
                            <li class="mb-1">
                                <a href=""
                                    class="d-flex justify-content-lg-start justify-content-center align-items-center icon-text animation">
                                    <img src="{{asset('img/svg/twitter.svg')}}" alt="" class="img-fluid">
                                    <p class="mb-0 ml-1">alexdevs3</p>
                                </a>
                            </li>
                            <li class="mb-1">
                                <a href=""
                                    class="d-flex justify-content-lg-start justify-content-center align-items-center icon-text animation">
                                    <img src="{{asset('img/svg/github.svg')}}" alt="" class="img-fluid">
                                    <p class="mb-0 ml-1">alexdevss</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-evenly align-items-start w-100 footer-child">
                        <ul class="footer-list">
                            <li class="title mb-3">CONTACTO</li>
                            <li class="mb-1">
                                <div
                                    class="d-flex justify-content-lg-start justify-content-center align-items-center icon-text">
                                    <img src="{{asset('img/svg/mail.svg')}}" alt="" class="img-fluid">
                                    <p class="mb-0 ml-1">alexxdevss@gmail.com</p>
                                </div>
                            </li>
                            <li class="mb-1">
                                <div
                                    class="d-flex justify-content-lg-start justify-content-center align-items-center icon-text">
                                    <img src="{{asset('img/svg/phone.svg')}}" alt="" class="img-fluid">
                                    <p class="mb-0 ml-1">625 128 986</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-list">
                            <li class="title mb-3">LOPD</li>
                            <li class="mb-1"><a href="#">Cookies</a></li>
                            <li class="mb-1"><a href="#">Aviso legal</a></li>
                            <li class="mb-1"><a href="#">Política de privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>