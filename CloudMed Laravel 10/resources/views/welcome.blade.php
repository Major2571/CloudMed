@section('title', 'Início')

<x-app-layout>
    <section class="session-allow">
        <div class="min-h-screen">
            <h1 class="text-center py-10">
                Bem-Vindo(a) {{ Auth::user()->name }}!
            </h1>

            <div class="w-full flex flex-wrap align-center justify-center">
                <div class="max-w-sm bg-white rounded-md shadow mx-6">

                    <img class="rounded-t-md"
                        src="https://www.centromedicopastore.com.br/wp-content/uploads/2022/07/blog-02-Exames-de-Sangue.png"
                        alt="" />

                    <div class="p-5">

                        <a href="/meus-exames">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Meus Exames</h5>
                        </a>

                        @if ($ultimoExame && $totalExames)
                            <p class="mb-3 text-gray-900">
                                <span class="font-bold"> Total Cadastrado: </span>
                                {{ $totalExames }}
                            </p>
                            <p class="mb-3 font-normal text-gray-900">
                                Seu último exame salvo foi:
                                <span class="font-bold">'{{ $ultimoExame->titulo }}'</span>
                                da especialidade de
                                <span class="font-bold"> {{ $ultimoExame->especialidade->especialidade }} </span>,
                                realizado no dia
                                <span class="font-bold"> {{ date('d/m/y', strtotime($ultimoExame->data)) }} </span>,

                                @if ($isInstituicao)
                                    pela instituição
                                    <span class="font-bold"> {{ $ultimoExame->instituicao }} </span>,
                                @else
                                    não foi informada a instituição,
                                @endif

                                na cidade de {{ $ultimoExame->cidade }} -
                                @if (empty($ultimoExame->uf->uf))
                                    UF indisponível
                                @else
                                    {{ $ultimoExame->uf->uf }}.
                                @endif
                            </p>
                        @else
                            <p class="my-10 font-normal text-gray-900">
                                Você ainda não salvou nenhum Exame.
                                </br>
                                Não perca tempo:
                            </p>
                        @endif

                        <a href="/novo-cad-exame"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-cyan-700 rounded-md hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300">
                            Cadastrar um novo Exame
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white rounded-md shadow mx-6">

                    <img class="rounded-t-md"
                        src="https://www.paho.org/sites/default/files/styles/max_1500x1500/public/2022-08/generic-vaccine-1500x1000.jpg?itok=IoGkc1TM"
                        alt="" />

                    <div class="p-5">

                        <a href="/meus-exames">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Minhas Vacinas</h5>
                        </a>

                        @if ($ultimaVacina && $totalVacinas)
                            <p class="mb-3 font-normal text-gray-900">
                                <span class="font-bold">
                                    Total Cadastrada:
                                </span>
                                {{ $totalVacinas }}
                            </p>
                            <p class="mb-3 font-normal text-gray-900">Sua última vacina salva foi:

                                '@if (empty($ultimaVacina->titulo))
                                    <span class="font-bold">
                                        {{ $ultimaVacina->nomeVacina->nomeVacina }}
                                    </span>
                                @else
                                    <span class="font-bold">
                                        {{ $ultimaVacina->titulo }}
                                    </span>
                                @endif'

                                sendo
                                <span class="font-bold">
                                    {{ $ultimaVacina->tipoDose }}
                                </span>
                                ,
                                aplicada no dia
                                <span class="font-bold">
                                    {{ date('d/m/y', strtotime($ultimaVacina->data)) }},
                                </span>

                                @if ($isFabricante)
                                    <span class="font-bold">
                                        do fabricante {{ $ultimaVacina->fabricante }}
                                    </span>
                                @else
                                @endif
                                na cidade de {{ $ultimaVacina->cidade }}
                            </p>
                        @else
                            <p class="my-10 font-normal text-gray-900">
                                Você ainda não salvou nenhuma Vacina.
                                </br>
                                Não perca tempo:
                            </p>
                        @endif

                        <a href="/cad-novo-vacina"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-cyan-700 rounded-md hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300">
                            Cadastrar uma nova Vacina
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- 
    <style>
        .faixa-etaria {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        .faixa-etaria>.accordion {
            flex-grow: 1;
            border: 1px solid #ccc;
            border-radius: 4px;
            overflow: hidden;
        }

        .accordion-header {
            background-color: #f5f5f5;
            padding: 10px;
            cursor: pointer;
        }

        .accordion-header:hover {
            background-color: #eaeaea;
        }

        .accordion-content {
            padding: 10px;
            display: none;
        }

        .accordion-content.show {
            display: block;
        }
    </style>

    <div class="faixa-etaria">
        <div class="accordion" onclick="toggleAccordion('accordion1')">
            <div class="accordion-header">
                Faixa Etária 1
            </div>
            <div class="accordion-content show" id="accordion1">
                <h3>Informações Faixa Etária 1</h3>
                <p>Aqui estão as informações para a Faixa Etária 1.</p>
            </div>
        </div>

        <div class="accordion" onclick="toggleAccordion('accordion2')">
            <div class="accordion-header">
                Faixa Etária 2
            </div>
            <div class="accordion-content" id="accordion2">
                <h3>Informações Faixa Etária 2</h3>
                <p>Aqui estão as informações para a Faixa Etária 2.</p>
            </div>
        </div>
        <div class="accordion" onclick="toggleAccordion('accordion3')">
            <div class="accordion-header">
                Faixa Etária 2
            </div>
            <div class="accordion-content" id="accordion3">
                <h3>Informações Faixa Etária 2</h3>
                <p>Aqui estão as informações para a Faixa Etária 2.</p>
            </div>
        </div>
        <div class="accordion" onclick="toggleAccordion('accordion4')">
            <div class="accordion-header">
                Faixa Etária 2
            </div>
            <div class="accordion-content" id="accordion4">
                <h3>Informações Faixa Etária 2</h3>
                <p>Aqui estão as informações para a Faixa Etária 2.</p>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(id) {
            var accordionContent = document.getElementById(id);
            var accordions = document.getElementsByClassName('accordion-content');

            // Oculta todos os accordions
            for (var i = 0; i < accordions.length; i++) {
                accordions[i].classList.remove('show');
            }

            // Exibe o accordion clicado
            accordionContent.classList.toggle('show');
        }
    </script> --}}
</x-app-layout>
