@extends('templates.headMain')

<title> Sobre </title>
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('contentMain')
    <section class="sobre-main">

        <div class="custom-shape-divider-bottom-1679094374 ">
            <img src="{{ url('assets/img/dividers/wavesOpacitySobre.svg') }}" alt="">
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
                    <img src="{{ url('assets/img/Rectangle 56.png') }}" alt="">
                </div>
            </div>
        </section>

        <section>
            <div class="title-grupo">
                <h1>Nosso Grupo</h1>
            </div>

            <div class="grid grid-cols-4 gap-10 w-4/5 m-auto">

                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-28 h-30 my-5 rounded-full shadow-lg" src="https://avatars.githubusercontent.com/u/99849455?v=4"
                            alt="Bonnie image" />
                        <h5 class="mb-1 text-2xl font-bold text-gray-900">Caroline Tacats</h5>
                        <span class=" text-gray-500 dark:text-gray-400">Desenvolvedora Full-Stack</span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="https://github.com/Major2571"
                                class="mr-2 inline-flex items-center text-5xl hover:text-gray-700 hover:text-[3.1em]">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/caroline-tacats-2a1a67238/"
                                class="mr-2 inline-flex items-center text-5xl hover:text-blue-500 hover:text-[3.1em]">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-28 h-30 my-5 rounded-full shadow-lg" src="https://avatars.githubusercontent.com/u/99849455?v=4"
                            alt="Bonnie image" />
                        <h5 class="mb-1 text-2xl font-bold text-gray-900">Caroline Tacats</h5>
                        <span class=" text-gray-500 dark:text-gray-400">Desenvolvedora Full-Stack</span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="https://github.com/Major2571"
                                class="mr-2 inline-flex items-center text-5xl hover:text-gray-700 hover:text-[3.1em]">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/caroline-tacats-2a1a67238/"
                                class="mr-2 inline-flex items-center text-5xl hover:text-blue-500 hover:text-[3.1em]">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-28 h-30 my-5 rounded-full shadow-lg" src="https://avatars.githubusercontent.com/u/99849455?v=4"
                            alt="Bonnie image" />
                        <h5 class="mb-1 text-2xl font-bold text-gray-900">Caroline Tacats</h5>
                        <span class=" text-gray-500 dark:text-gray-400">Desenvolvedora Full-Stack</span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="https://github.com/Major2571"
                                class="mr-2 inline-flex items-center text-5xl hover:text-gray-700 hover:text-[3.1em]">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/caroline-tacats-2a1a67238/"
                                class="mr-2 inline-flex items-center text-5xl hover:text-blue-500 hover:text-[3.1em]">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-28 h-30 my-5 rounded-full shadow-lg" src="https://avatars.githubusercontent.com/u/99849455?v=4"
                            alt="Bonnie image" />
                        <h5 class="mb-1 text-2xl font-bold text-gray-900">Caroline Tacats</h5>
                        <span class=" text-gray-500 dark:text-gray-400">Desenvolvedora Full-Stack</span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="https://github.com/Major2571"
                                class="mr-2 inline-flex items-center text-5xl hover:text-gray-700 hover:text-[3.1em]">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/caroline-tacats-2a1a67238/"
                                class="mr-2 inline-flex items-center text-5xl hover:text-blue-500 hover:text-[3.1em]">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <div class="custom-shape-divider-bottom-1679094374 ">
            <img src="{{ url('assets/img/dividers/wavesNegativeSobre.svg') }}" alt="">
        </div>

    </section>
@endsection
