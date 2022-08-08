<head>
    <title>Cocomiel - Productos</title>
</head>

@extends('layouts.apppublic')

@section('content')
<div>
    <div id="navegacion-top">

        <div class="">

            <div class="wrap">

                <div id="logo">
                    <img src="{{ asset('img/Logo.png') }}" alt="">
                </div>

                <nav>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">
                                <img class="img-home" src="{{ asset('img/home.png') }}" alt="">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <section class="card">

        <div class="container__product">

            <h2 class="title">Nuestros Productos</h2>

            <div class="card_container">

                @foreach($images as $image)

                <div class="card_item">

                    <figure class="card_img">

                        <img src="{{ route('image.file',['filename' => $image->image_path]) }}" alt="{{$image->description}}" class="card_picture">

                    </figure>

                    <div class="title_box">
                        <h3 class="card_title">{{$image->description}}</h3>
                        <p class="card_paragraph">$ {{ number_format($image->precio, 2, ',', '.') }}</p>
                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </section>

    <footer class="footer_product">

        <div class="footer_container container">

            <div class="footer_contact">
                <div class="footer_text">

                    <h2 class="title">Ten&#233;s alguna duda sobre nuestros productos?</h2>

                    <p class="footer_copy">Si tienes alguna duda sobre nuestros productos pod&#233;s contactarme en cualquiera de mis redes sociales
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
</div>
@endsection