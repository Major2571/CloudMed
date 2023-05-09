@extends('templates.headSessionAllow')

<title> Novo Exame </title>

@section('contentPaciente')

<section class="login session-allow">

    <section class="form-cad-new-exam">

        <div class="form">
            <form class="cad-new-exam" method="post" action="/cad-novo-exame">

                @csrf

                <div class="text-center pb-2">
                    <h1 class="">Cadastrar Novo Exame</h1>
                </div>

                <div class="continer-input-box">

                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                            Título
                        </label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="select-data">
                        <div class="mb-6">
                            <label for="especialidade" class="block mb-2 text-sm font-medium text-gray-900"> Especialidade </label>
                            <div class="relative w-full">
                                <select name="especialidade" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pr-10 ">
                                    <option value="">Selecionar</option>
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

                    </div>

                    <div class="mb-6">
                        <label for="date"> Data que foi realizada </label>
                        <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-6">
                        <label for="local"> Instituição </label>
                        <input type="text" name="local" id="local" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="">
                        <div class="mb-6">
                            <label for="cidade"> Cidade </label><br>
                            <input type="text" name="cidade" id="cidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        </div>

                        <div class="mb-6">
                            <div class="relative w-full">
                                <select name="uf" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pr-10 ">
                                    <option value=""> UF </option>
                                    <option value="AC"> AC </option>
                                    <option value="AL"> AL </option>
                                    <option value="AP"> AP </option>
                                    <option value="AM"> AM </option>
                                    <option value="BA"> BA </option>
                                    <option value="CE"> CE </option>
                                    <option value="DF"> DF </option>
                                    <option value="ES"> ES </option>
                                    <option value="GO"> GO </option>
                                    <option value="MA"> MA </option>
                                    <option value="MS"> MS </option>
                                    <option value="MT"> MT </option>
                                    <option value="MG"> MG </option>
                                    <option value="PA"> PA </option>
                                    <option value="PB"> PB </option>
                                    <option value="PR"> PR </option>
                                    <option value="PE"> PE </option>
                                    <option value="PI"> PI </option>
                                    <option value="RJ"> RJ </option>
                                    <option value="RN"> RN </option>
                                    <option value="RS"> RS </option>
                                    <option value="RO"> RO </option>
                                    <option value="RR"> RR </option>
                                    <option value="SC"> SC </option>
                                    <option value="SP"> SP </option>
                                    <option value="SE"> SE </option>
                                    <option value="TO"> TO </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!--<div class="input-box cad-exame">
                        <label for="exame-arquivo"> Arquivo do Exame </label>
                        <input type="file" name="exame-arquivo" id="exame-arquivo" required>
                    </div> -->

                </div>

                <div class="button">
                    <button type="submit" class="text-cyan-700 hover:text-white border border-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:outline-none focus:ring-cyan-50 font-medium rounded-lg px-7 py-2 text-center mr-2 mb-2" value="Salvar">Salvar</button>
                </div>
            </form>
        </div>

    </section>

    @endsection