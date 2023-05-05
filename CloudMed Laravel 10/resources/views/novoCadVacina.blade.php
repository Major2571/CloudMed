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
                                    <option value="unicaDose">Dose Única</option>
                                    <option value="primeiraDose">Primeira Dose</option>
                                    <option value="segundaDose">Segunda Dose</option>
                                    <option value="terciraDose">Tercira Dose</option>
                                    <option value="quartaDose">Quarta Dose</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="input-box cad-exame">
                            <label for="date"> Data que foi realizada </label>
                            <input type="date" name="date" id="date" placeholder=" 00 / 00 / 0000 " required>
                        </div>
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
                                    <option value="AC"> Acre </option>
                                    <option value="AL"> Alagoas </option>
                                    <option value="AP"> Amapá </option>
                                    <option value="AM"> Amazonas </option>
                                    <option value="BA"> Bahia </option>
                                    <option value="CE"> Ceará </option>
                                    <option value="DF"> Distrito Federal </option>
                                    <option value="ES"> Espirito Santo </option>
                                    <option value="GO"> Goiás </option>
                                    <option value="MA"> Maranhão </option>
                                    <option value="MS"> Mato Grosso do Sul </option>
                                    <option value="MT"> Mato Grosso </option>
                                    <option value="MG"> Minas Gerais </option>
                                    <option value="PA"> Pará </option>
                                    <option value="PB"> Paraíba </option>
                                    <option value="PR"> Paraná </option>
                                    <option value="PE"> Pernambuco </option>
                                    <option value="PI"> Piauí </option>
                                    <option value="RJ"> Rio de Janeiro </option>
                                    <option value="RN"> Rio Grande do Norte </option>
                                    <option value="RS"> Rio Grande do Sul </option>
                                    <option value="RO"> Rondônia </option>
                                    <option value="RR"> Roraima </option>
                                    <option value="SC"> Santa Catarina </option>
                                    <option value="SP"> São Paulo </option>
                                    <option value="SE"> Sergipe </option>
                                    <option value="TO"> Tocantins </option>
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