<head>
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">
    <title>Cocomiel - Plaza</title>
</head>

@extends('layouts.apppublic')
@extends('layouts.navbarpublic')

@section('content')

<header class="hero-plaza">

    <div class="container">

        <div class="hero_text_plaza">

            <h1 class="hero_title_plaza">Bienvenidos a la Plaza en casa</h1>

        </div>

    </div>

</header>

<main class="main">

    <section class="about container">

        <div class="about_plaza">

            <h2 class="title title--border">Aqui podés ver como los niños disfrutan de la Plaza !!</h2>

        </div>

        <figure class="about_picture">
            <img src="{{ asset('img/images/plaza.jpeg') }}" alt="" class="about_img">
        </figure>

    </section>

    <section class="about container">

        <figure class="about_picture">
            <img src="{{ asset('img/images/plaza3.jpeg') }}" alt="" class="about_img">
        </figure>

        <figure class="about_picture">
            <img src="{{ asset('img/images/plaza4.jpeg') }}" alt="" class="about_img">
        </figure>

        <figure class="about_picture" style="margin-top: 30px;">
            <img src="{{ asset('img/images/plaza5.jpeg') }}" alt="" class="about_img">
        </figure>

    </section>

    <section class="about container">

        <figure class="about_picture">
            <img src="{{ asset('img/images/plaza6.jpeg') }}" alt="" class="about_img">
        </figure>

        <figure class="about_picture">
            <img src="{{ asset('img/images/plaza8.jpeg') }}" alt="" class="about_img">
        </figure>

        <figure class="about_picture" style="margin-top: 30px;">
            <img src="{{ asset('img/images/plaza7.jpeg') }}" alt="" class="about_img">
        </figure>

        <figure class="about_picture">
            <img src="{{ asset('img/images/plaza2.jpeg') }}" alt="" class="about_img">
        </figure>

    </section>

    <section class="about container">

        <figure class="about_picture">
            <img src="{{ asset('img/images/plaza9.jpeg') }}" alt="" class="about_img">
        </figure>

        <figure class="about_picture">
            <img src="{{ asset('img/images/plaza10.jpeg') }}" alt="" class="about_img">
        </figure>

        <figure class="about_picture" style="margin-top: 30px;">
            <img src="{{ asset('img/images/plaza1.jpeg') }}" alt="" class="about_img">
        </figure>

    </section>

</main>

<footer class="footer">

    <div class="footer_container container">

        <a name="contact"></a>

        <div class="footer_contact">
            <div class="footer_text">

                <h2 class="title">Ten&#233;s alguna duda?</h2>

                <p class="footer_copy">Si tienes alguna duda pod&#233;s contactarme en cualquiera de mis redes sociales
                </p>

                <div class="footer_social">

                    <a href="https://www.facebook.com/CocoMiel.AprenderJugando/" class="footer_link">
                        <img src="{{ asset('img/bxl-facebook.svg') }}" alt="" class="footer_icon">
                    </a>
                    <a href="https://www.instagram.com/cocomiel.a.j/" class="footer_link">
                        <img src="{{ asset('img/bxl-instagram.svg') }}" alt="" class="footer_icon">
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=+5493815523529&text=Hola Noe, Me gustaría que me pases mas info!" class="footer_link">
                        <img src="{{ asset('img/bxl-whatsapp.svg') }}" alt="" class="footer_icon">
                    </a>

                </div>

            </div>

            <figure class="footer_picture">
                <img class="footer_img" src="{{ asset('img/Sent messages _Isometric.svg') }}" alt="">
            </figure>

        </div>

        <p class="footer_copyright">
            Sitio web creado por &copy; Mauricio Teruel : <a href="">mauricioteruel98@gmail.com</a>
        </p>

    </div>

</footer>

@endsection