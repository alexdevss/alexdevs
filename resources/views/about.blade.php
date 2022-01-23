@extends('layouts.layout')
@section('title', "Sobre mí | alexdevs")
@section('view', 'about')
@section('main')
<div class="container">
    <div class="white-box shadow-lg p-5 mb-5 wow fadeInDown" data-wow-delay="0.3s">
        <h1 class="text-center mb-5">ORIGEN Y OBJETIVO</h1>
        <p class="text-center">
            <span>alexdevs</span> nace principalmente del deseo de dar <span>visibilidad</span> a los trabajos
            realizados pero, fundamentalmente, para <span>apoyar y potenciar el crecimiento tecnológico</span> de
            aquellas empresas o emprendedores, que como yo, desean salir adelante.
        </p>
    </div>
    <div class="white-box shadow-lg p-5 mb-5 wow fadeInDown" data-wow-delay="0.8s">
        <h1 class="text-center mb-5">METODOLOGÍA Y FILOSOFÍA</h1>
        <p class="text-center">
            Me defino como una persona seria y perfeccionista para mi trabajo. Está mal que lo diga yo, pero, en serio,
            creéme.
            ¿Has escuchado eso de que cuando se cocina con paciencia y delicadeza, se obtiene un plato delicioso?
            <br><span>¡¡Lo mismo pasa con las webs!!</span><br>
            Si la hacemos con prisas y sin la atención y colaboración necesaria entre tú como cliente, y yo, como
            desarrollador, no obtendremos los mismos resultados que siguiendo los pasos correctos.
        </p>
    </div>
    <div class="white-box shadow-lg p-5 mb-5 wow fadeInDown" data-wow-delay="1s">
        <h1 class="text-center mb-5">TRAYECTORIA</h1>
        <p class="text-center">
            Tras varios años de formación reducidos en un Ciclo Superior en Administración de Sistemas,
            un curso en programación web a través de Tokio School, otro orientado al Marketing Digital, muchas
            horas de autoformación y proyecto publicado, <span>consigo mi primer y actual puesto como Desarrollador en
                Grupo1844</span>
        </p>
    </div>
    <div class="d-flex justify-content-center align-items-center wow fadeInDown" data-wow-delay=".5s">
        <a href="/contact" class="button rounded-pill px-5 py-2 mt-4 animation">
            CONTACTAR
        </a>
    </div>
    <div class="d-100"></div>
    <div class="d-100"></div>
    <div class="d-100"></div>
</div>
@endsection