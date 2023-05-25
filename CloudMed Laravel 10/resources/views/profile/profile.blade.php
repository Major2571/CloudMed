@section('title', 'Perfil')

<x-app-layout>

    <section class="login session-allow">

        <section class="profile my-5 w-full">
            <div class="form md:w-4/5 lg:w-1/2">


                @if ( $userDetail->isEmpty() )
                    <!-- Exibir o btn de cadastro -->
                    <form>
                        @csrf
                        <div class="title-profile mb-5">
                            <h2> Perfil </h2>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div class="input-box cad-exame">
                                <label for="nome" class="mb-2 block font-medium text-gray-900"> Nome:
                                </label>
                                <input type="text" name="nome" id="nome" value="{{ $user->name }}" disabled
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                    required>
                            </div>
                            <div class="input-box cad-exame">
                                <label for="sobrenome" class="mb-2 block font-medium text-gray-900"> Sobrenome:
                                </label>
                                <input type="text" name="sobrenome" id="sobrenome" value="" disabled
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
                                <label for="telefone" class="mb-2 block font-medium text-gray-900"> Telefone:
                                </label>
                                <input type="text" name="telefone" id="telefone" value="" disabled
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                    required>
                            </div>

                            <div class="grid md:grid-cols-3 md:gap-2">
                                <div class="col-span-2 mb-6 w-full">
                                    <label for="cidade" class="mb-2 block font-medium text-gray-900"> Cidade: </label>
                                    <input type="text" name="cidade" id="cidade" value="" disabled
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                        required>
                                </div>
                                <div class="w mb-6">
                                    <div class="relative w-full">
                                        <label for="especialidade" class="mb-2 block font-medium text-gray-900"> UF
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
                    </form>
                    <div class="button m-auto flex flex-wrap items-center justify-center">
                        <a href="{{ route('profile.store') }}">
                            <button type="button"
                                class="mr-4 mb-2 rounded-lg border border-cyan-600 px-7 py-2 text-center font-medium text-cyan-700 hover:bg-cyan-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-50">
                                Editar Perfil
                            </button>
                        </a>
                    </div>
                @else
                        <form action="">
                            @csrf
                            @foreach ($userDetail as $userDetail)
                            
                            <div class="title-profile mb-5">
                                <h2> Perfil </h2>
                            </div>

                            <div class="grid md:grid-cols-2 md:gap-4">
                                <div class="input-box cad-exame">
                                    <label for="nome" class="mb-2 block font-medium text-gray-900"> Nome:
                                    </label>
                                    <input type="text" name="nome" id="nome" value="{{ $user->name }}"
                                        disabled
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                        required>
                                </div>
                                <div class="input-box cad-exame">
                                    <label for="sobrenome" class="mb-2 block font-medium text-gray-900"> Sobrenome:
                                    </label>
                                    <input type="text" name="sobrenome" id="sobrenome" value="{{ $userDetail->sobrenome }}" disabled
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                        required>
                                </div>
                                <div class="input-box cad-exame">
                                    <label for="data_nasc" class="mb-2 block font-medium text-gray-900"> Data de
                                        Nascimento:
                                    </label>
                                    <input type="date" name="data_nasc" id="data_nasc" value="{{ $userDetail->dataNascimento }}" disabled
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                        required>
                                </div>
                                <div class="input-box cad-exame">
                                    <label for="rg" class="mb-2 block font-medium text-gray-900"> RG:
                                    </label>
                                    <input type="text" name="rg" id="rg" value="{{ $userDetail->rg }}" disabled
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                        required>
                                </div>
                                <div class="input-box cad-exame">
                                    <label for="cpf" class="mb-2 block font-medium text-gray-900"> CPF:
                                    </label>
                                    <input type="text" name="cpf" id="cpf" value="{{ $userDetail->cpf }}" disabled
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                        required>
                                </div>
                                <div class="input-box cad-exame">
                                    <label for="email" class="mb-2 block font-medium text-gray-900"> Email:
                                    </label>
                                    <input type="email" name="email" id="email" value="{{ $user->email }}"
                                        disabled
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                        required>
                                </div>

                                <div class="input-box cad-exame">
                                    <label for="telefone" class="mb-2 block font-medium text-gray-900"> Telefone:
                                    </label>
                                    <input type="text" name="telefone" id="telefone" value="{{ $userDetail->telefone }}" disabled
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                        required>
                                </div>

                                <div class="grid md:grid-cols-3 md:gap-2">
                                    <div class="col-span-2 mb-6 w-full">
                                        <label for="cidade" class="mb-2 block font-medium text-gray-900"> Cidade:
                                        </label>
                                        <input type="text" name="cidade" id="cidade" value="{{ $userDetail->cidade }}" disabled
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none"
                                            required>
                                    </div>
                                    <div class="w mb-6">
                                        <div class="relative w-full">
                                            <label for="especialidade" class="mb-2 block font-medium text-gray-900">
                                                UF
                                            </label>
                                            <select name="uf" disabled
                                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none">
                                                <option value=""> Selecionar </option>
                                                @foreach ($uf as $uf)
                                                    <option value="{{ $uf->id }}"
                                                        {{ $uf->id == $userDetail->id_uf ? 'selected' : '' }}
                                                        >
                                                        {{ $uf->uf }}

                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </form>
                        <div class="button m-auto flex flex-wrap items-center justify-center">
                            <a href="{{ route( 'profile.edit', $userDetail->id ) }}">
                                <button type="button"
                                    class="mr-4 mb-2 rounded-lg border border-cyan-600 px-7 py-2 text-center font-medium text-cyan-700 hover:bg-cyan-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-50">
                                    Editar Perfil
                                </button>
                            </a>
                        </div>
                    
                @endif

            </div>

            <div class="form mt-4 md:w-4/5 lg:w-1/2">
                <div class="p-4 sm:rounded-lg sm:p-8">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:rounded-lg sm:p-8">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </section>
    </section>
</x-app-layout>
