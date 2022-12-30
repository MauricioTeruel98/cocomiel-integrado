@extends('layouts.apppublic')

@section('jsheader')

<head>
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">
    <title>Cocomiel - Home page</title>
</head>
@endsection

@section('content')

<a name="home"></a>

<header class="hero">

    <div class="hero_container container">

        <div class="hero_text">

            <h1 class="hero_title">Coco Miel</h1>
            <p class="hero_copy">Aprender Jugando</p>

        </div>

        <img src="{{ asset('img/Logo.png') }}" alt="" class="hero_img">

    </div>

</header>

<main class="main">

    <section class="banner container">

        <div class="banner_container">
            <img class="banner_img" src="{{ asset('img/Logo.png') }}" alt="">
            <h2 class="banner_name">Cocomiel</h2>
            <p class="banner_paragraph">Juegos y juguetes basados en la metodologia Montessori, Waldorf y Pikler
            </p>
        </div>

    </section>

    <section class="banner container" style="border-bottom: none;">

        <div class="banner_container">
            <h2 class="banner_name_product">Nueva plaza de alquiler!</h2>
            <div class="d-flex">
                <div style="width: 50%;">
                    <figure class="about_picture">
                        <img src="{{ asset('img/images/productos.jpg') }}" alt="" class="about_img_products">
                    </figure>
                </div>
                <div>
                    <p class="about_paragraph"> Entra aqui para ver más info!!</p>
                    <a href="{{ route('plaza-patapata') }}" class="btn">Plaza Pata Pata</a>
                </div>
            </div>
        </div>

    </section>

    <section class="parallax" style="background-image: url('{{ asset('img/images/parallax.jpg') }}'); background-position-y: 100%; margin: 100px auto;">
        <div style="width: 100%; height: 100%; padding: 70px 0px; background-color: #00000050;">
            <div class="container">
                <div style="display:flex; justify-content: center; flex-direction: column; align-items: center;">
                    <div>
                        <h2 class="banner_name" style="color: #fff; font-family: 'Amatic SC', cursive; font-size: 60px;">NUEVA PLAZA</h2>
                    </div>
                    <div>
                        <a href="{{ route('plaza-patapata') }}" class="btn">Click Aqui!!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner container" style="border-bottom: none;">

        <div class="banner_container">
            <h2 class="banner_name_product">Mira todos nuestros productos!!</h2>
            <figure class="about_picture">
                <img src="{{ asset('img/images/productos.jpg') }}" alt="" class="about_img_products">
            </figure>
            <a href="{{ route('products') }}" class="btn">Ver todos los productos</a>
        </div>

    </section>

    <a name="plaza"></a>

    <section class="about container__plaza">

        <div class="about_plaza">

            <h2 class="title title--border">Sabias que contamos con una plaza de alquiler ??</h2>

            <p class="about_paragraph">Para que tus peques la pasen bomba en su cumple o en una tarde con amigos, llego <i><strong>La Plaza en Casa!!</strong></i> &#127905;. Contratala para tu evento
            </p>

            <p class="about_paragraph">Por eso les proponemos est&#225; novedosa y divertida opci&#243;n!
                Brindandoles un juego libre &#129336;‍♂️ con un mont&#243;n de beneficios debido a la multifuncionalidad que
                todos nuestros juegos tienen &#128171;</p>
            <p class="about_paragraph">La plaza est&#225; recomendada para ni&#241;xs de 0 a 5 a&#241;os &#128270; siempre con la
                supervisi&#243;n de un adulto.

                La Plaza incluye &#128071;

            <p class="about_paragraph">
                &#127880;Balancin <br>
                &#127880;Pasarela de equilibrio <br>
                &#127880;Cubo + Escalador/Tobogan <br>
                &#127880;Triángulo Pikler + Rampa <br>
                &#127880;Pata Pata <br>
            </p>
            </p>
            <p class="about_paragraph">Estos elementos tienen la ventaja de utilizarlos en diferentes y variadas
                posiciones estimulando la coordinacion de brazos y piernas &#129495;‍♀️ el equilibrio &#129336;‍♀️ el
                reconocimiento del propio cuerpo en el espacio &#127939;‍♂️ y sobre todo dejar volar la Imaginaci&#243;n &#128165;</p>
            <p class="about_paragraph">Podes <strong>ALQUILARLA</strong> para que tus pequeños pasen una tarde
                divertidisima o para compartirla con sus amiguitos en cualquier evento al aire libre &#127795;

                Una nueva opci&#243;n para que tus ni&#241;xs <strong>APRENDAN JUGANDO</strong> ‍♂️</p>
            <a href="https://api.whatsapp.com/send?phone=+5493815523529&text=Hola Noe, Me interesa alquilar la plaza! Necesito más info" class="whatsapp_link">
                <p class="about_paragraph">Clickea aqui y envianos un mensaje para consultar precios y disponibilidad!!</p>
            </a>

            <a href="{{ route('plaza') }}" class="btn">Ir a la Plaza</a>


        </div>

        <div class="container__slider">
            <div class="slider" id="slider">
                <div class="slider__section">
                    <img src="{{ asset('img/images/plaza.jpeg') }}" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{ asset('img/images/patapata.jpeg') }}" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{ asset('img/images/escalador.jpeg') }}" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{ asset('img/images/balancin.jpeg') }}" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{ asset('img/images/cubo.jpeg') }}" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{ asset('img/images/rampa.jpeg') }}" alt="" class="slider__img">
                </div>
            </div>

            <div class="slider__btn slider__btn--right" id="btn-right"><span>&#128073;&#127996;</span></div>
            <div class="slider__btn slider__btn--left" id="btn-left"><span>&#128072;&#127996;</span></div>

        </div>

    </section>

    <a name="quienes_somos"></a>

    <section class="about container">

        <figure class="about_picture">
            <img src="{{ asset('img/quienes-somos.webp') }}" alt="" class="about_img">
        </figure>

        <div class="about_plaza">

            <h2 class="title title--border">¿Quienes somos?</h2>

            <p class="about_paragraph">Somos dos amigas y madres &#128109; que en un momento de nuestras vidas, nos
                encontrabamos con nuestros dias en pausa laboralmente. Por lo que una tarde &#127749; decidimos sentarnos
                bajo un arbolito &#127795; y comenzar a pintar &#127912; Nunca m&#225;s pudimos parar y asi nacio nuestro amor por los
                pinceles y colores &#127752;</p>

            <p class="about_paragraph">Esta situacion mundial &#129440; nos volvio a dejar como hace un tiempo atras, pero
                esta vez pudimos apostar a nuestros sue&#241;os &#128170; As&#237; es como Coty, investigo sobre la Pedagog&#237;a
                Montessori y comenz&#243; a ponerla en pr&#225;ctica. Luego, Noe se incorpor&#243; para darle vida a muchas ideas
                nuevas y poner su arte en cada uno de nuestros productos &#128105;‍&#127912;</p>

            <p class="about_paragraph">Noe &amp; Coty</p>

        </div>

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
            Sitio web creado por &copy; Mauricio Teruel : <a href="mailto:mauricioteruel98@gmail.com?">mauricioteruel98@gmail.com</a>
        </p>

    </div>

</footer>

@endsection