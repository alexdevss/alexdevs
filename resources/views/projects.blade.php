@extends('layouts.layout')
@section('title', "Proyectos | alexdevs")
@section('view', 'projects')
@section('main')
<div class="container">
    <div class="projects">
        <div class="white-box shadow-lg p-lg-5 py-5 project wow fadeInDown" data-wow-delay="1.5s">
            <h1 class="text-center mb-5">AUTOS ROSO</h1>
            <div class="row m-3">
                <div class="col-lg-6 col-12">
                    <p class="mb-sm-3 mb-5">
                        <span>Autos Roso</span> es una empresa de compra-venta de vehículos con sede
                        en diferentes islas del archipiélago Canario.
                        Este fue mi primer trabajo publicado y se dio a través de
                        una colaboración con la agencia <span>Wirehammer</span>.
                    </p>
                    <ul class="project-stack p-sm-0">
                        <li class="d-flex justify-content-start align-items-center">
                            <img src="{{asset('img/key_icons.png')}}" class="mr-3">
                            <p class="mb-0">Sector automovilístico</p>
                        </li>
                        <li class="d-flex justify-content-start align-items-center">
                            <img src="{{asset('img/key_icons.png')}}" class="mr-3">
                            <p class="mb-0">Solución landing page + ERP (Backpanel personalizado)</p>
                        </li>
                        <li class="d-flex justify-content-start align-items-center">
                            <img src="{{asset('img/key_icons.png')}}" class="mr-3">
                            <p class="mb-0">Java y Google App Engine</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center mt-lg-0 mt-5">
                    <img src="{{asset('img/ar.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-lg-3 mt-5">
                <a href="https://autosroso.com/" class="button rounded-pill px-5 py-2 animation" target="_blank">
                    Ver Autos Roso
                </a>
            </div>
        </div>
    </div>
</div>
<div class="d-100"></div>
<div class="d-100"></div>
<div class="banner mt-5  d-flex flex-column justify-content-center align-items-start">
    <div class="filter"></div>
    <h1 class="text-center w-100 mb-5 wow fadeInDown">¿A QUÉ ESPERAS PARA SER EL SIGUIENTE?</h1>
    <p class="text-center w-100 wow fadeInDown" data-wow-delay=".3s">Cuéntame tu idea</p>
    <div class="d-flex justify-content-center align-items-center w-100 mt-5 wow fadeInDown button-father" data-wow-delay=".6s">
        <a href="/contact" class="button rounded-pill px-5 py-2 mt-4 animation">
            CONTACTA YA
        </a>
    </div>
</div>
<div class="d-100"></div>
<div class="d-100"></div>
<div class="d-100"></div>
<div class="d-100"></div>
<div class="d-100 d-none d-sm-block"></div>
<div class="d-100 d-none d-sm-block"></div>
@endsection