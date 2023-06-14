@extends('templates.headMain')

<title> Serviços </title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('contentMain')

<div class="bg-blue-500 p-20">
    <div>
        <h1> Lorem </h1>
        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor ex consequuntur corporis aliquid quos deleniti, rerum perferendis quam reiciendis dicta, temporibus ab animi eveniet pariatur commodi. Aspernatur laboriosam laborum voluptate. </p>
    </div>
</div>

<section class="servicos">
    <div class="mx-auto my-10 w-4/5 flex justify-center content-center items-center">
        <div class="w-1/3">
            <img src="{{ url('assets/img/svg/emptyMedicamentos.svg') }}" alt="">
        </div>
        <div class="w-2/5 inline-flex pl-20">
            <div>
                <div class="inline-flex items-top">
                    <div class="w-48 ml-3">
                        <img src="assets/img/icon/pill.png" alt="">
                    </div>
                    <div class="pl-5">
                        <h1>Medicamentos</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae autem amet cum pariatur numquam
                            atque
                            dolorem quia aspernatur quibusdam optio officiis labore ex aut sunt architecto, vitae animi
                            necessitatibus sit!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto my-10 w-4/5 flex justify-center content-center items-center">
        <div class="w-2/5 inline-flex">
            <div>
                <div class="inline-flex items-top">
                    <div class="w-48 mr-3">
                        <img src="assets/img/icon/vacinne.png" alt="">
                    </div>
                    <div class="pr-20">
                        <h1>Vacinas</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae autem amet cum pariatur numquam
                            atque
                            dolorem quia aspernatur quibusdam optio officiis labore ex aut sunt architecto, vitae animi
                            necessitatibus sit!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <img src="{{ url('assets/img/svg/emptyVacina.svg') }}" alt="">
        </div>
    </div>

    <div class="mx-auto my-10 w-4/5 flex justify-center content-center items-center">
        <div class="w-1/3">
            <img src="{{ url('assets/img/svg/emptyExame.svg') }}" alt="">
        </div>
        <div class="w-2/5 inline-flex pl-20">
            <div>
                <div class="inline-flex items-top">
                    <div class="w-48 ml-3">
                        <img src="assets/img/icon/exam.png" alt="">
                    </div>
                    <div class="pl-5">
                        <h1>Exames & Arquivos Médicos</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae autem amet cum pariatur numquam
                            atque
                            dolorem quia aspernatur quibusdam optio officiis labore ex aut sunt architecto, vitae animi
                            necessitatibus sit!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto my-10 w-4/5 flex justify-center content-center items-center">
        <div class="w-2/5 inline-flex">
            <div>
                <div class="inline-flex items-top">
                    <div class="w-48 mr-3">
                        <img src="assets/img/icon/profile_i.png" alt="">
                    </div>
                    <div class="pr-20">
                        <h1>Perfil</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae autem amet cum pariatur numquam
                            atque
                            dolorem quia aspernatur quibusdam optio officiis labore ex aut sunt architecto, vitae animi
                            necessitatibus sit!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <img src="{{ url('assets/img/svg/profile_i.svg') }}" alt="">
        </div>
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
@endsection
