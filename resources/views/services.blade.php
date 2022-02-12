@extends('layouts.layout')
@section('title', 'Servicios | alexdevs')
@section('view', 'services')
@section('main')
<div class="container">
    <div class="white-box p-5 shadow-lg service wow fadeInDown" data-wow-delay="1.5s">
        <h1 class="text-center mb-5">LANDING PAGE</h1>
        <div class="row">
            <div
                 class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center align-items-lg-start">
                <h3 class="mb-4">¿QUÉ ES Y PARA QUE SIRVE?</h3>
                <p class="text-lg-left text-center">
                    La definición más acertada para ese tipo de página web
                    es la de un <span>representante de venta digital.</span>
                </p>
                <p class="text-lg-left text-center">
                    El objetivo final de este tipo de webs es convertir al visitante
                    en cliente a través de elementos de fidelización como un
                    <span>formulario de contacto</span>
                </p>
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center">
                <img src="{{asset('img/positive_rounded_brand.png')}}" alt="" class="img-fluid logo-services mb-5">
                <p class="img-foot text-center">¡ESTO ES UNA LANDING PAGE!</p>
            </div>
        </div>
    </div>
    <div class="d-50"></div>
    <div class="d-50"></div>
    <div class="d-flex justify-content-center align-items-center mt-5 wow fadeInDown" data-wow-delay="1.8s">
        <a href="/contact" class="button rounded-pill py-2 px-5 animation">Más información</a>
    </div>
</div>
<div class="d-50"></div>
<div class="d-50"></div>
<div class="banner mt-5  d-flex flex-column justify-content-center align-items-start">
    <div class="filter"></div>
    <div class="container d-flex flex-column justify-content-center align-items-lg-start align-items-center">
        <h1 class="mb-lg-5 mb-4 wow fadeInDown">¿POR QUÉ UNA LANDING PAGE?</h1>
        <p class="wow fadeInDown text-lg-left text-center" data-wow-delay="1s">
            Una página web es <span>de las mejores herramientas</span> para potenciar la visibilidad
            de tu negocio en internet. Además de fomentar la captación de clientes,
            tener página web es sinónimo de <span>profesionalidad y crecimiento.</span>
            <br>
            Si eres una <span>startup</span> y quieres comenzar a promocionar tu negocio, esta es tu solución.
        </p>

    </div>
    <div class="recomended text-center d-flex justify-content-center align-items-center flex-column wow fadeInDownBig"
         data-wow-duration="3s" data-wow-delay="1s">
        <img src="{{asset('img/svg/marker.svg')}}" alt="" class="img-fluid img-marker">
        <h1 class="wow fadeInDown">SERVICIO <br>RECOMENDADO</h1>
        <img src="{{asset('img/svg/number_one.svg')}}" alt="" class="img-fluid mt-3 img-one">
    </div>
</div>
<div class="d-100"></div>
<div class="d-100"></div>
<div class="values">
    <div class="container big-container">
        <div class="row">
            <div class="col-lg-6 col-12 wow fadeIn mb-5 mb-lg-0" data-wow-delay="0.3s" data-wow-duration="1s">
                <div class="white-box p-4 shadow-lg value">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center flex-column">
                            <h3 class="text-center mb-4">MENTORIA</h3>
                            <p class="text-center">
                                Te ofreceré ideas para
                                mejorar tu negocio y te guiaré para buscar la solución perfecta que se adapte a tus
                                necesidades
                            </p>
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center img-column">
                            <img src="{{asset('img/svg/i.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 wow fadeIn mb-lg-0" data-wow-delay="0.5s" data-wow-duration="1s">
                <div class="white-box p-4 shadow-lg value">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center flex-column">
                            <h3 class="text-center mb-4">PROFESIONALIDAD</h3>
                            <p class="text-center">
                                El desarrollo web es una cadena de producción y tiene sus diferentes procesos.
                                Me centro en todos para <span>ofrecerte lo mejor</span>
                            </p>
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center img-column">
                            <img src="{{asset('img/svg/professionality.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-50"></div>
        <div class="row">
            <div class="col-lg-6 col-12 wow fadeIn mb-5 mb-lg-0" data-wow-delay="0.7s" data-wow-duration="1s">
                <div class="white-box p-4 shadow-lg value">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center flex-column">
                            <h3 class="text-center mb-4">COMPROMISO</h3>
                            <p class="text-center">
                                Me gustan los retos y a lo que me dedico.
                                <span>Juntos podemos potenciar tu proyecto</span>
                            </p>
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center img-column">
                            <img src="{{asset('img/svg/handshake.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 wow fadeIn mb-lg-0" data-wow-delay="0.9s" data-wow-duration="1s">
                <div class="white-box p-4 shadow-lg value">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center flex-column">
                            <h3 class="text-center mb-4">CALIDAD</h3>
                            <p class="text-center">
                                Trabajo para desarrollar <span>soluciones eficientes</span>,
                                sin tiempos de espera y fáciles de utilizar
                            </p>
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center img-column">
                            <img src="{{asset('img/svg/like.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-100"></div>
<div class="d-100"></div>
<div class="container">
    <div class="white-box p-5 shadow-lg service wow fadeInDown" data-wow-delay="1s">
        <h1 class="text-center mb-5">SOLUCIÓN ERP</h1>
        <div class="row">
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center align-items-lg-start">
                <h3 class="mb-4">¿QUÉ ES Y PARA QUE SIRVE?</h3>
                <p class="text-center text-lg-left">
                    Un ERP es un <span>Planificador de Recursos Empresariales.</span>
                    La implementación de un software de este tipo en tu empresa
                    <span> agilizará y automatizará</span> varios de los procesos administrativos internos.
                    Una de las ventajas de implementar un ERP personalizado
                    es la <span>adaptación a las necesidades reales.</span>
                </p>
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center">
                <img src="{{asset('img/svg/erp.svg')}}" alt="" class="img-fluid logo-services">
            </div>
        </div>
    </div>
    <div class="d-50"></div>
    <div class="d-50"></div>
    <div class="d-flex justify-content-center align-items-center mt-5 wow fadeInDown" data-wow-delay="1.8s">
        <a href="/contact" class="button rounded-pill py-2 px-5 animation">Más información</a>
    </div>
</div>
<div class="d-100"></div>
<div class="d-100"></div>
<div class="banner-2 mt-5  d-flex flex-column justify-content-center align-items-start">
    <div class="filter"></div>
    <div class="container d-flex flex-column justify-content-center align-items-lg-start align-items-center">
        <h1 class="mb-5 wow fadeInDown">¿POR QUÉ UN ERP?</h1>
        <p class="wow fadeInDown text-lg-left text-center" data-wow-delay="0.5s">
            <span>Es hora de innovar y el COVID nos lo ha recordado.</span>
            <br>
            Un ERP te permite administrar las tareas que necesites desde
            cualquier lado y desde cualquier dispositivo. Gana tiempo, potencia
            el rendimiento de tu empresa y contrólala al cien por cien.
        </p>

    </div>
</div>
<div class="d-100"></div>
<div class="callToAction">
    <div class="container">
        <div class="white-box p-5 d-flex flex-column justify-content-center align-items-center shadow-lg mt-5 wow fadeInDown" data-wow-delay="0.5s">
            <h1>¿BUSCAS ALGO DIFERENTE?</h1>
            <p class="mt-2">¡Identifiquemos el problema y encontremos una solución!</p>
            <a href="/contact" class="button rounded-pill px-5 py-2 mt-4 animation">
                Contactar
            </a>
        </div>
    </div>
</div>
<div class="d-100"></div>
<div class="d-100"></div>
<div class="d-100"></div>
<div class="d-100"></div>
<div class="d-none d-sm-block d-100"></div>
<div class="d-none d-sm-block d-100"></div>
@endsection