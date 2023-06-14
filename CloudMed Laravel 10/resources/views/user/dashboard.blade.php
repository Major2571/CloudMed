@section('title', 'Início')

<x-app-layout>
    <section class="session-allow">
        <div class="min-h-screen">
            <h1 class="py-10 text-center text-3xl">
                Bem-Vindo(a) {{ Auth::user()->name }}!
            </h1>

            <div class="m-auto pb-52 grid w-3/5 gap-6 md:grid-cols-2 xl:grid-cols-3">
                <div class="relative shadow-lg bg-slate-100  rounded-md border-l-4 border-[#039FDD] p-5">
                    <div class="flex justify-between items-center border-b-2 border-[#039FDD] w-5/6 m-auto pb-5">
                        <div>
                            <h2 class="text-5xl leading-normal font-semibold"> {{ $totalVaccines }} </h2>
                            <h4 class="font-bold drop-shadow-sm"> Vacinas Salvas</h4>
                        </div>
                        <div class="w-20 p-3">
                            <img src="assets/img/icon/vacinne.png" alt="">
                        </div>
                    </div>

                    <div class="m-2 pt-5 pb-14">
                        @if ($liDescVaccines->isEmpty())
                            Você ainda não possui vacinas salvas! Não perca tempo!
                        @else
                            <h3 class="font-semibold drop-shadow-sm "> Últimas vacinas salvas: </h3>
                            <ul class="list-disc list-inside py-2">
                                @foreach ($liDescVaccines as $li)
                                    <li>
                                        {{ $li->nameVaccine->name_vaccine }}
                                    </li>
                                @endforeach
                            </ul>
                            @if ($totalVaccines > 5)
                                <a href="{{ route('myVaccines') }}"
                                    class=" font-semibold text-[#0369dd] hover:text-[#1b5ca5] ">
                                    Mais +
                                </a>
                            @endif
                        @endif
                    </div>
                    <div class="m-auto w-full absolute bottom-3">
                        <a href="{{ route('createNewVaccine') }}"
                            class="inline-flex items-center rounded-md bg-[#039FDD] px-3 py-2 text-center text-sm font-medium text-white hover:bg-[#0074a1] focus:outline-none focus:ring-2 focus:ring-gray-300">
                            Cadastrar uma nova Vacina
                            <div class="ml-2 text-base">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="relative shadow-lg bg-slate-100 rounded-md border-l-4 border-[#d83a49] p-5">
                    <div class="flex justify-between items-center border-b-2 border-[#d83a49] w-5/6 m-auto pb-5">
                        <div>
                            <h2 class="text-5xl leading-normal font-semibold"> {{ $totalExams }} </h2>
                            <h4 class="font-bold drop-shadow-sm"> Exames Salvos</h4>
                        </div>
                        <div class="w-20 p-3">
                            <img src="assets/img/icon/exam.png" alt="">
                        </div>
                    </div>

                    <div class="m-2 pt-5 pb-14">
                        @if ($liDescExams->isEmpty())
                            <p>
                                Você ainda não possui exames salvos! Não perca tempo!
                            </p>
                        @else
                            <h3 class="font-semibold drop-shadow-sm "> Últimos exames salvos: </h3>
                            <ul class="list-disc list-inside py-2">
                                @foreach ($liDescExams as $li)
                                    <li>
                                        {{ $li->exam_title }}
                                    </li>
                                @endforeach
                            </ul>
                            @if ($totalExams > 5)
                                <a href="{{ route('myExams') }}"
                                    class=" font-semibold text-[#0369dd] hover:text-[#1b5ca5] ">
                                    Mais +
                                </a>
                            @endif
                        @endif

                    </div>

                    <div class="m-auto absolute bottom-3">
                        <a href="{{ route('createNewExam') }}"
                            class="inline-flex items-center rounded-md bg-[#d83a49] px-3 py-2 text-center text-sm font-medium text-white hover:bg-[#C52233] focus:outline-none focus:ring-2 focus:ring-gray-300">
                            Cadastrar um novo Exame
                            <div class="ml-2 text-base">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="relative shadow-lg bg-slate-100  rounded-md border-l-4 border-[#f5890f] p-5">
                    <div class="flex justify-between items-center border-b-2 border-[#f5890f] w-5/6 m-auto pb-5">
                        <div>
                            <h2 class="text-5xl leading-normal font-semibold"> {{ $totalMedications }} </h2>
                            <h4 class="font-bold drop-shadow-sm"> Medicamentos Salvos </h4>
                        </div>
                        <div class="w-20 p-3">
                            <img src="assets/img/icon/pill.png" alt="">
                        </div>
                    </div>

                    <div class="m-2 pt-5 pb-14">
                        @if ($liDescMedication->isEmpty())
                            Você ainda não possui medicamentos salvos! Não perca tempo!
                        @else
                            <h3 class="font-semibold drop-shadow-sm "> Últimos medicamentos salvos: </h3>
                            <ul class="list-disc list-inside pt-2 pb-5">
                                @foreach ($liDescMedication as $li)
                                    <li>
                                        {{ $li->medication_name }}
                                    </li>
                                @endforeach
                            </ul>
                            @if ($totalMedications > 5)
                                <a href="{{ route('myMedications') }}"
                                    class=" font-semibold text-[#0369dd] hover:text-[#1b5ca5] ">
                                    Mais +
                                </a>
                            @endif
                        @endif
                    </div>
                    <div class="m-auto w-full absolute bottom-3">
                        <a href="{{ route('createNewMedications') }}"
                            class="inline-flex items-center rounded-md bg-[#f5890f] px-3 py-2 text-center text-sm font-medium text-white hover:bg-[#c76d06] focus:outline-none focus:ring-2 focus:ring-gray-300">
                            Cadastre um novo Medicamento
                            <div class="ml-2 text-base">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
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
