@section('title', 'Editar Vacina')

<x-app-layout>
    <section class="login session-allow">
        <section class="form-cad-new-exam">

            <div class="form xl:w-2/5 lg:w-3/5 md:w-3/5 sm:w-5/6">
                <form method="post" action="/minhas-vacinas/update/{{ $vacina->id }}">

                    @csrf
                    @method('PUT')

                    <div class="text-center pb-2 cad-new-title">
                        <h1>Edite sua vacina {{ $vacina->nomeVacina->nomeVacina }}</h1>
                    </div>

                    <div class="py-4 px-10">

                        <div class="mb-6">
                            <div class="relative w-full">
                                <label for="name" class="block mb-2 font-medium text-gray-900"> Nome da Vacina:
                                </label>
                                <select name="name" id="vacinaSelect"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                    <option value=""> Selecionar </option>
                                    @foreach ($nomeVacinas as $nome)
                                        <option value="{{ $nome->id }}"
                                            {{ $nome->id == $vacina->id_vacina ? 'selected' : '' }}>
                                            {{ $nome->nomeVacina }}
                                        </option>
                                    @endforeach
                                    <option value="0">Não encontrei minha vacina</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6 hidden" id="newVacinaInputContainer">
                            <p class="mb-2 text-cyan-700 font-semibold">A lista que fornecemos abrange a grande maioria
                                das
                                vacinas importantes e comuns, mas pode haver outras vacinas que são recomendadas em
                                alguns
                                casos específicos. Adicione-a: </p>
                            <div class="form-group">
                                <label for="newNomeVacina" class="block mb-2 font-medium text-gray-900">Nome da
                                    vacina:</label>
                                <input type="text" name="newNomeVacina" id="newNomeVacinaInput"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div>
                                <div class="mb-6">

                                    <label for="dose" class="block mb-2 font-medium text-gray-900"> Dose: </label>
                                    <div class="relative w-full">
                                        <select name="tipoDose"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                            <option value="">Selecionar</option>
                                            <option value="Dose Única"
                                                {{ $vacina->tipoDose == 'Dose Única' ? 'selected' : '' }}>Dose Única
                                            </option>
                                            <option value="Primeira Dose"
                                                {{ $vacina->tipoDose == 'Primeira Dose' ? 'selected' : '' }}>Primeira
                                                Dose
                                            </option>
                                            <option value="Segunda Dose"
                                                {{ $vacina->tipoDose == 'Segunda Dose' ? 'selected' : '' }}>Segunda Dose
                                            </option>
                                            <option value="Terceira Dose"
                                                {{ $vacina->tipoDose == 'Terceira Dose' ? 'selected' : '' }}>Terceira
                                                Dose
                                            </option>
                                            <option value="Quarta Dose"
                                                {{ $vacina->tipoDose == 'Quarta Dose' ? 'selected' : '' }}>Quarta Dose
                                            </option>
                                            <option value="Reforco"
                                                {{ $vacina->tipoDose == 'Reforco' ? 'selected' : '' }}>
                                                Reforço
                                            </option>
                                            <option value="Primeiro Reforço"
                                                {{ $vacina->tipoDose == 'Primeiro Reforço' ? 'selected' : '' }}>
                                                Primeiro Reforço
                                            </option>
                                            <option value="Segundo Reforço"
                                                {{ $vacina->tipoDose == 'Segundo Reforço' ? 'selected' : '' }}>
                                                Segundo Reforço
                                            </option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="input-box cad-exame">
                                <label for="date" class="block mb-2 font-medium text-gray-900"> Data de aplicação:
                                </label>
                                <input type="date" name="date" id="date" value="{{ $vacina->data }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="fabricante" class="block mb-2 font-medium text-gray-900"> Fabricante: </label>
                            <input type="text" name="fabricante" id="fabricante" value="{{ $vacina->fabricante }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                required placeholder="Ex: Fiocruz">
                        </div>

                        <div class="mb-6">
                            <label for="lote" class="block mb-2 font-medium text-gray-900"> Lote: </label>
                            <input type="text" name="lote" id="lote" value="{{ $vacina->lote }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                required>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div class="mb-6">
                                <label for="cidade" class="block mb-2 font-medium text-gray-900"> Cidade: </label>
                                <input type="text" name="cidade" id="cidade" value="{{ $vacina->cidade }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>

                            <div class="mb-6">
                                <div class="relative w-full">
                                    <label for="especialidade" class="block mb-2 font-medium text-gray-900"> UF </label>
                                    <select name="uf"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                        <option value=""> Selecionar </option>
                                        @foreach ($uf as $uf)
                                            <option value="{{ $uf->id }}"
                                                {{ $uf->id == $vacina->id_uf ? 'selected' : '' }}>
                                                {{ $uf->uf }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button flex flex-wrap justify-center items-center m-auto">
                        <a href="{{ route('minhasVacinas') }}">
                            <button type="button"
                                class="text-red-700 hover:text-white border border-red-600 hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-red-50 font-medium rounded-lg px-7 py-2 text-center mr-4 mb-2">
                                Cancelar
                            </button>
                        </a>
                        <button type="submit" onclick="confirmEdit(event)"
                            class="text-emerald-800 hover:text-white border border-emerald-600 hover:bg-emerald-600 focus:ring-2 focus:outline-none focus:ring-emerald-50 font-medium rounded-lg px-7 py-2 text-center mb-2"
                            value="Salvar">Salvar</button>
                    </div>
                </form>
            </div>

        </section>
    </section>
</x-app-layout>
