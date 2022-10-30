@extends('layouts.layout')
@section('title', "Contacto | alexdevs")
@section('view', 'contact')
@section('main')
<div class="container">
    <div class="response-box hide mb-5 rounded-pill text-center p-3 wow fadeInDown">
    </div>
    <div class="white-box shadow-lg p-4 pb-5 wow fadeInDown" data-wow-delay="1s">
        <h1 class="mb-5 text-center">¿QUIERES SER ATENDIDO?</h1>
        <form action="{{url('/sendEmail')}}" method="POST" id="contactForm">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-12 offset-lg-1">
                    <div class="form-group">
                        <label for="name">¿Cómo te llamas?</label>
                        <input type="text" class="form-control rounded" id="name" name="name" placeholder="Ej: Peter">
                    </div>
                    <div class="form-group">
                        <label for="last_names">¿Cuáles son tus apellidos?</label>
                        <input type="text" class="form-control rounded" id="last_names" name="last_names"
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
                            Acepto los <a href="/legality" target="_blank" class="standard-link">términos y condiciones de uso</a> y la <a
                               href="/privacity" target="_blank" class="standard-link">política de privacidad</a>
                        </label>
                    </div>
                    <div class="g-recaptcha" id='divReCaptcha'></div>
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
    <div class="d-100"></div>
    <div class="d-100"></div>
</div>

<script>
    $(document).ready(function(){
    $('body').bind('cut copy paste', function(event) {
        event.preventDefault();
    });
    @if ($sended == "1" && $sended != null)
        $(".response-box").addClass('alert-success')
        $(".response-box").html("Mensaje enviado correctamente.")
    @elseif ($sended == "0" && $sended != null)
        $(".response-box").addClass('alert-danger')
        $(".response-box").html("Ha ocurrido un error. Inténtelo más tarde")
    @endif
    $(".response-box").removeClass('hide')
})
</script>

@endsection
@section('resources')
<script src="/js/contact.js"></script>
<script>
    function successCallback(token){
        // TODO: Fix CORS problems
        // Look for solution to accesible vars
    
        $.ajax('/captcha', 
        {
            method: 'POST',
            data: {
                token: token,
                _token: $("input[name='_token']").val()
            },
            success: function (data, status, xhr) {
                console.log(data)
                console.log(xhr)
                console.log(status)
            }
        });
    
    }
    function onLoadCallback () {
        grecaptcha.render('divReCaptcha', {
            sitekey: '{{env('RECAPTCHA_PUBLIC_KEY')}}',
            callback: successCallback,
        })
    }
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onLoadCallback&render=explicit"></script>
@endsection