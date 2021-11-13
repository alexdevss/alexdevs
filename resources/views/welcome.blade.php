<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

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

<body>
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center wow fadeInUp">
            <h1>Estamos trabajando para ofrecerte lo mejor</h1>
            <img src="{{asset('img/rounded_brand.png')}}" alt="" class="fluid-img mt-5 brand wow rollIn"
                data-wow-delay="0.5s">
        </div>
    </div>
</body>

</html>