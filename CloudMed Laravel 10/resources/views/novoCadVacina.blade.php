@extends('templates.headSessionAllow')

<title> Nova Vacina </title>

@section('contentPaciente')

<section class="login session-allow">

    <section class="form-cad-new-exam">

        <div class="form">
            <form method="post" action="/cad-novo-vacina">

                @csrf

                <div class="text-center pb-2 cad-new-title">
                    <h1>Cadastrar uma nova Vacina</h1>
                </div>

                <div class="py-4 px-10">

                    <div class="mb-6">
                        <label for="name" class="block mb-2 font-medium text-gray-900"> Nome da Vacina: </label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5" required
                        placeholder="Ex: Febre Amarela"
                        >
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-4">
                        <div>
                            <div class="mb-6">

                                <label for="dose" class="block mb-2 font-medium text-gray-900"> Dose: </label>
                                <div class="relative w-full">
                                    <select name="tipoDose" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                        <option value="">Selecionar</option>
                                        <option value="Dose Única">Dose Única</option>
                                        <option value="Primeira Dose">Primeira Dose</option>
                                        <option value="Segunda Dose">Segunda Dose</option>
                                        <option value="Tercira Dose">Terceira Dose</option>
                                        <option value="Quarta Dose">Quarta Dose</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="input-box cad-exame">
                            <label for="date" class="block mb-2 font-medium text-gray-900"> Data de aplicação: </label>
                            <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5" required>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="local" class="block mb-2 font-medium text-gray-900"> Fabricante: </label>
                        <input type="text" name="local" id="local" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5" required
                        placeholder="Ex: Fiocruz"
                        >
                    </div>

                     <div class="grid md:grid-cols-2 md:gap-4">
                        <div class="mb-6">
                            <label for="cidade" class="block mb-2 font-medium text-gray-900"> Cidade: </label>
                            <input type="text" name="cidade" id="cidade" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5" required>
                        </div>

                        <div class="mb-6">
                            <div class="relative w-full">
                                <label for="especialidade" class="block mb-2 font-medium text-gray-900"> UF </label>
                                <select name="uf" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                    <option value=""> Selecionar </option>
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
                </div>

                <div class="button">
                    <button type="submit" class="text-cyan-700 hover:text-white border border-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:outline-none focus:ring-cyan-50 font-medium rounded-lg px-7 py-2 text-center mr-2 mb-2" value="Salvar">Salvar</button>
                </div>
            </form>
        </div>

    </section>

    @endsection
