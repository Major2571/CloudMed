@extends('templates.headMain')

<title> Sobre </title>
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('contentMain')
    <div>
        <div class="relative -z-10 mt-[-6em] bg-[#c9e4e5] pt-52 pb-40">
            <div class="mx-auto flex w-4/5 content-center items-center justify-center">
                <div class="inline-flex w-2/5 pr-20">
                    <div class="items-top inline-flex">
                        <div class="pl-5">
                            <h1
                                class="text-grey-900 m-auto mb-5 block border-b-4 border-[#FE6767] pb-5 text-5xl font-bold leading-tight drop-shadow-lg">
                                CloudMed </h1>
                            <p class="text-lg">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla vel explicabo quisquam?
                                Facilis blanditiis suscipit accusantium velit ducimus fuga laudantium quae repellendus!
                                Architecto, non? Consequuntur a delectus sed eum quos?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3">
                    <img src="{{ url('assets/img/svg/emptyMedicamentos.svg') }}" alt="">
                </div>
            </div>

        </div>
        <div class="m-20">
            <div class="mx-auto my-10 w-3/5 text-center">
                <h1 class="text-grey-900 m-auto mb-5 block pb-5 text-4xl font-bold leading-tight drop-shadow-lg">
                    Desenvolvido por: </h1>
            </div>
            <div class="m-auto grid w-4/5 grid-cols-4 gap-10">
                <div class="w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow">
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
                <div class="w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow">
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
                            <a href=""
                                class="mr-2 inline-flex items-center text-5xl hover:text-[3.1em] hover:text-blue-500">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow">
                    <div class="flex flex-col items-center pb-10">
                        <img class="h-30 my-5 w-28 rounded-full shadow-lg"
                            src="assets/img/icon/icon-ester.png" />
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
                <div class="w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow">
                    <div class="flex flex-col items-center pb-10">
                        <img class="h-30 my-5 w-28 rounded-full shadow-lg" src="assets/img/icon/icon-keth.png"
                         />
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

        </div>
    </div>
    </div>

    <div class="mt-32 w-full">
        <div class="m-auto w-2/3 text-center">
            <h1>Thanks!</h1>
            <div><img src="https://i.gifer.com/origin/3f/3f1d28bba304699e058d3e3230ce87ad.gif" alt=""
                    class="m-auto w-1/4"></div>
        </div>
    </div>
@endsection
