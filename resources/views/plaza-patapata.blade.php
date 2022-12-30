@extends('layouts.apppublic')

@section('jsheader')
<head>
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">
    <title>Cocomiel - Plaza Pata Pata</title>
</head>
@endsection


@section('content')

<header class="hero-plaza">

    <div class="container">

        <div class="hero_text_plaza">

            <h1 class="hero_title_plaza">Plazas de Alquiler</h1>

        </div>

    </div>

</header>

<main class="main">

<section class="about container__plaza" style="border-bottom: 0px;">

<div class="about_plaza container">

    <h2 class="title title--border">ℕ&#120140;&#120124;&#120141;&#120120; ℙ&#120131;&#120120;ℤ&#120120; &#120123;&#120124; &#120120;&#120131;ℚ&#120140;&#120128;&#120131;&#120124;ℝ❗❗❗.</h2>

    <p class="about_paragraph">Llegaron las vacaciones⛱️ ,  los peques de nuevo en casa&#129322; Y  nosotras les traemos el &#119823;&#119808;&#119827;&#119808; &#119823;&#119819;&#119808;&#119833;&#119808; &#128165;&#128165;
    </p>

    <p class="about_paragraph">💫LES PRESENTAMOS ESTE NUEVO SERVICIO DE ALQUILER DE JUEGOS MONTESSORI PARA EVENTOS.</p>
    <p class="about_paragraph">💫5 PATA PATA PARA QUE PASEN UNA TARDE A TODO  RITMO 🤹‍♀️🤸‍♂️ Y DEPASO NOS PODEMOS A PUNTO CON EL PASO PREVIO A LA BICI 🚴 YA QUE ESTOS ELEMENTOS  AYUDAN AL PEQUEÑO A ESTIMULAR EL  𝙴𝚀𝚄𝙸𝙻𝙸𝙱𝚁𝙸𝙾  DE FORMA NATURAL Y PROGRESIVA .
    </p>
    <p class="about_paragraph">💫 AL CAMINAR SOBRE 𝚎𝚕 𝙿𝙰𝚃𝙰 𝙿𝙰𝚃𝙰 , EL NIÑ@ SE BALANCEA  SIN RIESGOS Y VA ADQUIRIENDO LA SEGURIDAD  QUE NECESITARA EN UNA BICICLETA 👌</p>
    <p class="about_paragraph">DIVERTIDO Y FUNCIONAL! ☑️</p>
    <p class="about_paragraph"> 💫OTRA NUEVA OPCION DE 𝐶𝑜𝑐𝑜𝑚𝑖𝑒𝑙 PARA QUE TUS NIÑXS 𝐴𝑝𝑟𝑒𝑛𝑑𝑎𝑛 𝐽𝑢𝑔𝑎𝑛𝑑𝑜 🤸‍♂️🤹‍♀️</p>
    <a href="https://api.whatsapp.com/send?phone=+5493815523529&text=Hola Noe, Me interesa alquilar la plaza Pata Pata! Necesito más info" target="_blank" class="btn">
        <p class="about_paragraph">Clickea aqui y envianos un mensaje para consultar precios y disponibilidad!!</p>
    </a>


</div>

<section class="about container">

        <figure class="about_picture">
            <img src="{{ asset('img/images/plaza-pata-1.jpeg') }}" alt="" class="about_img">
        </figure>

        <figure class="about_picture">
            <img src="{{ asset('img/images/plaza-pata-3.jpeg') }}" alt="" class="about_img">
        </figure>

        <figure class="about_picture" style="margin-top: 30px;">
            <img src="{{ asset('img/images/plaza-pata-2.jpeg') }}" alt="" class="about_img">
        </figure>

    </section>

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