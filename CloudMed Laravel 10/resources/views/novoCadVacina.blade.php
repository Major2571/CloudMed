@extends('templates.headSessionAllow')

<title> Nova Vacina </title>

@section('contentPaciente')

<section class="login session-allow">

    <section class="form-cad-new-exam">

        <div class="form">
            <form class="cad-new-exam" method="post" action="/cad-novo-vacina">
            @csrf
                <div class="title">
                    <h1 class="cad-new-title">Cadastrar Nova Vacina</h1>
                </div>

                <div class="continer-input-box">
                    <div class="input-box cad-exame-vacina">
                        <label for="name"> Titulo </label>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <div class="select-data">
                        <div class="input-box select">
                            <label for="dose">Tipo de Dose</label>
                            <div class="input-box-sel cad-exame-vacina">
                                <select name="tipoDose">
                                    <option value="">Selecionar</option>
                                    <option value="Dose Única">Dose Única</option>
                                    <option value="Primeira Dose">Primeira Dose</option>
                                    <option value="Segunda Dose">Segunda Dose</option>
                                    <option value="Tercira Dose">Tercira Dose</option>
                                    <option value="Quarta Dose">Quarta Dose</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-box cad-exame">
                        <label for="date"> Data que foi realizada </label>
                        <input type="date" name="date" id="date" required>
                    </div>

                    <div class="input-box cad-exame">
                        <label for="local"> Fabricante </label>
                        <input type="text" name="local" id="local" required>
                    </div>

                    <div class="crm">
                        <div class="input-box">
                            <label for="cidade"> Cidade </label><br>
                            <input type="text" name="cidade" id="cidade" placeholder=" " required>
                        </div>

                        <div class="select">
                            <div class="input-box-sel">
                                <select name="uf">
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
                </div>

                <div class="button">
                    <button type="submit" class="text-cyan-700 hover:text-white border border-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:outline-none focus:ring-cyan-50 font-medium rounded-lg px-7 py-2 text-center mr-2 mb-2" value="Salvar">Salvar</button>
                </div>
            </form>
        </div>

    </section>
    
@endsection