@extends('templates.headSessionAllow')


<title> Bem-Vindo! </title>

@section('contentPaciente')

<section class="session-allow">
    <div class="min-h-screen">
        <h1 class="text-center py-10">
            Bem-Vindo(a) {{ Auth::user()->name }}!
        </h1>

        <div class="w-full flex align-center justify-center">
            <div class="max-w-sm bg-white rounded-md shadow mx-6">

                <img class="rounded-t-md" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />

                <div class="p-5">

                    <a href="/meus-exames">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Meus Exames</h5>
                    </a>

                    @if ($ultimoExame && $totalExames)
                    <p class="mb-3 font-normal text-gray-900">Total Cadastrado: {{$totalExames}}</p>
                    <p class="mb-3 font-normal text-gray-900">
                        Seu último exame salvo foi: '{{ $ultimoExame->titulo }}' da especialidade de {{ $ultimoExame->especialidade }},
                        realizado no dia {{ date('d/m/y', strtotime($ultimoExame->data))}},

                        @if ($isInstituicao)
                        pela instituição {{ $ultimoExame->instituicao }},
                        @else
                        não foi informada a instituição,
                        @endif

                        na cidade de {{ $ultimoExame->cidade }}.
                    </p>

                    @else
                    <p>Não há exames salvos</p>
                    @endif

                    <a href="/novo-cad-exame" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-cyan-700 rounded-md hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300">
                        Novo Exame
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="max-w-sm bg-white rounded-md shadow mx-6">

                <img class="rounded-t-md" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />

                <div class="p-5">

                    <a href="/meus-exames">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Minhas Vacinas</h5>
                    </a>

                    @if ($ultimaVacina && $totalVacinas)
                    <p class="mb-3 font-normal text-gray-900">Total Cadastrado: {{$totalVacinas}}</p>
                    <p class="mb-3 font-normal text-gray-900">Sua última vacina salva foi: '{{ $ultimaVacina->titulo }}' sendo {{ $ultimaVacina->tipoDose }},
                        aplicada no dia {{ date('d/m/y', strtotime($ultimaVacina->data))}},

                        @if ($isFabricante)
                        do fabricante {{ $ultimaVacina->fabricante }}
                        @else
                        @endif
                        na cidade de {{ $ultimaVacina->cidade }}</p>
                    @else
                    <p>Não há exames salvos</p>
                    @endif

                    <a href="/novo-cad-exame" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-cyan-700 rounded-md hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300">
                        Novo Exame
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>







    </div>
</section>


@endsection