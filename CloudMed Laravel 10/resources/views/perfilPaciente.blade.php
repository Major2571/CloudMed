@section('title', 'Meu Perfil')

<x-app-layout>

    <section class="login session-allow">

        <section class="">

            <div class="form">
                <form method="post" action="/profile">

                    @csrf

                    <div class="continer-input-box">

                        <h2 class="title-profile"> Informações do Usuário </h2>

                        <div class="info-usuarios-grid">

                            <div class="input-box">
                                <label for="name"> Nome Completo</label><br>
                                <input type="text" name="name" id="name" required>
                            </div>

                            <div class="input-box">
                                <label for="date"> Data de Nascimento </label><br>
                                <input type="text" name="date" id="date" placeholder="   00 / 00 / 0000 "
                                    required>
                            </div>

                            <div class="input-box">
                                <label for="cpf"> CPF </label><br>
                                <input type="text" name="cpf" id="cpf" placeholder="   xxx.xxx.xxx-xx  "
                                    required>
                            </div>

                            <div class="input-box">
                                <label for="rg"> RG </label><br>
                                <input type="text" name="rg" id="rg" placeholder="   xx.xxx.xxx-x  "
                                    required>
                            </div>

                            <div class="input-box">
                                <label for="emai"> Email </label><br>
                                <input type="email" name="email" id="emai" required>
                            </div>

                            <div class="input-box">
                                <label for="number"> Celular </label><br>
                                <input type="tel" name="number" id="number" placeholder="   (00) 00000-0000  "
                                    required>
                            </div>

                            <div class="grid md:grid-cols-2 md:gap-4">
                                <div class="mb-6">
                                    <label for="cidade" class="block mb-2 font-medium text-gray-900"> Cidade: </label>
                                    <input type="text" name="cidade" id="cidade"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                        required>
                                </div>

                                <div class="mb-6">
                                    <div class="relative w-full">
                                        <label for="especialidade" class="block mb-2 font-medium text-gray-900"> UF
                                        </label>
                                        <select name="uf"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
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
                                    <input type="file" name="conv-image" id="convenio_image" accept="image/*"
                                        required>
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

                                <div class="mb-6">
                                    <div class="relative w-full">
                                        <label for="doador" class="block mb-2 font-medium text-gray-900"> É doador
                                            de orgãos? </label>
                                        <select name="doador"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
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

</x-app-layout>
