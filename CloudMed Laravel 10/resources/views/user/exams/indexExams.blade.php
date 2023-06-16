@section('title', 'Meus Exames')

<x-app-layout>
    <section class="session-allow">

        @if ($exam->isEmpty() && empty($filterMedicalSpecialty) && empty($filterExamDate))
            <x-empty-exam />
        @else
            <div class="m-auto max-h-full min-h-screen w-full">
                <div class="title-filters m-auto w-full">
                    <div class="bg-[#119abb57] py-10">
                        <div class="title m-auto w-4/5">
                            <h1 class="mb-2 text-3xl"> Meus Exames </h1>
                            <p> Organize e gerencie seus arquivos de saúde de forma segura. Nesta seção, você pode
                                visualizar os resultados de seus exames médicos, incluindo análises laboratoriais,
                                radiografias e outros documentos relevantes. Mantenha seus resultados de exames sempre
                                disponíveis, facilite o compartilhamento com profissionais de saúde e tenha um histórico
                                completo de sua saúde.</p>
                        </div>
                    </div>
                </div>

                <div class="py-5">
                    <div class="title m-auto w-4/5">
                        <h3 class="mb-1 font-bold">
                            Filtrar por:
                        </h3>

                        <form method="GET" action="{{ route('myExams') }}" class="w-1/2 font-semibold">

                            <div class="justufy-center flex items-end">

                                <div class="mr-4 w-3/4">
                                    <label for="filterMedicalSpecialty"
                                        class="mb-2 block text-sm font-medium text-black dark:text-black">Especialidade</label>
                                    <select name="filterMedicalSpecialty" id="filterMedicalSpecialty"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cyan-500 focus:ring-cyan-700">
                                        <option value="">Todas</option>
                                        @foreach ($medical_specialtys as $medical_specialty)
                                            <option value="{{ $medical_specialty->id }}"
                                                {{ $filterMedicalSpecialty == $medical_specialty->id ? 'selected' : '' }}>
                                                {{ $medical_specialty->medical_specialty }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="mr-1 w-3/5">
                                    <label for="filterExamDate"
                                        class="mb-2 block text-sm font-medium text-black dark:text-black">Data de
                                        realização:</label>
                                    <input type="date" max="{{date('Y-m-d')}}"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cyan-500 focus:ring-cyan-700"
                                        name="filterExamDate" id="filterExamDate" value="{{ $filterExamDate }}">
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

                @if ($exam->isEmpty())
                    <x-no-results-found />
                @else
                    <div class="tabela relative m-auto w-4/5 overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-left text-base text-black">
                            <thead class="text-md bg-cyan-600 text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Nome</th>
                                    <th scope="col" class="px-6 py-3">Especialidade</th>
                                    <th scope="col" class="px-6 py-3">Data</th>
                                    <th scope="col" class="px-6 py-3">Instituição</th>
                                    <th scope="col" class="px-6 py-3">Cidade</th>
                                    <th scope="col" class="px-6 py-3">UF</th>
                                    <th scope="col" class="px-6 py-3 text-center">Visualizar</th>
                                    <th scope="col" class="px-6 py-3 text-center">Editar</th>
                                    <th scope="col" class="px-6 py-3 text-center">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exam as $exam_detail)
                                    <tr class="border-gray-00 bg-gray-50 hover:bg-gray-100">
                                        </td>

                                        <td scope="row" class="whitespace-wrap px-6 py-4 font-medium text-black">
                                            {{ $exam_detail->exam_title }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if (empty($exam_detail->medical_specialty->medical_specialty))
                                                Não informado
                                            @else
                                                {{ $exam_detail->medical_specialty->medical_specialty }}
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ date('d/m/y', strtotime($exam_detail->exam_date)) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $exam_detail->institution }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $exam_detail->city }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if (empty($exam_detail->uf->uf))
                                                UF indisponível
                                            @else
                                                {{ $exam_detail->uf->uf }}
                                            @endif
                                        </td>

                                        {{-- Visualizar --}}
                                        @if ($exam_detail->file_exam_name === null)
                                            <td class="px-6 py-4 text-center">

                                                <button type="button" disabled
                                                    class="mr-2 inline-flex cursor-not-allowed items-center rounded-lg border p-2.5 text-center font-medium focus:outline-none focus:ring-2 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-300 disabled:shadow-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>

                                            </td>
                                        @else
                                            <td class="px-6 py-4 text-center">
                                                <a href="{{ asset('storage/exam_files/' . $exam_detail->file_exam_name) }}"
                                                    target="blank">
                                                    <button type="button"
                                                        class="mr-2 inline-flex items-center rounded-lg border border-gray-500 p-2.5 text-center font-medium text-gray-500 hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-300">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        @endif

                                        <!-- Editar -->
                                        <td class="px-6 py-4 text-center">
                                            <a href="{{ route('editExam', $exam_detail->id) }}">
                                                <button type="button"
                                                    class="mr-2 inline-flex items-center rounded-lg border border-blue-600 p-2.5 text-center font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-200">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </a>
                                        </td>

                                        <!-- Excluir -->
                                        <td class="px-6 py-4 text-center">
                                            <a href="{{ route('deleteExam', $exam_detail->id) }}">
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

                    <div class="m-auto w-4/5 py-2 mt-10">
                        <p class="mr-2 mb-5 text-lg font-bold">
                            Gostaria de fazer um novo cadastro de Exame?
                        </p>

                        <div class="flex w-1/4 items-center">
                            <h3 class="mr-2 text-lg font-semibold"> Clique Aqui: </h3>
                            <a href="{{ route('createNewExam') }}">
                                <button type="button"
                                    class="inline-flex items-center rounded-lg bg-cyan-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                                    Novo Exame
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
