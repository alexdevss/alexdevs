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
    <main
        class="d-flex flex-column justify-content-sm-start justify-content-md-center justify-content-center align-items-center">
        <div class="w-100 filter"></div>

        <div class="container">
            <div class="d-sm-flex justify-content-center align-items-center flex-column social-media">
                <a href="https://www.instagram.com/alexdevs_/?hl=es"
                    class="social-network d-flex justify-content-evenly align-items-center rounded-pill px-3 py-1 mb-3 animation wow fadeInDown"
                    data-wow-delay="2s">
                    <img src="{{asset('/img/svg/instagram.svg')}}" alt="instagram">
                    <p class="mb-0 ml-2">alexdevss_</p>
                </a>
                <a href="https://github.com/alexdevss"
                    class="social-network d-flex justify-content-evenly align-items-center rounded-pill px-3 py-1 mb-3 animation wow fadeInDown"
                    data-wow-delay="2.3s">
                    <img src="{{asset('/img/svg/github.svg')}}" alt="github">
                    <p class="mb-0 ml-2">alexdevss</p>
                </a>
                <a href="https://twitter.com/alexdevs3"
                    class="social-network d-flex justify-content-evenly align-items-center rounded-pill px-3 py-1 animation wow fadeInDown"
                    data-wow-delay="2.6s">
                    <img src="{{asset('/img/svg/twitter.svg')}}" alt="instagram">
                    <p class="mb-0 ml-2">alexdevss_</p>
                </a>
            </div>
            <div class="mobile-brand d-sm-none d-flex justify-content-center align-items-center">
                <img src="{{asset('img/positive_rounded_brand.png')}}" alt="" class="img-fluid wow rollIn"
                    data-wow-delay="0.5s">
            </div>
            <h1 class="mb-0 big-title text-center mb-sm-0 mb-3 wow fadeInDown d-sm-block d-none">alexdevs</h1>

            <h3 class="sub-title text-center wow fadeInDown" data-wow-delay="0.3s">
                PAGINAS PARA DESPEGAR
                {{-- <span class="typer" id="main" data-words="PAGINAS PARA DESPEGAR" data-delay="100" data-loop="false"
                    data-colors="#272727"></span> --}}
            </h3>
        </div>
        <div class="container">
            <div class="targets">
                <p class="mb-md-5 mb-3 question text-center wow fadeInDown" data-wow-delay="0.5s">¿Qué andas buscando?
                </p>
                <div class="row row-eq-height animation">
                    <div class="col-12 col-lg-4 mb-lg-0 mb-3">
                        <div class="target shadow p-3 d-flex justify-content-center align-items-center flex-column animation wow fadeInDown"
                            data-wow-delay="1s">
                            <p class="target-title text-center mb-0">Servicios</p>
                            <div
                                class="target-text-father d-flex flex-column justify-content-center align-items-center animation">
                                <p class="target-text text-center">
                                    <span>Explora</span> las diferentes soluciones
                                    tecnológicas y escoge la que más se
                                    adapte a ti y a tu negocio
                                </p>
                                <a href="/services" class="target-button rounded-pill px-5 py-1 mt-4 animation">
                                    Ver servicios
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-lg-0 mb-3">
                        <div class="target shadow p-3 d-flex justify-content-center align-items-center flex-column animation wow fadeInDown"
                            data-wow-delay="1.3s">
                            <p class="target-title text-center mb-0">Contacto</p>
                            <div
                                class="target-text-father d-flex flex-column justify-content-center align-items-center animation">
                                <p class="target-text text-center">
                                    <span>Envíame</span> un correo electrónico
                                    requiriendo la información que
                                    necesites.
                                </p>
                                <a href="/contact" class="target-button rounded-pill px-5 py-1 mt-4 animation">
                                    Contactar
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-lg-0 mb-3">
                        <div class="target shadow p-3 d-flex justify-content-center align-items-center flex-column animation wow fadeInDown"
                            data-wow-delay="1.6s">
                            <p class="target-title text-center mb-0">Sobre mí</p>
                            <div
                                class="target-text-father d-flex flex-column justify-content-center align-items-center animation">
                                <p class="target-text text-center">
                                    <span>Conóceme,</span> mi trayectoria
                                    profesional y los trabajos
                                    realizados
                                </p>
                                <a href="/about" class="target-button rounded-pill px-5 py-1 mt-4 animation">
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
<script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>

</html>