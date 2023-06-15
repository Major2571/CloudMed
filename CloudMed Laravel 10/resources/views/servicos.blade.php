@extends('templates.headMain')

<title> Serviços </title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('contentMain')
    <div>
        <div class="relative -z-10 mt-[-6em] bg-[#c9e4e5] py-60">
            <div class="px-72 text-center">
                <h1
                    class="text-grey-900 m-auto mb-5 block w-3/5 border-b-4 border-[#FE6767] pb-5 text-5xl font-bold leading-tight drop-shadow-lg">
                    Lorem </h1>
                <p class="mt-7 block text-2xl leading-tight text-gray-800 drop-shadow-lg"> Lorem, ipsum dolor sit amet
                    consectetur adipisicing elit. Dolor ex consequuntur corporis aliquid quos
                    deleniti, rerum perferendis quam reiciendis dicta, temporibus ab animi eveniet pariatur commodi.
                    Aspernatur
                    laboriosam laborum voluptate. </p>
            </div>
            <div class="polygon-services">
                <div
                    class="m-auto grid w-2/5 grid-cols-5 content-center items-center justify-center justify-items-center gap-2">

                    <img src="assets/img/icon/services/polygon_pills.png" alt="" class="w-44">

                    <img src="assets/img/icon/services/polygon_vaccine.png" alt="" class="w-44">

                    <img src="assets/img/icon/services/polygon_exam.png" alt="" class="w-44">

                    <img src="assets/img/icon/services/polygon_profile.png" alt="" class="w-44">

                    <img src="assets/img/icon/services/polygon_health.png" alt="" class="w-44">

                </div>
            </div>
        </div>
    </div>

    <section class="servicos mt-32">
        <div class="service mx-auto flex w-4/5 content-center items-center justify-center py-20">
            <div class="img-r w-1/3">
                <img src="{{ url('assets/img/svg/emptyMedicamentos.svg') }}" alt="">
            </div>
            <div class="content-l inline-flex w-2/5 pl-20">
                <div>
                    <div class="items-top inline-flex">
                        <div class="ml-3 w-48">
                            <img src="assets/img/icon/pill.png" alt="">
                        </div>
                        <div class="pl-5">
                            <h1 class="leading-normal">Gerenciamento de Medicamentos</h1>
                            <p class="text-lg">
                                Tenha um registro completo e atualizado dos medicamentos que você está tomando. Adicione,
                                remova e atualize suas informações de medicamentos de forma fácil e organize sua terapia
                                medicamentosa de maneira eficiente.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="service mx-auto flex w-4/5 content-center items-center justify-center py-20">
            <div class="content-r inline-flex w-2/5">
                <div>
                    <div class="items-top inline-flex">
                        <div class="mr-3 w-48">
                            <img src="assets/img/icon/vacinne.png" alt="">
                        </div>
                        <div class="pr-20">
                            <h1>Histórico de Vacinação</h1>
                            <p class="text-lg">
                                Mantenha-se informado sobre sua imunização. Acesse e acompanhe seu histórico de vacinas,
                                incluindo detalhes sobre as doses recebidas. Garanta que seu registro de vacinação esteja
                                sempre completo e atualizado.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-l w-1/3">
                <img src="{{ url('assets/img/svg/emptyVacina.svg') }}" alt="">
            </div>
        </div>

        <div class="service mx-auto flex w-4/5 content-center items-center justify-center py-20">
            <div class="img-r w-1/3">
                <img src="{{ url('assets/img/svg/emptyExame.svg') }}" alt="">
            </div>
            <div class="content-l inline-flex w-2/5 pl-20">
                <div>
                    <div class="items-top inline-flex">
                        <div class="ml-3 w-48">
                            <img src="assets/img/icon/exam.png" alt="">
                        </div>
                        <div class="pl-5">
                            <h1>Exames & Arquivos Médicos</h1>
                            <p class="text-lg">
                                Organize e gerencie seus arquivos de saúde de forma segura. Faça upload e armazene
                                resultados de exames médicos, como análises laboratoriais, radiografias e outros documentos
                                importantes. Tenha acesso rápido aos seus resultados para facilitar a comunicação com os
                                profissionais de saúde.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="service mx-auto flex w-4/5 content-center items-center justify-center py-20">
            <div class="content-r inline-flex w-2/5">
                <div>
                    <div class="items-top inline-flex">
                        <div class="mr-3 w-48">
                            <img src="assets/img/icon/profile_i.png" alt="">
                        </div>
                        <div class="pr-20">
                            <h1>Perfil</h1>
                            <ul class="text-lg">
                                <li>
                                    <strong> Informações Pessoais: </strong> Gerencie suas informações pessoais de maneira
                                    segura. Atualize seus
                                    dados, como nome, e-mail, data de nascimento e outros detalhes importantes. Mantenha
                                    suas
                                    informações pessoais sempre atualizadas para um atendimento mais eficiente e
                                    personalizado.
                                </li>
                                <li>
                                    <strong> Informações Clínicas: </strong> Cadastre suas informações clínicas, como
                                    alergias, tipo sanguíneo,
                                    altura, e outros dados relevantes para sua saúde. Tenha um registro completo das suas
                                    informações médicas, facilitando a comunicação com os profissionais de saúde.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-l w-1/3">
                <img src="{{ url('assets/img/svg/profile_i.svg') }}" alt="">
            </div>
        </div>

        <div class="service mx-auto flex w-4/5 content-center items-center justify-center py-20">
            <div class="img-r w-1/3">
                <img src="{{ url('assets/img/svg/sus_insurance.svg') }}" alt="">
            </div>
            <div class="content-l inline-flex w-2/5 pl-20">
                <div>
                    <div class="items-top inline-flex">
                        <div class="ml-3 w-48">
                            <img src="assets/img/icon/insurance_health.png" alt="">
                        </div>
                        <div class="pl-5">
                            <h1>SUS & Convênio</h1>
                            <ul class="text-lg">
                                <li>
                                    <strong> Cartão do SUS: </strong> Cadastre e atualize as informações do seu Cartão do
                                    SUS. Insira o número do
                                    cartão e faça o upload do seu cartão SUS para facilitar o acesso aos serviços de saúde e
                                    garantir um atendimento mais ágil e preciso.
                                </li>
                                <li>
                                    <strong> Carteirinha do Convênio: </strong> Cadastre e atualize as informações do seu
                                    Convênio Médico. Insira o
                                    número da carteirinha, o nome do convênio e o tipo de plano. Faça o upload da sua
                                    carteirinha
                                    para aproveitar todos os benefícios e serviços oferecidos pelo seu convênio.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="service-join-us w-full mt-32">
        <div class="m-auto w-2/3 text-center">
            <h1>Junte-se a nós!</h1>
            <p class="m-auto mb-10 w-2/3">
                Imagine poder acessar todas as informações relevantes sobre sua saúde com apenas alguns cliques! Não perca
                mais tempo procurando por exames antigos ou informações médicas espalhadas em diferentes lugares. Garantimos
                a segurança e privacidade das suas informações. Escolha nossa plataforma e tenha mais controle e organização
                sobre sua saúde!

            </p>
            <a href="/register"
                class="inline-flex items-center rounded-md bg-[#ff6666] px-3 py-2 text-center text-sm font-medium text-white hover:bg-[#a33535] focus:outline-none focus:ring-2 focus:ring-gray-300">
                Cadastre-se agora mesmo
                <div class="ml-2 text-base">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </a>
            <div><img src="{{ url('assets/img/svg/imgLastSecJoinUs.svg') }}" alt="" class="m-auto w-2/3"></div>
        </div>
    </section>

    <x-btn-toTop />
@endsection
