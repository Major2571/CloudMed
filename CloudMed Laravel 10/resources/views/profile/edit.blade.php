@extends('templates.headSessionAllow')

<title> Perfil </title>

@section('contentPaciente')

<section class="login session-allow">

    <section class="profile">
        <div class="form">
            <form method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')

                <div class="continer-input-box">

                    <h2 class="title-profile"> Informações do Usuário </h2>

                    <div class="info-usuarios-grid">

                        <div class="input-box">
                            <label for="name"> Nome Completo</label><br>
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div class="input-box">
                            <label for="date"> Data de Nascimento </label><br>
                            <input type="text" name="date" id="date" placeholder="   00 / 00 / 0000 ">
                        </div>

                        <div class="input-box">
                            <label for="cpf"> CPF </label><br>
                            <input type="text" name="cpf" id="cpf" placeholder="   xxx.xxx.xxx-xx  ">
                        </div>

                        <div class="input-box">
                            <label for="rg"> RG </label><br>
                            <input type="text" name="rg" id="rg" placeholder="   xx.xxx.xxx-x  ">
                        </div>

                        <div class="input-box">
                            <label for="emai"> Email </label><br>
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" autocomplete="username" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <div class="input-box">
                            <label for="number"> Celular </label><br>
                            <input type="tel" name="number" id="number" placeholder="   (00) 00000-0000  ">
                        </div>

                        <div class="input-box">
                            <label for="city"> Cidade </label><br>
                            <input type="text" name="text" id="text" placeholder=" Selecione ">
                        </div>

                        <div class="input-box select">
                            <label for="estado"> Estado </label><br>
                            <div class="input-box-sel">
                                <select>
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
                            <input type="text" name="numConvenio" id="numConvenio">
                        </div>

                        <div class="input-box">
                            <label for="convenio"> Nome do Convênio </label><br>
                            <input type="text" name="nomeConvenio" id="nomeConvenio">
                        </div>

                        <div class="input-box">
                            <label for="sus"> Cartão do Sus </label><br>
                            <input type="text" name="sus" id="sus">
                        </div>
                    </div>


                    <div class="autenticar-carteirinhas">
                        <h3> Para completar a autenticação, envie a foto da carteirinha: </h3>
                        <div class="autenticar-cart-flex">
                            <label for="sus-image" class="drop-container">
                                <h3> Cartão do SUS:</h3><br>
                                <span class="drop-title">Escolha seu Arquivo</span>
                                <input type="file" name="sus_image" id="sus-image" accept="image/*">
                            </label>

                            <label for="conv-image" class="drop-container">
                                <h3> Cartão do Convênio:</h3><br>
                                <span class="drop-title">Escolha seu Arquivo</span>
                                <input type="file" name="conv-image" id="convenio_image" accept="image/*">
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


                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                    @endif
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>

                </div>
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

            </form>
        </div>
    </section>

    <div class="button">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Sair</button>
        </form>
    </div>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">



        </div>
    </div>

</section>

@endsection