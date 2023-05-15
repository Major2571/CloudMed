@extends('templates.headSessionAllow')

<title>Nova Vacina</title>

@section('contentPaciente')
    <section class="login session-allow">

        <section class="form-cad-new-exam">

            <div class="form">
                <form method="post" 
                    @if(isset($vacina))
                        action="{{ route('vacinas.update', $vacina->id) }}"
                    @else
                        action="/cad-novo-vacina"
                    @endif>
                    @csrf
                    @if(isset($vacina))
                        @method('put')
                    @endif
                    
                    <input type="hidden" name="id" value="{{ $vacina->id ?? '' }}">

                    <div class="text-center pb-2 cad-new-title">
                        <h1>Cadastrar uma nova Vacina</h1>
                    </div>

                    <div class="py-4 px-10">

                        <div class="mb-6">
                            <div class="relative w-full">
                                <label for="name" class="block mb-2 font-medium text-gray-900">Vacinas</label>
                                <select name="name" id="vacinaSelect"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                    <option value="">Selecionar</option>
                                    @foreach ($nomeVacinas as $nome)
                                        <option value="{{ $nome->id }}" {{ ($vacina->id_vacina ?? '') == $nome->id ? 'selected' : '' }}>{{ $nome->nomeVacina }}</option>
                                    @endforeach
                                    <option value="0">Não encontrei minha vacina</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6 hidden" id="newVacinaInputContainer">
                            <p class="mb-2 text-cyan-700 font-semibold">A lista que fornecemos abrange a grande maioria das vacinas importantes e comuns, mas pode haver outras vacinas que são recomendadas em alguns casos específicos. Adicione-a:</p>
                            <div class="form-group">
                                <label for="newNomeVacina" class="block mb-2 font-medium text-gray-900">Nome da vacina:</label>
                                <input type="text" name="newNomeVacina" id="newNomeVacinaInput"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    value="{{ $vacina->titulo ?? '' }}">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div>
                                <div class="mb-6">
                                    <label for="dose" class="block mb-2 font-medium text-gray-900">Dose:</label>
                                    <div class="relative w-full">
                                        <select name="tipoDose"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                            <option value="">Selecionar</option>
                                            <option value="Dose Única" {{ ($vacina->tipoDose ?? '') == 'Dose Única' ? 'selected' : '' }}>DoseÚnica</option>
                                            <option value="Primeira Dose" {{ ($vacina->tipoDose ?? '') == 'Primeira Dose' ? 'selected' : '' }}>Primeira Dose</option>
                                            <option value="Segunda Dose" {{ ($vacina->tipoDose ?? '') == 'Segunda Dose' ? 'selected' : '' }}>Segunda Dose</option>
                                            <option value="Terceira Dose" {{ ($vacina->tipoDose ?? '') == 'Terceira Dose' ? 'selected' : '' }}>Terceira Dose</option>
                                            <option value="Quarta Dose" {{ ($vacina->tipoDose ?? '') == 'Quarta Dose' ? 'selected' : '' }}>Quarta Dose</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="input-box cad-exame">
                                <label for="date" class="block mb-2 font-medium text-gray-900">Data de aplicação:</label>
                                <input type="date" name="date" id="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required value="{{ $vacina->data ?? '' }}">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="local" class="block mb-2 font-medium text-gray-900">Fabricante:</label>
                            <input type="text" name="local" id="local"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                required placeholder="Ex: Fiocruz" value="{{ $vacina->fabricante ?? '' }}">
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div class="mb-6">
                                <label for="cidade" class="block mb-2 font-medium text-gray-900">Cidade:</label>
                                <input type="text" name="cidade" id="cidade"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required value="{{ $vacina->cidade ?? '' }}">
                            </div>

                            <div class="mb-6">
                                <div class="relative w-full">
                                    <label for="especialidade" class="block mb-2 font-medium text-gray-900">UF</label>
                                    <select name="uf"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                        <option value="">Selecionar</option>
                                        @foreach ($uf as $estado)
                                            <option value="{{ $estado->id }}" {{ ($vacina->id_uf ?? '') == $estado->id ? 'selected' : '' }}>{{ $estado->uf }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit"
                            class="text-cyan-700 hover:text-white border border-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:outline-none focus:ring-cyan-50 font-medium rounded-lg px-7 py-2 text-center mr-2 mb-2"
                            value="Salvar">Salvar</button>
                    </div>
                </form>
            </div>

        </section>
    @endsection
