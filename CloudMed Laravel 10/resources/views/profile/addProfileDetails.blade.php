@section('title', 'Perfil')

<x-app-layout>

    <section class="login session-allow">
        <section class="profile my-5 w-full h-screen">
            <div class="form md:w-4/5 lg:w-1/2">

                <form method="post" action="{{ route('profile.store') }}">
                    @csrf
                    <div class="title-profile mb-5">
                        <h2>Perfil</h2>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-4">
                        <div class="input-box cad-exame">
                            <label for="nome" class="mb-2 block font-medium text-gray-900"> Nome:
                            </label>
                            <input type="text" name="nome" id="nome" value="{{ $user->name }}" disabled
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                        </div>
                        <div class="input-box cad-exame">
                            <label for="sobrenome" class="mb-2 block font-medium text-gray-900"> Sobrenome:
                            </label>
                            <input type="text" name="sobrenome" id="sobrenome" value=""
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                        </div>
                        <div class="input-box cad-exame">
                            <label for="data_nasc" class="mb-2 block font-medium text-gray-900"> Data de
                                Nascimento:
                            </label>
                            <input type="date" name="data_nasc" id="data_nasc" value=""
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                        </div>
                        <div class="input-box cad-exame">
                            <label for="rg" class="mb-2 block font-medium text-gray-900"> RG:
                            </label>
                            <input type="text" name="rg" id="rg" value=""
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                        </div>
                        <div class="input-box cad-exame">
                            <label for="cpf" class="mb-2 block font-medium text-gray-900"> CPF:
                            </label>
                            <input type="text" name="cpf" id="cpf" value=""
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                        </div>
                        <div class="input-box cad-exame">
                            <label for="email" class="mb-2 block font-medium text-gray-900"> Email:
                            </label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}" disabled
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                        </div>

                        <div class="input-box cad-exame">
                            <label for="telefone" class="mb-2 block font-medium text-gray-900"> Telefone:
                            </label>
                            <input type="text" name="telefone" id="telefone" value=""
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                        </div>

                        <div class="grid md:grid-cols-3 md:gap-2">
                            <div class="col-span-2 mb-6 w-full">
                                <label for="cidade" class="mb-2 block font-medium text-gray-900"> Cidade:
                                </label>
                                <input type="text" name="cidade" id="cidade" value=""
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                            </div>
                            <div class="w mb-6">
                                <div class="relative w-full">
                                    <label for="especialidade" class="mb-2 block font-medium text-gray-900">
                                        UF
                                    </label>
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

                    <button type="submit" onclick="confirmEdit(event)"
                        class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
                        value="Salvar">
                        Salvar
                    </button>
                </form>

            </div>

        </section>
    </section>
</x-app-layout>
