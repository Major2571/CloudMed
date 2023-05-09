@extends('templates.headSessionAllow')

<title> Perfil </title>

@section('contentPaciente')

<section class="login session-allow">

    <section class="profile">
        <div class="form">
            <form method="post" action="{{ route('profile.update') }}">

                @csrf
                @method('patch')

                <div class="">

                    <div class="px-10 py-5">

                        <div class="mb-5 title-profile">
                            <h2> Perfil </h2>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-6">

                            <div class="">
                                <x-input-label for="name" :value="__('Nome:')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" autofocus autocomplete="name" />
                            </div>

                            <div class="">
                                <x-input-label for="date" :value="__('Data de Nascimento:')" />
                                <x-text-input type="date" name="date" id="date" required />
                            </div>

                            <div class="">
                                <x-input-label for="cpf" :value="__('CPF:')" />
                                <x-text-input type="text" name="cpf" id="cpf" placeholder="   xxx.xxx.xxx-xx  " required />
                            </div>

                            <div class="">
                                <x-input-label for="rg" :value="__('RG:')" />
                                <x-text-input type="text" name="rg" id="rg" placeholder="   xx.xxx.xxx-x  " required />
                            </div>

                            <div class="">
                                <x-input-label for="emai" :value="__('Email:')" />
                                <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" autocomplete="username" />
                            </div>

                            <div class="">
                                <x-input-label for="number" :value="__('Celular:')" />
                                <x-text-input type="tel" name="number" id="number" placeholder="   (00) 00000-0000  " required />
                            </div>


                            <div class="">
                                <x-input-label for="cidade" :value="__('Cidade:')" />
                                <x-text-input type="text" name="cidade" id="cidade" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5" required />
                            </div>

                            <div class="">
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

                            <div class="">
                                <x-input-label for="num-convenio" :value="__('Cartão do Convênio:')" />
                                <x-text-input type="text" name="numConvenio" id="numConvenio" required />
                            </div>

                            <div class="">
                                <x-input-label for="nome-convenio" :value="__('Nome do Convênio:')" />
                                <x-text-input type="text" name="nomeConvenio" id="nomeConvenio" required />
                            </div>

                            <div class="">
                                <x-input-label for="num-sus" :value="__('Cartão do Sus:')" />
                                <x-text-input type="text" name="sus" id="sus" required />
                            </div>
                        </div>

                    </div>


                    <div class="px-10 py-5">
                        <h3> Para completar a autenticação, envie a foto da sua carteirinha: </h3>

                        <div class="grid md:grid-cols-2 md:gap-6">

                            <div class="mt-5">
                                <h3> Cartão do SUS:</h3><br>
                                <div class="flex items-center justify-center w-full">
                                    <label for="sus-image" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input type="file" id="sus-image" accept="image/*" required class="hidden" />
                                    </label>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h3> Cartão do Convênio:</h3><br>
                                <div class="flex items-center justify-center w-full">
                                    <label for="conv-image" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input type="file" id="conv-image" accept="image/*" required class="hidden" />
                                    </label>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="px-10 py-5">

                    <div class="mb-5 title-profile">
                            <h2> Informacões Clínicas </h2>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-10">

                            <div class="mb-6">
                                <div class="relative w-full">
                                    <label for="tipo-sanguinio" class="block mb-2 font-medium text-gray-900"> Tipo Sanguínio </label>
                                    <select name="tipo-sanguinio" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
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
                                    <label for="doador" class="block mb-2 font-medium text-gray-900"> É doador de orgãos? </label>
                                    <select name="doador" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                        <option value="">Selecione</option>
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>


                <div class="flex items-center gap-4 button">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

        </div>

        <div class="form mt-4">
            <div class="p-4 sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>

    </section>


    <div class="button">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-2 focus:outline-none focus:ring-red-50 font-medium rounded-lg px-7 py-2 text-center mr-2 mb-2"> Sair </button>
        </form>
    </div>


</section>

@endsection