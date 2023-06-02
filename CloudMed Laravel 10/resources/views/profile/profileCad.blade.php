@section('title', 'Perfil')

@extends('layouts.profile')

@section('conteudo')
    <form method="post" action="{{ route('profile.store') }}">
        @csrf
        <div class="title-profile mb-5">
            <h2>Perfil</h2>
        </div>

        <div class="grid md:grid-cols-2 md:gap-4">
            <div class="input-box cad-exame">
                <x-input-label for="nome" :value="__('Nome:')" />
                <input type="text" name="nome" id="nome" value="{{ $user->name }}" disabled
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="sobrenome" :value="__('Sobrenome:')" />
                <input type="text" name="sobrenome" id="sobrenome" value=""
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="data_nasc" :value="__('Data de Nascimento:')" />
                <input type="date" name="data_nasc" id="data_nasc" value=""
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="rg" :value="__('RG:')" />
                <input type="text" name="rg" id="rg" value="" maxlength="12"
                    onkeyup="this.value = formatarRG(this.value)"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="cpf" :value="__('CPF:')" />
                <input type="text" name="cpf" id="cpf" value="" maxlength="14"
                    onkeyup="this.value = formatarCPF(this.value)"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="email" :value="__('Email:')" />
                <input type="email" name="email" id="email" value="{{ $user->email }}" disabled
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="telefone" :value="__('Telefone:')" />
                <input type="text" name="telefone" id="telefone" value="" maxlength="15"
                    onkeyup="this.value = formatarTelefone(this.value)"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="grid md:grid-cols-3 md:gap-2">
                <div class="col-span-2 mb-6 w-full">
                    <x-input-label for="cidade" :value="__('Cidade:')" />
                    <input type="text" name="cidade" id="cidade" value=""
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                </div>
                <div class="w mb-6">
                    <div class="relative w-full">
                        <x-input-label for="uf" :value="__('UF:')" />
                        <select name="uf"
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

        <div class="btn-profile">
            <button type="submit" onclick="confirmEdit(event)"
                class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
                value="Salvar">
                Salvar
            </button>
        </div>
    </form>
@endsection
