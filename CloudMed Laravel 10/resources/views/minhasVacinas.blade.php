@extends('templates.headSessionAllow')

<title> Minhas Vacinas </title>

@section('contentPaciente')
    <section class="session-allow">

        <div class="pag-exames-vacinas min-h-screen ">

            <div class="title-filters">
                <div class="title">
                    <h1> Minhas Vacinas </h1>
                    <p> Aqui você encontra suas Vacinas Salvas no no nosso sistema.</p>
                </div>

                <div class="filter">
                    <h3>Filtrar por:</h3>

                    <form method="GET" action="{{ route('minhasVacinas') }}" class="w-1/2">

                        <div class="flex items-end justufy-center">


                            <div class="mr-4 w-3/4">
                                <label for="filtroNome"
                                    class="block mb-2 text-sm font-medium text-black dark:text-black">Nome da Vacina</label>
                                <select name="filtroNome" id="filtroNome"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-700 focus:border-cyan-500 block w-full p-2.5">
                                    <option value="">Todas</option>
                                    @foreach ($nomeVacinas as $nome)
                                        <option value="{{ $nome->id }}"
                                            {{ $filtroNome == $nome->id ? 'selected' : '' }}>
                                            {{ $nome->nomeVacina }}
                                        </option>
                                    @endforeach
                                    <option value="0">Outras</option>
                                </select>
                            </div>

                            <div class="mr-1 w-3/5">
                                <label for="filtroTipoDose"
                                    class="block mb-2 text-sm font-medium text-black dark:text-black">Tipo de Dose</label>
                                <select name="filtroTipoDose" id="filtroTipoDose"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-700 focus:border-cyan-500 block w-full p-2.5">

                                    <option value="">Todas</option>
                                    <option value="Dose Única" {{ $filtroTipoDose == 'Dose Única' ? 'selected' : '' }}>
                                        Dose Única
                                    </option>
                                    <option value="Primeira Dose"
                                        {{ $filtroTipoDose == 'Primeira Dose' ? 'selected' : '' }}>
                                        Primeira Dose
                                    </option>
                                    <option value="Segunda Dose" {{ $filtroTipoDose == 'Segunda Dose' ? 'selected' : '' }}>
                                        Segunda Dose
                                    </option>
                                    <option value="Terceira Dose"
                                        {{ $filtroTipoDose == 'Terceira Dose' ? 'selected' : '' }}>
                                        Terceira Dose
                                    </option>
                                    <option value="Quarta Dose" {{ $filtroTipoDose == 'Quarta Dose' ? 'selected' : '' }}>
                                        Quarta Dose
                                    </option>
                                    <option value="Reforco" {{ $filtroTipoDose == 'Reforco' ? 'selected' : '' }}>
                                        Reforço
                                    </option>

                                </select>
                            </div>

                            <button type="submit"
                                class="p-2.5 ml-2 text-sm font-medium text-white bg-cyan-600 rounded-lg border border-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:outline-none focus:ring-cyan-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>


            {{-- @if ($filtroNome || $filtroTipoDose)
            <div class="flex items-center mb-4">
                <span class="mr-2 font-medium text-gray-700">Filtrando por:</span>
                @if ($filtroNome)
                    <span class="mr-2 font-medium text-cyan-600">{{ $filtroNome }}</span>
                @endif

                @if ($filtroTipoDose)
                    <span class="font-medium text-cyan-600">{{ $filtroTipoDose }}</span>
                @endif
            </div>
            @endif --}}

            <div class="tabela relative overflow-x-auto shadow-md sm:rounded-lg m-auto w-auto">
                <table class="w-full text-base text-left text-black">
                    <thead class="text-lg text-white bg-cyan-600 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nome</th>
                            <th scope="col" class="px-6 py-3">Tipo de Dose</th>
                            <th scope="col" class="px-6 py-3">Data de Aplicação</th>
                            <th scope="col" class="px-6 py-3">Fabricante</th>
                            <th scope="col" class="px-6 py-3">Cidade</th>
                            <th scope="col" class="px-6 py-3">UF</th>
                            <th scope="col" class="px-6 py-3 text-center">Editar</th>
                            <th scope="col" class="px-6 py-3 text-center">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vacinas as $vacinas)
                            <tr class="bg-gray-50 border-gray-00 hover:bg-gray-200 ">
                                <td scope="row" class="px-6 py-4 font-medium text-black whitespace-wrap">
                                    @if (empty($vacinas->titulo))
                                        {{ $vacinas->nomeVacina->nomeVacina }}
                                    @else
                                        {{ $vacinas->titulo }}
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vacinas->tipoDose }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ date('d/m/y', strtotime($vacinas->data)) }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vacinas->fabricante }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vacinas->cidade }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ( empty($vacinas->uf->uf))
                                        UF indisponível
                                    @else
                                        {{ $vacinas->uf->uf }} 
                                    @endif
                                </td>

                                <!-- Editar -->
                                <td class="px-6 py-4 text-center">
                                    <a href="{{ route('vacinas.edit', $vacinas->id) }}"
                                        <button type="button"
                                            class="text-blue-600 border border-blue-600 hover:bg-blue-600 hover:text-white focus:ring-2 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 512 512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </button>
                                    </a> 
                                </td>

                                <!-- Excluir -->
                                <td class="px-6 py-4 text-center">
                                    <a href="/minhas-vacinas/delete/{{ $vacinas->id }}">
                                        <button type="button"
                                            class="text-red-500 border border-red-600 hover:bg-red-500 hover:text-white focus:ring-2 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" />
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </button>
                                    </a>
                                </td>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="py-20">
                <p class="mr-2 text-lg font-bold mb-5">
                    Gostaria de fazer um novo cadastro de Vacina?
                </p>

                <div class="flex items-center w-1/4">
                    <h3 class="mr-2 text-lg font-semibold"> Clique Aqui: </h3>
                    <a href="/cad-novo-vacina">
                        <button type="button"
                            class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:outline-none focus:ring-cyan-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                            Nova Vacina
                            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>

        </div>

    </section>

    <div class="toTop">
        <button onclick="backToTop()" id="toTopButton" type="button">
            <img src="{{ url('https://blog.social.mg.gov.br/wp-content/plugins/photo-gallery/css/bwg-fonts/fonts/bwg-fonts-svg/angle-up-sm.svg') }}"
                alt="arrowUp">
        </button>
    </div>
@endsection
