<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">

    <title>{{ config('app.name', 'Cocomiel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/styleproducts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media1024px.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media768px.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media500px.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media390px.css') }}">
</head>

<body>

    @yield('content')

    <script>
        const iconoMenu = document.querySelector('#icono-menu'),
            menu = document.querySelector('#menu');

        iconoMenu.addEventListener('click', (e) => {
            //Alteramos estilos para el menu y body
            menu.classList.toggle('active');
            document.body.classList.toggle('opacity');
            const rutaActual = e.target.getAttribute('src');

            if (rutaActual == 'assets/hamb-icono.png') {
                e.target.setAttribute('src', "{{ asset('img/hamb-icono.png') }}")
            } else {
                e.target.setAttribute('src', "{{ asset('img/hamb-icono.png') }}")
            }

        });

        function cerrarMenu() {
            menu.classList.add('active');
        }

        // Slider

        const slider = document.querySelector("#slider");
        let sliderSection = document.querySelectorAll(".slider__section");
        let sliderSectionLast = sliderSection[sliderSection.length - 1];

        const btnLeft = document.querySelector("#btn-left");
        const btnRight = document.querySelector("#btn-right");

        slider.insertAdjacentElement('afterbegin', sliderSectionLast);

        function Next() {
            let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
            slider.style.marginLeft = "-200%";
            slider.style.transition = "all 0.5s";
            setTimeout(function() {
                slider.style.transition = "none";
                slider.insertAdjacentElement('beforeend', sliderSectionFirst);
                slider.style.marginLeft = "-100%";
            }, 500); // = 0.5s
        }

        function Back() {
            let sliderSection = document.querySelectorAll(".slider__section");
            let sliderSectionLast = sliderSection[sliderSection.length - 1];
            slider.style.marginLeft = "0";
            slider.style.transition = "all 0.5s";
            setTimeout(function() {
                slider.style.transition = "none";
                slider.insertAdjacentElement('afterbegin', sliderSectionLast);
                slider.style.marginLeft = "-100%";
            }, 500); // = 0.5s
        }

        btnRight.addEventListener('click', function() {
            Next();
        });

        btnLeft.addEventListener('click', function() {
            Back();
        });

        setInterval(function() {
            Next();
        }, 5000);
    </script>

</body>

</html>