@extends('templates.headMain')

<title> Sobre </title>

@section('contentMain')

<section class="sobre-main">

    <div class="custom-shape-divider-bottom-1679094374 ">
        <img src="{{url('assets/img/dividers/wavesOpacitySobre.svg')}}" alt="">
    </div>

    <section class="conteudo-primario">
        <div class="sobre-tcc">
            <div class="sobre-text">
                <h1 class="titulo-sobre"><strong>Sobre o TCC</strong></h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas excepturi et ut repellat similique
                    hic quos omnis nemo minima molestias ab a debitis vitae blanditiis temporibus dolorem, alias error
                    ratione.</p>
            </div>
            <div class="img-sobre">
                <img src="{{url('assets/img/Rectangle 56.png')}}" alt="">
            </div>
        </div>
    </section>

    <section>
        <div class="title-grupo">
            <h1>Nosso Grupo</h1>
        </div>

        <div class="cards-container">
            <div class="card-sobre">
                <img src="{{url('assets/img/icon/programmer.png')}}" alt="dev1" class="img.dev">
                <div class='content'>
                    <h3> Dev 1 </h3>
                    <img src="{{url('assets/img/icon/github-sign.png')}}" alt="">
                    <img src="{{url('assets/img/icon/linkedin.png')}}" alt="">
                </div>
            </div>

            <div class="card-sobre">
                <img src="{{url('assets/img/icon/programmer.png')}}" alt="dev1" class="img.dev">
                <div class='content'>
                    <h3> Dev 1 </h3>
                    <img src="{{url('assets/img/icon/github-sign.png')}}" alt="">
                    <img src="{{url('assets/img/icon/linkedin.png')}}" alt="">
                </div>
            </div>

            <div class="card-sobre">
                <img src="{{url('assets/img/icon/programmer.png')}}" alt="dev1" class="img.dev">
                <div class='content'>
                    <h3> Dev 1 </h3>
                    <img src="{{url('assets/img/icon/github-sign.png')}}" alt="">
                    <img src="{{url('assets/img/icon/linkedin.png')}}" alt="">
                </div>
            </div>

            <div class="card-sobre">
                <img src="{{url('assets/img/icon/programmer.png')}}" alt="dev1" class="img.dev">
                <div class='content'>
                    <h3> Dev 1 </h3>
                    <img src="{{url('assets/img/icon/github-sign.png')}}" alt="">
                    <img src="{{url('assets/img/icon/linkedin.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="custom-shape-divider-bottom-1679094374 ">
        <img src="{{url('assets/img/dividers/wavesNegativeSobre.svg')}}" alt="">
    </div>

</section>

@endsection