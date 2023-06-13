@section('title', 'Início')

<x-app-layout>
    <section class="session-allow">
        <div class="min-h-screen">
            <h1 class="py-10 text-center">
                Bem-Vindo(a) {{ Auth::user()->name }}!
            </h1>

            <div class="align-center flex w-full flex-wrap justify-center">
                <div class="mx-6 max-w-sm rounded-md bg-white shadow">

                    <img class="rounded-t-md"
                        src="https://www.centromedicopastore.com.br/wp-content/uploads/2022/07/blog-02-Exames-de-Sangue.png"
                        alt="" />

                    <div class="p-5">

                        <a href="{{ route('myExams') }}">
                            <h5 class="mb-2 mr-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-cyan-800">
                                Meus Exames
                            </h5>
                        </a>

                        @if ($ultimoExame && $totalExames)
                            <p class="mb-3 text-gray-900">
                                <span class="font-bold"> Total Cadastrado: </span>
                                {{ $totalExames }}
                            </p>
                            <p class="mb-3 font-normal text-gray-900">
                                Seu último exame salvo foi:
                                <span class="font-bold">'{{ $ultimoExame->exam_title }}'</span>
                                da medical_specialty de
                                <span class="font-bold"> {{ $ultimoExame->medical_specialty->medical_specialty }} </span>,
                                realizado no dia
                                <span class="font-bold"> {{ date('d/m/y', strtotime($ultimoExame->exam_date)) }} </span>,

                                @if ($isinstitution)
                                    pela instituição
                                    <span class="font-bold"> {{ $ultimoExame->institution }} </span>,
                                @else
                                    não foi informada a instituição,
                                @endif

                                na cidade de {{ $ultimoExame->city }} -
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

                        <a href="{{ route('createNewExam') }}"
                            class="inline-flex items-center rounded-md bg-cyan-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-gray-300">
                            Cadastrar um novo Exame
                            <div class="ml-2 text-base">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="mx-6 max-w-sm rounded-md bg-white shadow">

                    <img class="rounded-t-md"
                        src="https://www.paho.org/sites/default/files/styles/max_1500x1500/public/2022-08/generic-vaccine-1500x1000.jpg?itok=IoGkc1TM"
                        alt="" />

                    <div class="p-5">

                        <a href="{{ route('myVaccines') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-cyan-800">Minhas
                                Vacinas</h5>
                        </a>

                        @if ($ultimaVacina && $totalVacinas)
                            <p class="mb-3 font-normal text-gray-900">
                                <span class="font-bold">
                                    Total Cadastrada:
                                </span>
                                {{ $totalVacinas }}
                            </p>
                            <p class="mb-3 font-normal text-gray-900">Sua última vacina salva foi:

                                '@if (empty($ultimaVacina->new_vaccine_name))
                                    <span class="font-bold">
                                        {{ $ultimaVacina->nameVaccine->name_vaccine }}
                                    </span>
                                @else
                                    <span class="font-bold">
                                        {{ $ultimaVacina->new_vaccine_name }}
                                    </span>
                                @endif'

                                sendo
                                <span class="font-bold">
                                    {{ $ultimaVacina->doses }}
                                </span>
                                ,
                                aplicada no dia
                                <span class="font-bold">
                                    {{ date('d/m/y', strtotime($ultimaVacina->vaccination_date)) }},
                                </span>

                                @if ($isManufacturer)
                                    fabricada por
                                    <span class="font-bold">
                                        {{ $ultimaVacina->manufacturer }}
                                    </span>
                                @else
                                @endif
                                na cidade de {{ $ultimaVacina->city }}
                            </p>
                        @else
                            <p class="my-10 font-normal text-gray-900">
                                Você ainda não salvou nenhuma Vacina.
                                </br>
                                Não perca tempo:
                            </p>
                        @endif

                        <a href="{{ route('createNewVaccine') }}"
                            class="inline-flex items-center rounded-md bg-cyan-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-gray-300">
                            Cadastrar uma nova Vacina
                            <div class="ml-2 text-base">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <section>

        <div class="m-auto grid w-3/5 gap-4 md:grid-cols-2 lg:grid-cols-3">
            <div class="flex bg-slate-100 justify-between rounded-sm border-l-4 border-gray-500 p-5">
                <div>
                    <h1> 9 </h1>
                    <h4> Vacinas Cadastradas</h4>
                </div>
                <div class="w-20 p-3">
                    <img src="assets/img/icon/vacinne.png" alt="" class="img-vacina">
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
