@extends('layouts.layout')
@section('title', "Contacto | alexdevs")
@section('view', 'contact')
@section('main')
<div class="container">
    <div class="white-box shadow-lg p-4 pb-5">
        <h1 class="mb-5 text-center">¿QUIERES SER ATENDIDO?</h1>
        <form action="#" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-12 offset-lg-1">
                    <div class="form-group">
                        <label for="name">¿Cómo te llamas?</label>
                        <input type="text" class="form-control rounded" id="name" placeholder="Ej: Peter">
                    </div>
                    <div class="form-group">
                        <label for="last_names">¿Cuáles son tus apellidos?</label>
                        <input type="text" class="form-control rounded" id="last_name" placeholder="Ej: Parker">
                    </div>
                    <div class="form-group">
                        <label for="phone">¿Cuál es tu número de contacto?</label>
                        <input type="text" class="form-control rounded" id="phone" placeholder="Ej: 123456789">
                    </div>
                    <div class="form-group">
                        <label for="email">¿Cuál es tu correo electrónico?</label>
                        <input type="text" class="form-control rounded" id="email"
                            placeholder="Ej: peter.parker@gmail.com">
                    </div>
                </div>
                <div class="col-lg-4 col-12 offset-lg-2">
                    <div class="form-group">
                        <label for="description">Explícame lo que necesitas</label>
                        <textarea name="description" id="description" class="d-block rounded p-2"
                            placeholder="Ej: Necesito una landing page para... He pensado en... Me gustaría que fuera como..."></textarea>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="ttcc" id="ttcc">
                        <label class="form-check-label" for="defaultCheck1">
                            He leído y acepto los términos y condiciones de uso
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="lopd" id="lopd">
                        <label class="form-check-label" for="lopd">
                            He leído y acepto la política de privacidad
                        </label>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#" class="button rounded-pill px-5 py-2 mt-4 animation">
                            Enviar
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="d-100"></div>
<div class="d-100"></div>
<div class="d-50"></div>
<div class="d-50"></div>
@endsection