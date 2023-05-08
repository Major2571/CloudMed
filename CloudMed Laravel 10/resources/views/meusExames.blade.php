@extends('templates.headSessionAllow')

<title> Meus Exames </title>

@section('contentPaciente')

<section class="session-allow">

    <section class="pag-exames-vacinas">
        <div class="title-filters">
            <div class="title">
                <h1> Meus Exames </h1>
                <p> Aqui você encontra seus Exames Salvos no no nosso sistema.</p>
            </div>

            <div class="filter">
                <h3>Filtrar por:</h3>

                <div class="select-data mr-4">
                    <div class="input-box select">
                        <!-- <label for="especialidades" class="block mb-2 text-sm font-medium text-black dark:text-black">Especialidade</label> -->
                        <select id="especialidades" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-700 focus:border-cyan-500 block w-full p-2.5">
                            <option value="">Especialidade</option>
                            <option value="Cardiologia">Cardiologia</option>
                            <option value="Cirurgia Plástica">Cirurgia Plástica</option>
                            <option value="Clinico Geral">Clinico Geral</option>
                            <option value="Dermatologia">Dermatologia</option>
                            <option value="Endocrinologia">Endocrinologia</option>
                            <option value="Ginecologia e Obstetrícia">Ginecologia e Obstetrícia</option>
                            <option value="Hematologia">Hematologia</option>
                            <option value="Neurologia">Neurologia</option>
                            <option value="Oftalmologia">Oftalmologia</option>
                            <option value="Ortopedia">Ortopedia</option>
                            <option value="Oncologia">Oncologia</option>
                            <option value="Pediatria">Pediatria</option>
                            <option value="Urologia">Urologia</option>
                        </select>
                    </div>
                </div>

                <!-- Input da Data -->
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input datepicker datepicker-orientation="bottom right" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-700 block w-full pl-10 p-2.5" placeholder="Data que foi Realizado">

                    <div class="hidden">
                        <div class="days">
                            <div class="days-of-week grid grid-cols-7 mb-1 dow block flex-1 leading-9 border-0 rounded-lg cursor-default text-center text-gray-900 font-semibold text-sm"></div>
                            <div class="datepicker-grid w-64 grid grid-cols-7 block flex-1 leading-9 border-0 rounded-lg cursor-default text-center text-gray-900 font-semibold text-sm h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400"></div>
                        </div>
                        <div class="calendar-weeks">
                            <div class="days-of-week flex"><span class="dow h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400"></span></div>
                            <div class="weeks week block flex-1 leading-9 border-0 rounded-lg cursor-default text-center text-gray-900 font-semibold text-sm"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="tabela relative overflow-x-auto shadow-md sm:rounded-lg m-auto w-auto">
            <table class="w-full text-base text-left text-black dark:text-black">
                <thead class="text-lg text-white dark:bg-cyan-600 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
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
                @foreach ($exames as $exames)
                    <tr class="bg-white border-b dark:bg-gray-50 dark:border-gray-00 hover:bg-gray-100 dark:hover:bg-gray-200">
                    </td>
                        <td class="px-6 py-4">
                            {{$exames->id}}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-black whitespace-wrap dark:text-black">
                            {{$exames->titulo}}
                        </td>
                        <td class="px-6 py-4">
                            {{$exames->especialidade}}
                        </td>
                        <td class="px-6 py-4">
                            {{$exames->date}}
                        </td>
                        <td class="px-6 py-4">
                            {{$exames->instituicao}}
                        </td>
                        <td class="px-6 py-4">
                            {{$exames->cidade}}
                        </td>
                        <td class="px-6 py-4">
                            {{$exames->uf}}
                        </td>

                        <!-- Visualizar -->
                        <td class="px-6 py-4 text-center">
                            <button type="submit" class="text-gray-500 border border-gray-500 hover:bg-gray-500 hover:text-white focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                </svg>
                                <span class="sr-only">Icon description</span>
                            </button>
                        </td>

                        <!-- Editar -->
                        <td class="px-6 py-4 text-center">
                            <button type="button" class="text-blue-600 border border-blue-600 hover:bg-blue-600 hover:text-white focus:ring-2 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                </svg>
                                <span class="sr-only">Icon description</span>
                            </button>
                        </td>

                        <!-- Excluir -->
                        <td class="px-6 py-4 text-center">
                            <form action="{{ route('exames.destroy', $exame->id) }}" method="post"> 
                                @crsf
                                @method('delete')
                                <button type="submit" name="delete" class="text-red-500 border border-red-600 hover:bg-red-500 hover:text-white focus:ring-2 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2">
                            </form>
                            
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" />
                                </svg>
                                <span class="sr-only">Icon description</span>
                            </button>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="cad-new">
            <p> Gostaria de fazer um novo cadastro de Exame?
            </p>
            <div>
                <h3> Clique Aqui: </h3>
                <a href="/novo-cad-exame">
                    <button type="button" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:outline-none focus:ring-cyan-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        Novo Exame
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </section>

</section>

<div class="toTop">
    <button onclick="backToTop()" id="toTopButton" type="button">
        <img src="{{url('https://blog.social.mg.gov.br/wp-content/plugins/photo-gallery/css/bwg-fonts/fonts/bwg-fonts-svg/angle-up-sm.svg')}}" alt="arrowUp">
    </button>
</div>

@endsection