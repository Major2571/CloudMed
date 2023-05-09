@extends('templates.headMain')

<title> WebApp </title>

@section('contentMain')

<div class="blob-maker">
    <img src="{{url('assets/img/dividers/blobMakerSectionOne.svg')}}" alt="">
</div>

<section class="section-one">

    <div class="main-top">
        <div>
            <h1>CloudMed</h1>
            <p>
                Com o CloudMed, você tem um lugar seguro e prático para armazenar suas informações médicas. Cadastre seus exames, crie seu perfil com informações clínicas e tenha acesso ao seu histórico médico disponível a qualquer hora, de forma fácil, rápida e segura.
            </p>
            <a href="/cadastro">
                <button class="btnCad"> Comece Já! </button>
            </a>
        </div>
        <div>
            <img src="{{url('assets/img/svg/secOneImgLandingPage.svg')}}" alt="">
        </div>
    </div>

</section>


<section class="section-cards">
    <div class="cards-title-main">
        <h1>All In One Place!</h1>
    </div>

    <div class="container-cards">
        <div class="card first-cards card-1">
            <div class="img-title">
                <img src="{{url('assets/img/icon/exame.png')}}" alt="">
                <h2>Lorem</h2>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio vitae.
                </p>
            </div>
        </div>

        <div class="card first-cards card-2">
            <div class="img-title">
                <img src="{{url('assets/img/icon/vacinas.png')}}" alt="">
                <h2>Lorem</h2>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio vitae.
                </p>
            </div>
        </div>

        <div class="card first-cards card-3">
            <div class="img-title">
                <img src="{{url('assets/img/icon/doutora.png')}}">
                <h2>Lorem</h2>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio vitae.
                </p>
            </div>
        </div>

        <div class="card first-cards card-4">
            <div class="img-title">
                <img src="{{url('assets/img/icon/receita.png')}}" alt="">
                <h2>Lorem</h2>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio vitae.
                </p>
            </div>
        </div>
    </div>

</section>

<section class="section-opnions">
    <div class="custom-shape-divider-top-1676559725 shape-divider">
        <img src="{{url('assets/img/dividers/wavesOpacity.svg')}}" alt="">
    </div>

    <section class="section-cards-opnion">
        <h1>Opinions</h1>

        <div class="owl-carousel owl-theme container-cards ">
            <div class="card">
                <img src="{{url('assets/img/quotationMark.svg')}}" alt="">
                <div>
                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio
                        vitae."
                    </p>
                    <i>Lorem</i>
                </div>
                <img src="{{url('assets/img/quotationMark.svg')}}" alt="">
            </div>
        </div>

    </section>

    <div class="custom-shape-divider-top-1676995490 shape-divider">
        <img src="{{url('assets/img/dividers/waves-section-two.svg')}}" alt="">
    </div>
</section>


<section class="join-us">
    <div>
        <h1>Junte-se a nós!</h1>
        <p>
            Imagine poder acessar todas as informações relevantes sobre sua saúde com apenas alguns cliques!  Não perca mais tempo procurando por exames antigos ou informações médicas espalhadas em diferentes lugares. Garantimos a segurança e privacidade das suas informações.  Escolha nossa plataforma e tenha mais controle e organização sobre sua saúde!

        </p>
        <a href="/cadastro">
            <button class="btnLogin"> Cadastre-se </button>
        </a>
        <div><img src="{{url('assets/img/svg/imgLastSecJoinUs.svg')}}" alt=""></div>

    </div>
</section>


<div class="toTop">
    <button onclick="backToTop()" id="toTopButton" type="button">
        <img src="{{url('https://blog.social.mg.gov.br/wp-content/plugins/photo-gallery/css/bwg-fonts/fonts/bwg-fonts-svg/angle-up-sm.svg')}}" alt="arrowUp">
    </button>
</div>


@endsection