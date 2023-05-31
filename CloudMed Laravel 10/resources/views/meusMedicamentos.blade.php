@section('title', 'Meus Medicamento')

<x-app-layout>
    <section class="session-allow">

        <div class="m-auto max-h-full min-h-screen w-full">

            <div class="title-filters m-auto w-full">

                <div class="bg-[#119abb57] py-10">
                    <div class="title m-auto w-4/5">
                        <h1> Meus Medicamentos </h1>
                        <p> Aqui você encontra ...</p>
                    </div>
                </div>

            </div>

                <div class="tabela relative m-auto w-4/5 overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-left text-base text-black">
                        <thead class="text-md bg-cyan-600 text-white">
                            <tr>
                                <th scope="col" class="px-6 py-3">Medicamento</th>
                                <th scope="col" class="px-6 py-3">dosagem</th>
                                <th scope="col" class="px-6 py-3">laboratorio</th>
                                <th scope="col" class="px-6 py-3">frequencia</th>
                                <th scope="col" class="px-6 py-3">tratamento</th>
                                <th scope="col" class="px-6 py-3">observacoes</th>
                                <th scope="col" class="px-6 py-3 text-center">Editar</th>
                                <th scope="col" class="px-6 py-3 text-center">Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medicamentos as $medicamentos)
                                <tr class="border-gray-00 bg-gray-50 hover:bg-gray-100">
                                    </td>

                                    <td scope="row" class="whitespace-wrap px-6 py-4 font-medium text-black">
                                        {{ $medicamentos->nome_medicamento}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $medicamentos->dosagem }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $medicamentos->laboratorio }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $medicamentos->frequencia }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $medicamentos->tratamento }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $medicamentos->observacoes }}
                                    </td>

                                    <!-- Editar -->
                                    <td class="px-6 py-4 text-center">
                                        <a 
                                        href="{{ route('editMedicamentos', $medicamentos->id) }}"
                                            >
                                            <button type="button"
                                                class="mr-2 inline-flex items-center rounded-lg border border-blue-600 p-2.5 text-center font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-200">
                                                <i class="fa-solid fa-edit"></i>
                                            </button>
                                        </a>
                                    </td>
                                
                                    <!-- Excluir -->
                                    <td class="px-6 py-4 text-center">
                                        <a 
                                        href="{{ route('deleteMedicamentos', $medicamentos->id) }}"
                                        >
                                            <button type="button" onclick="confirmExclusao(event)"
                                                class="mr-2 inline-flex items-center rounded-lg border border-red-600 p-2.5 text-center font-medium text-red-500 hover:bg-red-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-200">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="m-auto mt-10 w-4/5">
                    <p class="mr-2 mb-5 text-lg font-bold">
                        Gostaria de fazer um novo cadastro de Vacina?
                    </p>

                    <div class="flex items-center md:w-3/4 lg:w-1/4">
                        <h3 class="mr-2 text-lg font-semibold"> Clique Aqui: </h3>
                        <a href="{{ route('novoCadMedicamentos') }}">
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

        </div>

    </section>

    <x-btn-toTop />

</x-app-layout>
