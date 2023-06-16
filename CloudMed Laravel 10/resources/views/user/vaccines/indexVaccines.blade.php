@section('title', 'Minhas Vacinas')

<x-app-layout>
    <section class="session-allow">

        @if ($vaccines->isEmpty() && empty($filterNameVaccine) && empty($filterDoseType))
            <x-empty-vaccine />
        @else
            <div class="m-auto max-h-full min-h-screen w-full">
                <div class="title-filters m-auto w-full">

                    <div class="bg-[#119abb57] py-10">
                        <div class="title m-auto w-4/5">
                            <h1 class="text-3xl mb-2"> Minhas Vacinas </h1>
                            <p> Mantenha-se informado sobre sua imunização. Na seção de Vacinas, você pode acessar, adicionar ou remover vacinas, garantindo que seu histórico de imunização esteja sempre completo e atualizado. Fique protegido contra doenças e tenha um acompanhamento detalhado de suas vacinações.</p>
                        </div>
                    </div>

                </div>

                <div class="py-5">
                    <div class="title m-auto w-4/5">
                        <h3 class="mb-1 font-bold">
                            Filtrar por:
                        </h3>

                        <form method="GET" action="{{ route('myVaccines') }}" class="font-semibold md:w-full lg:w-1/2">

                            <div class="justufy-center flex items-end">

                                <div class="mr-4 w-3/4">
                                    <label for="filterNameVaccine"
                                        class="mb-2 block text-sm font-medium text-black dark:text-black">
                                        Nome da Vacina
                                    </label>
                                    <select name="filterNameVaccine" id="filterNameVaccine"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cyan-500 focus:ring-cyan-700">
                                        <option value="">Todas</option>
                                        @foreach ($nameVaccines as $name)
                                            <option value="{{ $name->id }}"
                                                {{ $filterNameVaccine == $name->id ? 'selected' : '' }}>
                                                {{ $name->name_vaccine }}
                                            </option>
                                        @endforeach
                                        <option value="0">Outras</option>
                                    </select>
                                </div>

                                <div class="mr-1 w-3/5">
                                    <label for="filterDoseType"
                                        class="mb-2 block text-sm font-medium text-black dark:text-black">Tipo de
                                        Dose</label>
                                    <select name="filterDoseType" id="filterDoseType"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cyan-500 focus:ring-cyan-700">

                                        <option value="">Todas</option>
                                        <option value="Dose Única"
                                            {{ $filterDoseType == 'Dose Única' ? 'selected' : '' }}>
                                            Dose Única
                                        </option>
                                        <option value="Primeira Dose"
                                            {{ $filterDoseType == 'Primeira Dose' ? 'selected' : '' }}>
                                            Primeira Dose
                                        </option>
                                        <option value="Segunda Dose"
                                            {{ $filterDoseType == 'Segunda Dose' ? 'selected' : '' }}>
                                            Segunda Dose
                                        </option>
                                        <option value="Terceira Dose"
                                            {{ $filterDoseType == 'Terceira Dose' ? 'selected' : '' }}>
                                            Terceira Dose
                                        </option>
                                        <option value="Quarta Dose"
                                            {{ $filterDoseType == 'Quarta Dose' ? 'selected' : '' }}>
                                            Quarta Dose
                                        </option>
                                        <option value="Reforco" {{ $filterDoseType == 'Reforco' ? 'selected' : '' }}>
                                            Reforço
                                        </option>

                                        <option value="Primeiro Reforço"
                                            {{ $filterDoseType == 'Primeiro Reforço' ? 'selected' : '' }}>
                                            Primeiro Reforço
                                        </option>
                                        <option value="Segundo Reforço"
                                            {{ $filterDoseType == 'Segundo Reforço' ? 'selected' : '' }}>
                                            Segundo Reforço
                                        </option>

                                    </select>
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

                @if ($vaccines->isEmpty())
                    <x-no-results-found />
                @else
                    <div class="m-auto grid w-4/5 gap-4 md:grid-cols-2 lg:grid-cols-4">
                        @foreach ($vaccines as $vaccine)
                            <div
                                class="card-vacina relative flex items-center justify-start rounded-md border border-gray-300 bg-slate-100 p-5 hover:bg-gray-200">
                                <div class="mr-3 w-20 rounded-full border border-gray-300 p-3">
                                    <img src="assets/img/icon/vacinne.png" alt="" class="img-vacina">
                                </div>

                                <div class="w-full">
                                    <div
                                        class="inline-flex w-full flex-wrap items-center justify-between text-sm font-semibold">
                                        <div class="rounded-full bg-cyan-700 px-3 py-1 uppercase text-white">
                                            <span>
                                                {{ $vaccine->doses }}
                                            </span>
                                        </div>
                                        <span class="text-gray-500">
                                            {{ date('d/m/y', strtotime($vaccine->vaccination_date)) }}
                                        </span>
                                    </div>

                                    <div class="py-1.5 font-bold text-cyan-900">
                                        <span>
                                            @if (empty($vaccine->new_vaccine_name))
                                                {{ $vaccine->nameVaccine->name_vaccine }}
                                            @else
                                                {{ $vaccine->new_vaccine_name }}
                                            @endif
                                        </span>
                                    </div>

                                    <div
                                        class="inline-flex w-full flex-wrap content-center justify-between text-sm font-semibold">
                                        <div class="rounded-full uppercase text-gray-700">
                                            <span>
                                                {{ $vaccine->manufacturer }}
                                            </span>
                                        </div>
                                        <div>
                                            {{ $vaccine->lot_number }}
                                        </div>
                                    </div>

                                    <div
                                        class="absolute inset-0 flex flex-wrap items-center justify-center rounded-md opacity-0 transition-opacity duration-300">
                                        <a href="{{ route('editVaccine', $vaccine->id) }}">
                                            <button type="button"
                                                class="mr-2 inline-flex items-center rounded-lg border border-blue-600 bg-blue-600 p-2.5 text-center text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-200">
                                                <div class="mr-2">
                                                    <i class="fa-solid fa-edit"></i>
                                                </div>
                                                Editar
                                            </button>
                                        </a>

                                        <a href="{{ route('deleteVaccine', $vaccine->id) }}">
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
                            Gostaria de fazer um novo cadastro de Vacina?
                        </p>

                        <div class="flex items-center md:w-3/4 lg:w-1/4">
                            <h3 class="mr-2 text-lg font-semibold"> Clique Aqui: </h3>
                            <a href="{{ route('createNewVaccine') }}">
                                <button type="button"
                                    class="inline-flex content-center items-center rounded-lg bg-cyan-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                                    Nova Vacina
                                    <div class="ml-2 flex">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        @endif

    </section>

    <x-btn-toTop />

</x-app-layout>
