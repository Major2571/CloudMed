@section('title', 'Perfil')

@extends('layouts.profile')

@section('conteudo')

    <div class="title-profile mb-5 absolute top-0 w-3/5 py-8 px-16">
        <h2> Perfil </h2>
        <p class="text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima vel nesciunt eum fugit
            exercitationem dolorem sunt aut libero maiores, soluta, dicta saepe! Quae maiores ab, eligendi vitae quo
            libero cumque!</p>
    </div>
    @if ($userDetail->isEmpty())
        <!-- Exibir o btn de cadastro -->
        <form>
            @csrf
            <div class="grid md:grid-cols-2 md:gap-4">
                <div class="input-box cad-exame">
                    <x-input-label for="nome" :value="__('Nome:')" />
                    <x-text-input type="text" name="nome" id="nome" :value="old('name', $user->name)" required disabled />
                </div>
                <div class="input-box cad-exame">
                    <label for="last_name" class="mb-2 block font-medium text-gray-900"> Sobrenome:
                    </label>
                    <input type="text" name="last_name" id="last_name" value="" disabled
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                        required>
                </div>
                <div class="input-box cad-exame">
                    <label for="data_nasc" class="mb-2 block font-medium text-gray-900"> Data de
                        Nascimento:
                    </label>
                    <input type="date" name="data_nasc" id="data_nasc" value="" disabled
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                        required>
                </div>
                <div class="input-box cad-exame">
                    <label for="rg" class="mb-2 block font-medium text-gray-900"> RG:
                    </label>
                    <input type="text" name="rg" id="rg" value="" disabled
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                        required>
                </div>
                <div class="input-box cad-exame">
                    <label for="cpf" class="mb-2 block font-medium text-gray-900"> CPF:
                    </label>
                    <input type="text" name="cpf" id="cpf" value="" disabled
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                        required>
                </div>
                <div class="input-box cad-exame">
                    <label for="email" class="mb-2 block font-medium text-gray-900"> Email:
                    </label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" disabled
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                        required>
                </div>

                <div class="input-box cad-exame">
                    <label for="phone" class="mb-2 block font-medium text-gray-900"> Telefone:
                    </label>
                    <input type="text" name="phone" id="phone" value="" disabled
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                        required>
                </div>

                <div class="grid md:grid-cols-3 md:gap-2">
                    <div class="col-span-2 mb-6 w-full">
                        <label for="city" class="mb-2 block font-medium text-gray-900"> Cidade:
                        </label>
                        <input type="text" name="city" id="city" value="" disabled
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                            required>
                    </div>
                    <div class="w mb-6">
                        <div class="relative w-full">
                            <label for="medical_specialty" class="mb-2 block font-medium text-gray-900"> UF
                            </label>
                            <select name="uf" disabled
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                                <option value=""> Selecionar </option>
                                @foreach ($uf as $uf)
                                    <option value="{{ $uf->id }}">
                                        {{ $uf->uf }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button m-auto flex flex-wrap items-center justify-center">
                <a href="{{ route('profile.store') }}">
                    <button type="button"
                        class="mr-4 mb-2 rounded-lg border border-cyan-600 px-7 py-2 text-center font-medium text-cyan-700 hover:bg-cyan-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-50">
                        Editar Perfil
                    </button>
                </a>
            </div>
        </form>
    @else
        <form action="">
            @csrf
            @foreach ($userDetail as $userDetail)
                <div class="grid md:grid-cols-2 md:gap-4">
                    <div class="input-box cad-exame">
                        <x-input-label for="nome" :value="__('Nome:')" />
                        <x-text-input type="text" name="nome" id="nome" :value="old('name', $user->name)" required disabled
                            class="disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none" />
                    </div>
                    <div class="input-box cad-exame">
                        <x-input-label for="last_name" :value="__('Sobrenome:')" />
                        <input type="text" name="last_name" id="last_name" value="{{ $userDetail->last_name }}" disabled
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                            required>
                    </div>
                    <div class="input-box cad-exame">
                        <x-input-label for="data_nasc" :value="__('Data de Nascimento:')" />
                        <input type="date" name="data_nasc" id="data_nasc" value="{{ $userDetail->date_of_birth }}"
                            disabled
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                            required>
                    </div>
                    <div class="input-box cad-exame">
                        <x-input-label for="rg" :value="__('RG:')" />
                        <input type="text" name="rg" id="rg"
                            value="{{ preg_replace('/(\d{2})(\d{3})(\d{3})(\d{1})/', '$1.$2.$3-$4', $userDetail->rg) }}"
                            disabled
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                            required>
                    </div>
                    <div class="input-box cad-exame">
                        <x-input-label for="cpf" :value="__('CPF:')" />
                        <input type="text" name="cpf" id="cpf"
                            value="{{ preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $userDetail->cpf) }}"
                            disabled
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                            required>
                    </div>
                    <div class="input-box cad-exame">
                        <x-input-label for="email" :value="__('Email:')" />
                        <input type="email" name="email" id="email" value="{{ $user->email }}" disabled
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                            required>
                    </div>

                    <div class="input-box cad-exame">
                        <x-input-label for="phone" :value="__('Telefone:')" />
                        <input type="text" name="phone" id="phone"
                            value="{{ preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $userDetail->phone) }}"
                            disabled
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                            required>
                    </div>

                    <div class="grid md:grid-cols-3 md:gap-2">
                        <div class="col-span-2 mb-6 w-full">
                            <x-input-label for="city" :value="__('Cidade:')" />
                            <input type="text" name="city" id="city" value="{{ $userDetail->city }}"
                                disabled
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                required>
                        </div>
                        <div class="w mb-6">
                            <div class="relative w-full">
                                <x-input-label for="uf" :value="__('UF:')" />
                                <select name="uf" disabled
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                                    <option value=""> Selecionar </option>
                                    @foreach ($uf as $uf)
                                        <option value="{{ $uf->id }}"
                                            {{ $uf->id == $userDetail->id_uf ? 'selected' : '' }}>
                                            {{ $uf->uf }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="button m-auto flex flex-wrap items-center justify-center">
                <a href="{{ route('profile.edit', $userDetail->id) }}">
                    <button type="button"
                        class="mr-4 mb-2 rounded-lg border border-cyan-600 px-7 py-2 text-center font-medium text-cyan-700 hover:bg-cyan-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-50">
                        Editar Perfil
                    </button>
                </a>
            </div>
        </form>
    @endif
@endsection
