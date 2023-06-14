@section('title', 'Meus Medicamento')

<x-app-layout>
    <section class="session-allow">

        @if ($medications->isEmpty() && empty($filterMedicationName))
            <x-empty-medications />
        @else
            <div class="m-auto max-h-full min-h-screen w-full">
                <div class="title-filters m-auto w-full">

                    <div class="bg-[#119abb57] py-10">
                        <div class="title m-auto w-4/5">
                            <h1 class="text-3xl mb-2"> Meus Medicamentos </h1>
                            <p> Mantenha um registro completo e atualizado de sua terapia medicamentosa. Nesta seção, você pode visualizar, adicionar ou remover medicamentos conforme necessário. Tenha controle sobre os medicamentos que está tomando e garanta uma gestão eficiente do seu tratamento.</p>
                        </div>
                    </div>

                </div>

                <div class="py-5">
                    <div class="title m-auto w-4/5">
                        <h3 class="mb-1 font-bold">
                            Filtrar por:
                        </h3>

                        <form method="GET" action="{{ route('myMedications') }}"
                            class="font-semibold md:w-full lg:w-1/2">

                            <div class="justufy-center flex items-end">

                                <div class="mr-1 w-3/5">
                                    <label for="filterMedicationName"
                                        class="mb-2 block text-sm font-medium text-black dark:text-black">Nome do
                                        Medicamento:</label>
                                    <input type="text"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cyan-500 focus:ring-cyan-700"
                                        name="filterMedicationName" id="filterMedicationName"
                                        value="{{ $filterMedicationName }}">
                                </div>

                                <button type="submit"
                                    class="ml-2 rounded-lg border border-cyan-700 bg-cyan-600 py-2 px-2.5 text-white hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-cyan-300">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

                @if ($medications->isEmpty())
                    <x-no-results-found />
                @else
                    <div class="mx-auto my-2 grid w-4/6 gap-4 md:grid-cols-2 lg:grid-cols-4">
                        @foreach ($medications as $medication)
                            <div
                                class="card-vacina relative rounded-md border border-gray-300 bg-slate-100 hover:bg-gray-200">

                                <div class="rounded-t-md bg-cyan-700 px-5 py-2">
                                    <p class="font-bold text-white">{{ $medication->laboratory }}</p>
                                </div>

                                <div class="w-full">
                                    <div
                                        class="my-3 mx-auto flex flex-wrap content-center items-center justify-center uppercase">
                                        <div class="mr-5 w-1/4 rounded-full border border-gray-300 p-3">
                                            <img src="assets/img/icon/comprimidos.png" alt=""
                                                class="img-vacina">
                                        </div>
                                        <p class="w-1/3 font-bold">
                                            {{ $medication->medication_name }}
                                        </p>
                                    </div>

                                    <h3 class="m-auto w-1/3 rounded-md border-2 py-2 text-center font-semibold">
                                        {{ $medication->dosage }}
                                    </h3>

                                    <div>
                                        <div class="m-auto my-2 w-5/6">
                                            <p> Tratamento:
                                                <span class="font-bold">
                                                    {{ $medication->treatment }}
                                                </span>
                                            </p>
                                            <p> Frequência:
                                                <span class="font-bold">
                                                    {{ $medication->frequency }}
                                                </span>
                                            </p>
                                        </div>

                                        <div
                                            class="m-auto mb-5 mt-2 w-5/6 rounded-md border border-sky-300 bg-sky-200 p-2 text-sm shadow">
                                            <h3 class="mb-1 font-bold"> Observações: </h3>
                                            <p>
                                                {{ $medication->observations }}
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="absolute inset-0 flex flex-wrap items-center justify-center rounded-md opacity-0 transition-opacity duration-300">
                                        <a href="{{ route('editMedications', $medication->id) }}">
                                            <button type="button"
                                                class="mr-2 inline-flex items-center rounded-lg border border-blue-600 bg-blue-600 p-2.5 text-center text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-200">
                                                <div class="mr-2">
                                                    <i class="fa-solid fa-edit"></i>
                                                </div>
                                                Editar
                                            </button>
                                        </a>

                                        <a href="{{ route('deleteMedications', $medication->id) }}">
                                            <button type="button" onclick="confirmExclusao(event)"
                                                class="mr-2 inline-flex items-center rounded-lg border border-red-600 bg-red-500 p-2.5 text-center text-sm font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-200">
                                                <div class="mr-2">
                                                    <i class="fa-solid fa-trash"></i>
                                                </div>
                                                Excluir
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="m-auto mt-10 w-4/5">
                        <p class="mr-2 mb-5 text-lg font-bold">
                            Gostaria de fazer um novo cadastro de Medicamento?
                        </p>

                        <div class="flex items-center md:w-3/4 lg:w-1/4">
                            <h3 class="mr-2 text-lg font-semibold"> Clique Aqui: </h3>
                            <a href="{{ route('createNewMedications') }}">
                                <button type="button"
                                    class="inline-flex content-center items-center rounded-lg bg-cyan-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                                    Novo Medicamento
                                    <div class="ml-2 flex">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                @endif
        @endif

    </section>

    <x-btn-toTop />

</x-app-layout>
