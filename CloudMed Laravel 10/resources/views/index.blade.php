@extends('templates.headMain')

<title> CloudMed </title>
{{-- 
@vite(['resources/css/app.css', 'resources/js/app.js']) --}}

@section('contentMain')
    <div class="blob-maker">
        <img src="{{ url('assets/img/dividers/blobMakerSectionOne.svg') }}" alt="">
    </div>

    <section class="section-one">

        <div class="main-top">
            <div>
                <h1>CloudMed</h1>
                <p>
                    Com o CloudMed, você tem um lugar seguro e prático para armazenar suas informações médicas. Cadastre
                    seus exames, crie seu perfil com informações clínicas e tenha acesso ao seu histórico médico disponível
                    a qualquer hora, de forma fácil, rápida e segura.
                </p>
                <a href="/register">
                    <button class="btnCad"> Comece Já! </button>
                </a>
            </div>
            <div>
                <img src="{{ url('assets/img/svg/secOneImgLandingPage.svg') }}" alt="">
            </div>
        </div>

    </section>


    <section class="section-cards">
        <div class="cards-title-main">
            <h1>Seu Hub de Saúde Personalizado!</h1>
        </div>

        <div class="container-cards">

            <div class="card first-cards card-1">
                <div class="img-title">
                    <img src="{{ url('assets/img/icon/main/exam.png') }}" alt="">
                    <h2>Exames</h2>
                </div>
                <div>
                    <p>Na área de exames, você pode cadastrar o registro de todos os seus exames médicos. Adicione
                        informações como data, tipo de exame, instituição e os resultados, além de anexar uma cópia digital
                        do exame.
                    </p>
                </div>
            </div>

            <div class="card first-cards card-2">
                <div class="img-title">
                    <img src="{{ url('assets/img/icon/main/vaccine2.png') }}" alt="">
                    <h2>Vacinas</h2>
                </div>
                <div>
                    <p>Adicione e mantenha atualizado seu registro de vacinação, incluindo data da aplicação, dose, tipo de
                        vacina e datas de retorno para reforço.
                    </p>
                </div>
            </div>

            <div class="card first-cards card-3">
                <div class="img-title">
                    <img src="{{ url('assets/img/icon/main/pills.png') }}" alt="">
                    <h2>Medicamentos</h2>
                </div>
                <div>
                    <p>Em medicamentos, você pode cadastrar e gerenciar os medicamentos que utiliza regularmente.
                        Mantenha um histórico organizado de todos os medicamentos que você
                        está tomando.
                    </p>
                </div>
            </div>

            <div class="card first-cards card-4">
                <div class="img-title">
                    <img src="{{ url('assets/img/icon/main/profile.png') }}" alt="">
                    <h2>Perfil</h2>
                </div>
                <div>
                    <p>Na área do perfil do usuário, você pode adicionar e atualizar suas informações clínicas, incluindo
                        histórico médico, medicamentos de uso contínuo, doenças crônicas e allergies.
                    </p>
                </div>
            </div>

        </div>

    </section>

    <section class="section-opnions">
        <div class="custom-shape-divider-top-1676559725 shape-divider">
            <img src="{{ url('assets/img/dividers/wavesOpacity.svg') }}" alt="">
        </div>

        <section class="section-cards-opnion">
            <h1>Opiniões</h1>

            <div class="owl-carousel owl-theme container-cards ">
                <div class="card">
                    <img src="{{ url('assets/img/quotationMark.svg') }}" alt="">
                    <div>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio
                            vitae."
                        </p>
                        <i>Lorem</i>
                    </div>
                    <img src="{{ url('assets/img/quotationMark.svg') }}" alt="">
                </div>
            </div>

        </section>

        <div class="custom-shape-divider-top-1676995490 shape-divider">
            <img src="{{ url('assets/img/dividers/waves-section-two.svg') }}" alt="">
        </div>
    </section>


    <section class="join-us">
        <div>
            <h1>Junte-se a nós!</h1>
            <p class="w-1/4">
                Imagine poder acessar todas as informações relevantes sobre sua saúde com apenas alguns cliques! Não perca
                mais tempo procurando por exames antigos ou informações médicas espalhadas em diferentes lugares. Garantimos
                a segurança e privacidade das suas informações. Escolha nossa plataforma e tenha mais controle e organização
                sobre sua saúde!

            </p>
            <a href="/register">
                <button class="btnLogin"> Cadastre-se </button>
            </a>
            <div><img src="{{ url('assets/img/svg/imgLastSecJoinUs.svg') }}" alt=""></div>

        </div>
    </section>


    <x-btn-toTop />
@endsection
