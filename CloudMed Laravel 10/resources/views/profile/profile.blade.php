@section('title', 'Perfil')

<x-app-layout>


    <section class="login session-allow">

        <section class="profile w-full my-5">
            <div class="form lg:w-1/2 md:w-4/5">

                @if ($userDetail->isEmpty())
                    <form action="">
                        <div class="mb-5 title-profile">
                            <h2> Perfil </h2>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div class="input-box cad-exame">
                                <label for="nome" class="block mb-2 font-medium text-gray-900"> Nome:
                                </label>
                                <input type="text" name="nome" id="nome" value="{{ $userName }}" disabled
                                    class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>
                            <div class="input-box cad-exame">
                                <label for="sobrenome" class="block mb-2 font-medium text-gray-900"> Sobrenome:
                                </label>
                                <input type="text" name="sobrenome" id="sobrenome" value="" disabled
                                    class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>
                            <div class="input-box cad-exame">
                                <label for="data_nasc" class="block mb-2 font-medium text-gray-900"> Data de
                                    Nascimento:
                                </label>
                                <input type="date" name="data_nasc" id="data_nasc" value="" disabled
                                    class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>
                            <div class="input-box cad-exame">
                                <label for="rg" class="block mb-2 font-medium text-gray-900"> RG:
                                </label>
                                <input type="text" name="rg" id="rg" value="" disabled
                                    class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>
                            <div class="input-box cad-exame">
                                <label for="cpf" class="block mb-2 font-medium text-gray-900"> CPF:
                                </label>
                                <input type="text" name="cpf" id="cpf" value="" disabled
                                    class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>
                            <div class="input-box cad-exame">
                                <label for="email" class="block mb-2 font-medium text-gray-900"> Email:
                                </label>
                                <input type="email" name="email" id="email" value="{{ $userEmail }}" disabled
                                    class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>

                            <div class="input-box cad-exame">
                                <label for="telefone" class="block mb-2 font-medium text-gray-900"> Telefone:
                                </label>
                                <input type="text" name="telefone" id="telefone" value="" disabled
                                    class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>

                            <div class="grid md:grid-cols-3 md:gap-2">
                                <div class="mb-6 w-full col-span-2">
                                    <label for="cidade" class="mb-2 block font-medium text-gray-900"> Cidade: </label>
                                    <input type="text" name="cidade" id="cidade" value="" disabled
                                        class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none  block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700"
                                        required>
                                </div>
                                <div class="mb-6 w">
                                    <div class="relative w-full">
                                        <label for="especialidade" class="mb-2 block font-medium text-gray-900"> UF
                                        </label>
                                        <select name="uf" disabled
                                            class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none  block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                                            <option value=""> Selecionar </option>
                                            @foreach ($uf as $uf)
                                                <option value="{{ $uf->id }}" {{ $uf->uf }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="button m-auto flex flex-wrap items-center justify-center">
                        <a href="{{ route('profile.edit', $userDetail->id) }}">
                            <button type="button"
                                class="mr-4 mb-2 rounded-lg border border-cyan-600 px-7 py-2 text-center font-medium text-cyan-700 hover:bg-cyan-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-50">
                                Editar Perfil
                            </button>
                        </a>
                    </div>
                @else
                    @foreach ($userDetail as $userDetail)
                        <form action="">
                            <div class="mb-5 title-profile">
                                <h2> Perfil </h2>
                            </div>

                            <div class="grid md:grid-cols-2 md:gap-4">
                                <div class="input-box cad-exame">
                                    <label for="nome" class="block mb-2 font-medium text-gray-900"> Nome:
                                    </label>
                                    <input type="text" name="nome" id="nome" value="{{ $userName }}"
                                        disabled
                                        class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                        required>
                                </div>
                                <div class="input-box cad-exame">
                                    <label for="sobrenome" class="block mb-2 font-medium text-gray-900"> Sobrenome:
                                    </label>
                                    <input type="text" name="sobrenome" id="sobrenome" value="" disabled
                                        class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                        required>
                                </div>
                                <div class="input-box cad-exame">
                                    <label for="data_nasc" class="block mb-2 font-medium text-gray-900"> Data de
                                        Nascimento:
                                    </label>
                                    <input type="date" name="data_nasc" id="data_nasc" value="" disabled
                                        class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                        required>
                                </div>
                                <div class="input-box cad-exame">
                                    <label for="rg" class="block mb-2 font-medium text-gray-900"> RG:
                                    </label>
                                    <input type="text" name="rg" id="rg" value="" disabled
                                        class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                        required>
                                </div>
                                <div class="input-box cad-exame">
                                    <label for="cpf" class="block mb-2 font-medium text-gray-900"> CPF:
                                    </label>
                                    <input type="text" name="cpf" id="cpf" value="" disabled
                                        class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                        required>
                                </div>
                                <div class="input-box cad-exame">
                                    <label for="email" class="block mb-2 font-medium text-gray-900"> Email:
                                    </label>
                                    <input type="email" name="email" id="email" value="{{ $userEmail }}"
                                        disabled
                                        class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                        required>
                                </div>

                                <div class="input-box cad-exame">
                                    <label for="telefone" class="block mb-2 font-medium text-gray-900"> Telefone:
                                    </label>
                                    <input type="text" name="telefone" id="telefone" value="" disabled
                                        class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                        required>
                                </div>

                                <div class="grid md:grid-cols-3 md:gap-2">
                                    <div class="mb-6 w-full col-span-2">
                                        <label for="cidade" class="mb-2 block font-medium text-gray-900"> Cidade:
                                        </label>
                                        <input type="text" name="cidade" id="cidade" value="" disabled
                                            class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none  block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700"
                                            required>
                                    </div>
                                    <div class="mb-6 w">
                                        <div class="relative w-full">
                                            <label for="especialidade" class="mb-2 block font-medium text-gray-900">
                                                UF
                                            </label>
                                            <select name="uf" disabled
                                                class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none  block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
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
                        </form>
                        <div class="button m-auto flex flex-wrap items-center justify-center">
                            <a href="{{ route('profile.edit', $userDetail->id) }}">
                                <button type="button"
                                    class="mr-4 mb-2 rounded-lg border border-cyan-600 px-7 py-2 text-center font-medium text-cyan-700 hover:bg-cyan-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-50">
                                    Editar Perfil
                                </button>
                            </a>
                        </div>
                    @endforeach

                @endif


            </div>

            <div class="form mt-4 lg:w-1/2 md:w-4/5">
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
    </section>
</x-app-layout>
