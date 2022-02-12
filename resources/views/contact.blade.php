@extends('layouts.layout')
@section('title', "Contacto | alexdevs")
@section('view', 'contact')
@section('main')
<div class="container">
    <div class="response-box hide mb-5 rounded-pill text-center p-3 wow fadeInDown">
    </div>
    <div class="white-box shadow-lg p-4 pb-5 wow fadeInDown" data-wow-delay="1s">
        <h1 class="mb-5 text-center">¿QUIERES SER ATENDIDO?</h1>
        <form action="/sendEmail" method="POST" id="contactForm">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-12 offset-lg-1">
                    <div class="form-group">
                        <label for="name">¿Cómo te llamas?</label>
                        <input type="text" class="form-control rounded" id="name" name="name" placeholder="Ej: Peter">
                    </div>
                    <div class="form-group">
                        <label for="last_names">¿Cuáles son tus apellidos?</label>
                        <input type="text" class="form-control rounded" id="last_name" name="last_names"
                               placeholder="Ej: Parker">
                    </div>
                    <div class="form-group">
                        <label for="phone">¿Cuál es tu número de contacto?</label>
                        <input type="text" class="form-control rounded" id="phone" name="phone"
                               placeholder="Ej: 123456789">
                    </div>
                    <div class="form-group">
                        <label for="email">¿Cuál es tu correo electrónico?</label>
                        <input type="text" class="form-control rounded" id="email"
                               placeholder="Ej: peter.parker@gmail.com" name="email">
                    </div>
                </div>
                <div class="col-lg-4 col-12 offset-lg-2">
                    <div class="form-group">
                        <label for="description">Explícame lo que necesitas</label>
                        <textarea name="description" id="description" class="d-block rounded p-2"
                                  placeholder="Ej: Necesito una landing page para... He pensado en... Me gustaría que fuera como..."></textarea>
                    </div>
                    <div class="d-flex justify-content-start align-items-center mb-sm-3">
                        <input type="checkbox" value="ttcc" id="ttcc">
                        <label class="form-check-label lopd ml-3" for="defaultCheck1">
                            Acepto los <a href="" class="standard-link">términos y condiciones de uso</a> y la <a
                               href="" class="standard-link">política de privacidad</a>
                        </label>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#" id="contactBtn" class="button rounded-pill px-5 py-2 mt-4 animation">
                            Enviar
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="d-100"></div>
    <div class="d-100"></div>
    <div class="d-100"></div>
</div>

@if ($sended == "1" && $sended != null)
<script>
    $(document).ready(function(){
        $(".response-box").addClass('alert-success')
        $(".response-box").html("Mensaje enviado correctamente")
        $(".response-box").removeClass('hide')
    })
    
</script>
@elseif ($sended == "0" && $sended != null)
<script>
    $(document).ready(function(){
        $(".response-box").addClass('alert-success')
        $(".response-box").html("Ha ocurrido un error. Inténtelo más tarde")
        $(".response-box").removeClass('hide')
        $(".response-box").addClass('alert-danger')
    })
</script>
@endif

<script>
    $("#contactForm").on("submit", function(e){
        let validated = false;
        if($("#name").val() == "" || $("#last_names").val() == "" || $("#phone").val() == "" || $("#email").val() == "" || $("#description").val() == ""){
            e.preventDefault();
            $(".response-box").addClass('alert-success')
            $(".response-box").html("Por favor, rellene todos los campos")
            $(".response-box").removeClass('hide')
            $(".response-box").addClass('alert-danger')
        } else {
            validated = true;
        }

        validated ? $("#contactBtn").html("Enviando...") : '';
    })
</script>

@endsection