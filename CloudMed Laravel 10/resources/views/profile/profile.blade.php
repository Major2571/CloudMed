@section('title', 'Perfil')

<x-app-layout>

    <section class="login session-allow">

        <div class="form">
            <form action="">
                <div class="grid md:grid-cols-2 md:gap-4">
                    <div class="input-box cad-exame">
                        <label for="nome" class="block mb-2 font-medium text-gray-900"> Nome:
                        </label>
                        <input type="text" name="nome" id="nome" value="{{$userName}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                            required>
                    </div>
                    <div class="input-box cad-exame">
                        <label for="sobrenome" class="block mb-2 font-medium text-gray-900"> Sobrenome:
                        </label>
                        <input type="text" name="sobrenome" id="sobrenome" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                            required>
                    </div>
                    <div class="input-box cad-exame">
                        <label for="data_nasc" class="block mb-2 font-medium text-gray-900"> Data de Nascimento:
                        </label>
                        <input type="date" name="data_nasc" id="data_nasc"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                            required>
                    </div>
                    <div class="input-box cad-exame">
                        <label for="rg" class="block mb-2 font-medium text-gray-900"> RG:
                        </label>
                        <input type="text" name="rg" id="rg"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                            required>
                    </div>
                    <div class="input-box cad-exame">
                        <label for="cpf" class="block mb-2 font-medium text-gray-900"> CPF:
                        </label>
                        <input type="text" name="cpf" id="cpf"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                            required>
                    </div>
                    <div class="input-box cad-exame">
                        <label for="email" class="block mb-2 font-medium text-gray-900"> Email:
                        </label>
                        <input type="email" name="email" id="email" value="{{$userEmail}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                            required>
                    </div>
                    <div class="input-box cad-exame">
                        <label for="telefone" class="block mb-2 font-medium text-gray-900"> Telefone:
                        </label>
                        <input type="text" name="telefone" id="telefone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="cidade" class="mb-2 block font-medium text-gray-900"> Cidade: </label>
                        <input type="text" name="cidade" id="cidade"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700"
                            required>
                    </div>
    
                    <div class="mb-6">
                        <div class="relative w-full">
                            <label for="especialidade" class="mb-2 block font-medium text-gray-900"> UF </label>
                            <select name="uf"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                                <option value=""> Selecionar </option>
                                @foreach ($uf as $uf)
                                    <option value="{{ $uf->id }}">{{ $uf->uf }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </section>

</x-app-layout>
