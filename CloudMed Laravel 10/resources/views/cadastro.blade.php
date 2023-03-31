@extends('templates.headLogin')

<title> Cadastro </title>

@section('contentLogin')

<section class="cadastros session-cads">

    <div class="form">

        <div class="title">
            <h1>Cadastre-se</h1>
            <p> Let's Craete you account! </p>
        </div>

        <form method="post" action="">
            <div class="continer-input-box">
                <div class="cad-info">
                    <div class="input-box">
                        <label for="name"> Nome Completo </label><br>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <div class="input-box">
                        <label for="date"> Data de Nascimento </label><br>
                        <input type="text" name="date" id="date" placeholder="    00 / 00 / 0000   " required>
                    </div>

                    <div class="input-box">
                        <label for="cpf"> CPF </label><br>
                        <input type="text" name="cpf" id="cpf" placeholder="   xxx.xxx.xxx-xx  " required>
                    </div>

                    <div class="input-box">
                        <label for="rg"> RG </label><br>
                        <input type="text" name="rg" id="rg" placeholder="  xx.xxx.xxx-x   " required>
                    </div>

                </div>

                <div class="crm">
                    <div class="input-box">
                        <label for="crm"> Cidade </label><br>
                        <input type="text" name="rg" id="rg" placeholder="" required>
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

                <div class="input-box">
                    <label for="sus"> Número do Cartão do Sus </label><br>
                    <input type="text" name="card-sus" id="card-sus" required>
                </div>
            </div>

            <div class="button">
                <input class="btnCadastrar" type="submit" value=" Cadastre-se ">
            </div>

        </form>

    </div>

</section>

@endsection