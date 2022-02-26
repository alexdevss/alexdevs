<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="animation">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>alexdevs</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
</head>

<body id="welcome" class="animation">
    <main class="d-flex flex-column justify-content-start justify-content-md-center align-items-center pt-5 pt-sm-0">
        <div class="w-100 filter"></div>

        <div class="container">
            <div class="d-sm-flex justify-content-center align-items-center flex-column social-media">
                <a href="https://www.instagram.com/alexdevs_/?hl=es" class="social-network d-flex justify-content-evenly align-items-center rounded-pill px-3 py-1 mb-3 animation wow fadeInDown" data-wow-delay="2s">
                    <img src="{{asset('/img/svg/instagram.svg')}}" alt="instagram">
                    <p class="mb-0 ml-2">alexdevss_</p>
                </a>
                <a href="https://github.com/alexdevss" class="social-network d-flex justify-content-evenly align-items-center rounded-pill px-3 py-1 mb-3 animation wow fadeInDown" data-wow-delay="2.3s">
                    <img src="{{asset('/img/svg/github.svg')}}" alt="github">
                    <p class="mb-0 ml-2">alexdevss</p>
                </a>
            </div>
            <div class="mobile-brand d-sm-none d-flex justify-content-center align-items-center">
                <img src="{{asset('img/positive_rounded_brand.png')}}" alt="" class="img-fluid wow rollIn" data-wow-delay="0.5s">
            </div>
            <h1 class="mb-0 big-title text-center mb-sm-0 mb-3 wow fadeInDown d-sm-block d-none">alexdevs</h1>
        </div>
        <div class="container">
            <div class="targets">
                <h3 class="mb-md-5 my-5 question text-center wow fadeInDown" data-wow-delay="0.5s">¿Qué andas buscando?</h3>
                <div class="d-50 d-none d-sm-block"></div>
                <div class="row row-eq-height animation">
                    <div class="col-12 col-lg-4 mb-lg-0 mb-3">
                        <div class="target shadow p-3 d-flex justify-content-between align-items-center flex-column animation wow fadeInDown" data-wow-delay="0.2s">
                            <p class="target-title text-center mb-0">Servicios</p>
                            <p class="target-text text-center">
                                <span>Explora</span> y <span>conoce</span> algunas de las soluciones tecnológicas
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="/services" class="target-button rounded-pill px-5 py-1 my-4 animation">
                                    Ver servicios
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-lg-0 mb-3">
                        <div class="target shadow p-3 d-flex justify-content-between align-items-center flex-column animation wow fadeInDown" data-wow-delay="0.5s">
                            <p class="target-title text-center mb-0">Contacto</p>
                            <p class="target-text text-center">
                                <span>Envíame</span> un correo electrónico
                                explicando tu idea
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="/contact" class="target-button rounded-pill px-5 py-1 my-4 animation">
                                    Contactar
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-lg-0 mb-3">
                        <div class="target shadow p-3 d-flex justify-content-between align-items-lg-center flex-column animation wow fadeInDown" data-wow-delay="0.5s">
                            <p class="target-title text-center mb-0">Sobre mí</p>
                            <p class="target-text text-center">
                                <span>Conoce</span> mi trayectoria
                                profesional
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="/about" class="target-button rounded-pill px-5 py-1 my-4 animation">
                                    Conóceme
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>