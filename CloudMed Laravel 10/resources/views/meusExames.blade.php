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
                <div class="select-data">
                    <div class="input-box select">
                        <label for="especialidade"> Especialidade</label>
                        <div class="input-box-sel cad-exame-vacina">
                            <select>
                                <option value="">Selecionar</option>
                                <option value="Cardiologia">Cardiologia</option>
                                <option value="Cirurgia Plástica">Cirurgia Plástica</option>
                                <option value="Clinico Geral">Clinico Geral</option>
                                <option value="Dermatologia">Dermatologia</option>
                                <option value="Endocrinologia">Endocrinologia</option>
                                <option value="Ginecologia e Obstetrícia">Ginecologia e Obstetrícia</option>
                                <option value="Hematologia">Hematologia</option>
                                <option value="Neurologia">Neurologia/option>
                                <option value="Oftalmologia">Oftalmologia</option>
                                <option value="Ortopedia">Ortopedia</option>
                                <option value="Oncologia">Oncologia</option>
                                <option value="Pediatria">Pediatria</option>
                                <option value="Urologia">Urologia</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-box cad-exame">
                        <label for="date"> Data que foi realizada </label>
                        <input type="date" name="date" id="date" placeholder=" 00 / 00 / 0000 " required>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="table">
            <table>

                <thead>
                    <tr>
                        
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                    </tr>
                    <tr>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                    </tr>
                    <tr>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                    </tr>
                    <tr>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                    </tr>
                </tbody>

            </table>
        </div> -->


        <div class="tabela relative overflow-x-auto shadow-md sm:rounded-lg m-auto w-auto">
            <table class="w-full text-base text-left text-black dark:text-black">
                <thead class="text-lg text-white dark:bg-cyan-600 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nome</th>
                        <th scope="col" class="px-6 py-3">Especialidade</th>
                        <th scope="col" class="px-6 py-3">Data</th>
                        <th scope="col" class="px-6 py-3">Instituição</th>
                        <th scope="col" class="px-6 py-3">Editar</th>
                        <th scope="col" class="px-6 py-3">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-50 dark:border-gray-00 hover:bg-gray-100 dark:hover:bg-gray-200">
                        <td scope="row" class="px-6 py-4 font-medium text-black whitespace-wrap dark:text-black">
                            Holter
                        </td>
                        <td class="px-6 py-4">
                            Cardiologia
                        </td>
                        <td class="px-6 py-4">
                            20/03/2019
                        </td>
                        <td class="px-6 py-4">
                            SUS
                        </td>
                        <td class="px-6 py-4">
                            <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                </svg>
                                <span class="sr-only">Icon description</span>
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button type="button" class="text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800 dark:hover:bg-red-500">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" />
                                </svg>
                                <span class="sr-only">Icon description</span>
                            </button>
                        </td>
                </tbody>
            </table>
        </div>

        <div class="cad-new">
            <p> Gostaria de fazer um novo cadastro de Exame?
            </p>
            <div>
                <h3> Clique Aqui: </h3>
                <a href="/novo-cad-exame">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-blue-800">
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