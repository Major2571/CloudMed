@extends('templates.headSessionAllow')

<title> Novo Exame </title>

@section('contentPaciente')

<section class="login session-allow">

    <section class="form-cad-new-exam">

        <div class="form">
            <form class="cad-new-exam" method="post" action="">
                <div class="title">
                    <h1 class="cad-new-title">Cadastrar Novo Exame</h1>
                </div>

                <div class="continer-input-box">
                    <div class="input-box cad-exame-vacina">
                        <label for="name"> Titulo </label>
                        <input type="text" name="name" id="name" required>
                    </div>

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

                    <div class="input-box cad-exame">
                        <label for="local"> Instituição </label>
                        <input type="text" name="local" id="local" required>
                    </div>

                    <div class="crm">
                        <div class="input-box">
                            <label for="cidade"> Cidade </label><br>
                            <input type="text" name="cidade" id="cidade" placeholder=" " required>
                        </div>

                        <div class="select">
                            <div class="input-box-sel">
                                <select class="UF">
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

                    <div class="input-box cad-exame">
                        <label for="exame-arquivo"> Arquivo do Exame </label>
                        <input type="file" name="exame-arquivo" id="exame-arquivo" required>
                    </div>
                </div>

                <div class="button">
                    <input class="btnSalvar" type="submit" value="Salvar">
                </div>
            </form>
        </div>

    </section>
    
@endsection