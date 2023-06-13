@section('title', 'Editar Perfil')

@extends('layouts.profile')

@section('conteudo')
    <div class="title-profile mb-5 absolute top-0 w-3/5 py-8 px-16">
        <h2> Perfil </h2>
        <p class="text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima vel nesciunt eum fugit
            exercitationem dolorem sunt aut libero maiores, soluta, dicta saepe! Quae maiores ab, eligendi vitae quo
            libero cumque!</p>
    </div>

    <form method="post" action="{{ route('profile.update', $userDetail->id) }}">
        @csrf
        @method('PUT')

        <div class="grid md:grid-cols-2 md:gap-4">
            <div class="input-box cad-exame">
                <x-input-label for="nome" :value="__('Nome:')" />
                <input type="text" name="nome" id="nome" value="{{ $user->name }}" disabled
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="last_name" :value="__('Sobrenome:')" />
                <input type="text" name="last_name" id="last_name" value="{{ $userDetail->last_name }}"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="data_nasc" :value="__('Data de Nascimento:')" />
                <input type="date" name="data_nasc" id="data_nasc" value="{{ $userDetail->date_of_birth }}"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="rg" :value="__('RG:')" />
                <input type="text" name="rg" id="rg"
                    value="{{ preg_replace('/(\d{2})(\d{3})(\d{3})(\d{1})/', '$1.$2.$3-$4', $userDetail->rg) }}"
                    maxlength="12" onkeyup="this.value = formatarRG(this.value)"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="cpf" :value="__('CPF:')" />
                <input type="text" name="cpf" id="cpf"
                    value="{{ preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $userDetail->cpf) }}"
                    maxlength="14" onkeyup="this.value = formatarCPF(this.value)"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="email" :value="__('Email:')" />
                <input type="email" name="email" id="email" value="{{ $user->email }}" disabled
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="input-box cad-exame">
                <x-input-label for="phone" :value="__('Telefone:')" />
                <input type="text" name="phone" id="phone"
                    value="{{ preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $userDetail->phone) }}" maxlength="15"
                    onkeyup="this.value = formatarTelefone(this.value)"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
            </div>
            <div class="grid md:grid-cols-3 md:gap-2">
                <div class="col-span-2 mb-6 w-full">
                    <x-input-label for="city" :value="__('Cidade:')" />
                    <input type="text" name="city" id="city" value="{{ $userDetail->city }}"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                </div>
                <div class="w mb-6">
                    <div class="relative w-full">
                        <x-input-label for="uf" :value="__('UF:')" />
                        <select name="uf"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                            <option value=""> Selecionar </option>
                            @foreach ($uf as $uf)
                                <option value="{{ $uf->id }}" {{ $uf->id == $userDetail->id_uf ? 'selected' : '' }}>
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
