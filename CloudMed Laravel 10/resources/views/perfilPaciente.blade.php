@extends('templates.headSessionAllow')

<title> Perfil </title>

@section('contentPaciente')

<section class="login session-allow">

    <section class="profile">
        <div class="form">
            <form method="post" action="/profile" >
                <div class="continer-input-box">

                    <h2 class="title-profile"> Informações do Usuário </h2>

                    <div class="info-usuarios-grid">

                        <div class="input-box">
                            <label for="name"> Nome Completo</label><br>
                            <input type="text" name="name" id="name" required>
                        </div>

                        <div class="input-box">
                            <label for="date"> Data de Nascimento </label><br>
                            <input type="text" name="date" id="date" placeholder="   00 / 00 / 0000 " required>
                        </div>

                        <div class="input-box">
                            <label for="cpf"> CPF </label><br>
                            <input type="text" name="cpf" id="cpf" placeholder="   xxx.xxx.xxx-xx  " required>
                        </div>

                        <div class="input-box">
                            <label for="rg"> RG </label><br>
                            <input type="text" name="rg" id="rg" placeholder="   xx.xxx.xxx-x  " required>
                        </div>

                        <div class="input-box">
                            <label for="emai"> Email </label><br>
                            <input type="email" name="email" id="emai" required>
                        </div>

                        <div class="input-box">
                            <label for="number"> Celular </label><br>
                            <input type="tel" name="number" id="number" placeholder="   (00) 00000-0000  " required>
                        </div>

                        <div class="input-box">
                            <label for="city"> Cidade </label><br>
                            <input type="text" name="text" id="text" placeholder=" Selecione " required>
                        </div>

                        <div class="input-box select">
                            <label for="estado"> Estado </label><br>
                            <div class="input-box-sel">
                                <select name="uf">
                                    <option value=""> Selecione </option>
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

                        <div class="input-box">
                            <label for="convenio"> Cartão do Convênio </label><br>
                            <input type="text" name="numConvenio" id="numConvenio" required>
                        </div>

                        <div class="input-box">
                            <label for="convenio"> Nome do Convênio </label><br>
                            <input type="text" name="nomeConvenio" id="nomeConvenio" required>
                        </div>

                        <div class="input-box">
                            <label for="sus"> Cartão do Sus </label><br>
                            <input type="text" name="sus" id="sus" required>
                        </div>
                    </div>


                    <div class="autenticar-carteirinhas">
                        <h3> Para completar a autenticação, envie a foto da carteirinha: </h3>
                        <div class="autenticar-cart-flex">
                            <label for="sus-image" class="drop-container">
                                <h3> Cartão do SUS:</h3><br>
                                <span class="drop-title">Escolha seu Arquivo</span>
                                <input type="file" name="sus_image" id="sus-image" accept="image/*" required>
                            </label>

                            <label for="conv-image" class="drop-container">
                                <h3> Cartão do Convênio:</h3><br>
                                <span class="drop-title">Escolha seu Arquivo</span>
                                <input type="file" name="conv-image" id="convenio_image" accept="image/*" required>
                            </label>
                        </div>

                    </div>


                    <div class="info-clinicas">
                        <h2 class="title-profile"> Informações Clínicas </h2>

                        <div class="info-clinicas-flex">
                            <div class="input-box select">
                                <label for="tipo-sanguinio"> Tipo Sanguínio </label>
                                <div class="input-box-sel">
                                    <select>
                                        <option value="">Selecione</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                            </div>

                            <div class="input-box">
                                <label for="tipo"> É doador de orgãos? </label>
                                <div class="input-box-sel">
                                    <select>
                                        <option value="">Selecione</option>
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="button">
                    <input class="btnAlterar" type="submit" value="Alterar Senha">
                    <input class="btnSair" type="submit" value="Sair">
                    <input class="btnSalvar" type="submit" value="Salvar">
                </div>

            </form>
        </div>
    </section>

    @endsection