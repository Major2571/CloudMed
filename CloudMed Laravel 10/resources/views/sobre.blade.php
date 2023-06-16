@extends('templates.headMain')

<title> Sobre </title>
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('contentMain')
    <div>
        <div class="relative -z-10 mt-[-6em] bg-[#c9e4e5] pt-48 pb-20">
            <div class="mx-auto flex w-4/5 content-center items-center justify-center">
                <div class="inline-flex w-2/5 pr-20">
                    <div class="items-top inline-flex">
                        <div class="pl-5">
                            <h1
                                class="text-grey-900 m-auto mb-5 block border-b-4 border-[#FE6767] pb-5 text-4xl font-bold leading-tight drop-shadow-lg">
                                CloudMed
                            </h1>
                            <p class="text-lg">
                                Nosso projeto nasceu da necessidade de simplificar e aprimorar a forma como as pessoas lidam
                                com suas informações de saúde. Ao longo de nossas jornadas pessoais, enfrentamos desafios
                                comuns, como a perda de exames e carteirinhas de vacinação, a dificuldade de acesso a
                                históricos médicos completos e a falta de controle sobre nossos próprios cuidados de saúde.
                                <br>
                                Movidos por essas experiências, decidimos criar o Cloud Med, uma plataforma abrangente e
                                intuitiva que oferece a você o poder de acessar, armazenar e gerenciar todas as suas
                                informações médicas em um só lugar.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-2/5">
                    <img src="assets/img/svg/team.svg" alt="">
                </div>
            </div>
        </div>

        <div class="custom-shape-divider-top-1686932932">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="m-20">
            <div class="mx-auto my-10 w-3/5 text-center">
                <h1 class="text-grey-900 m-auto my-5 block pb-5 text-4xl font-bold leading-tight drop-shadow-lg">
                    Desenvolvido por: </h1>
            </div>

            <div class="m-auto grid w-4/5 grid-cols-4 gap-10">
                <div class="w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow-lg">
                    <div class="flex flex-col items-center pb-10">
                        <img class="h-30 my-5 w-28 rounded-full shadow-lg"
                            src="https://avatars.githubusercontent.com/u/99849455?v=4" />
                        <h5 class="mb-1 text-2xl font-bold text-gray-900">Caroline Tacats</h5>
                        <span class="text-gray-500 dark:text-gray-400">Desenvolvedora Full-Stack</span>
                        <div class="mt-4 flex space-x-3 md:mt-6">
                            <a href="https://github.com/Major2571"
                                class="mr-2 inline-flex items-center text-5xl hover:text-[3.1em] hover:text-gray-700">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/caroline-tacats-2a1a67238/"
                                class="mr-2 inline-flex items-center text-5xl hover:text-[3.1em] hover:text-blue-500">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow-lg">
                    <div class="flex flex-col items-center pb-10">
                        <img class="h-30 my-5 w-28 rounded-full shadow-lg"
                            src="https://avatars.githubusercontent.com/u/101678614?v=4" />
                        <h5 class="mb-1 text-2xl font-bold text-gray-900">Andressa Cavalcante</h5>
                        <span class="text-gray-500 dark:text-gray-400">Desenvolvedora Back-End</span>
                        <div class="mt-4 flex space-x-3 md:mt-6">
                            <a href="https://github.com/ddcrm"
                                class="mr-2 inline-flex items-center text-5xl hover:text-[3.1em] hover:text-gray-700">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/andressa-cavalcante-969782248"
                                class="mr-2 inline-flex items-center text-5xl hover:text-[3.1em] hover:text-blue-500">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow-lg">
                    <div class="flex flex-col items-center pb-10">
                        <img class="h-30 my-5 w-28 rounded-full shadow-lg" src="assets/img/icon/icon-ester.png" />
                        <h5 class="mb-1 text-2xl font-bold text-gray-900">Ester Moura</h5>
                        <span class="text-gray-500 dark:text-gray-400">Lorem</span>
                        <div class="mt-4 flex space-x-3 md:mt-6">
                            <a href="https://github.com/bistecateca"
                                class="mr-2 inline-flex items-center text-5xl hover:text-[3.1em] hover:text-gray-700">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/ester-sousa-moura-1a189b208"
                                class="mr-2 inline-flex items-center text-5xl hover:text-[3.1em] hover:text-blue-500">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow-lg">
                    <div class="flex flex-col items-center pb-10">
                        <img class="h-30 my-5 w-28 rounded-full shadow-lg" src="assets/img/icon/icon-keth.png" />
                        <h5 class="mb-1 text-2xl font-bold text-gray-900">Kethllyn Anjos</h5>
                        <span class="text-gray-500 dark:text-gray-400">Lorem</span>
                        <div class="mt-4 flex space-x-3 md:mt-6">
                            <a href="https://github.com/kethllynanjos"
                                class="mr-2 inline-flex items-center text-5xl hover:text-[3.1em] hover:text-gray-700">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/kethllyn-anjos-8aa14022b"
                                class="mr-2 inline-flex items-center text-5xl hover:text-[3.1em] hover:text-blue-500">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <p class="mx-auto my-10 w-3/4 text-center text-xl">
                Nossa equipe é composta por estudantes apaixonados por tecnologia, com habilidades em desenvolvimento
                web, design e gestão de projetos. Utilizamos tecnologias modernas, como HTML, CSS, JavaScript e o
                framework Laravel, para criar uma plataforma robusta, amigável e confiável.
            </p>
        </div>
    </div>
    </div>

    <div class="mt-32 w-full">
        <div class="m-auto w-2/3 text-center">
            <h1>Thanks!</h1>
            <div class="my-5 text-xl italic">
                <p>
                    Gostaríamos de expressar nossa sincera gratidão aos coordenadores e professores do curso por todo o apoio,
                    orientação e incentivo ao longo de nossa jornada acadêmica e no desenvolvimento do projeto Cloud Med.
                </p>
                <p>
                    É com imenso orgulho e gratidão que apresentamos esse projeto acadêmico concluído.
                    <br>
                    Atenciosamente,
                    Equipe Cloud Med.
                </p>
            </div>
            <div><img src="assets/img/svg/thanks.svg" alt=""
                    class="m-auto w-1/2"></div>
        </div>
    </div>
@endsection
