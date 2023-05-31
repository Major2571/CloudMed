@section('title', 'Editar Medicamento')

<x-app-layout>
    <section class="login session-allow">
        <section class="form-cad-new-exam">

            <div class="form sm:w-5/6 md:w-3/5 lg:w-3/5 xl:w-2/5">
                <form method="post" action="{{ route('updateMedicamentos', $medicamentos->id) }}" id="cadastroForm">

                    @csrf
                    @method('PUT')

                    <div class="cad-new-title pb-2 text-center">
                        <h1>Editar Medicamento</h1>
                    </div>

                    <div class="py-4 px-10">

                        <div class="mb-3">
                            <div class="relative w-full">
                                <x-input-label for="medicamento" :value="__('Nome do Medicamento:')" />
                                <x-text-input type="text" name="medicamento" id="medicamento"
                                    value="{{ $medicamentos->nome_medicamento }}" required />
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="relative w-full">
                                <x-input-label for="dosagem" :value="__('Dosagem:')" />
                                <x-text-input type="text" name="dosagem" id="dosagem"
                                    value="{{ $medicamentos->dosagem }}" required />
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="relative w-full">
                                <x-input-label for="laboratorio" :value="__('Laboratorio:')" />
                                <x-text-input type="text" name="laboratorio" value="{{ $medicamentos->laboratorio }}"
                                    id="laboratorio" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="relative w-full">
                                <x-input-label for="frequencia" :value="__('Frequência:')" />
                                <x-text-input type="text" name="frequencia" value="{{ $medicamentos->frequencia }}"
                                    id="frequencia" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="relative w-full">
                                <x-input-label for="tratamento" :value="__('Tratamento:')" />
                                <x-text-input type="text" name="tratamento" value="{{ $medicamentos->tratamento }}"
                                    id="tratamento" required />
                            </div>
                        </div>

                        <div class="col-span-2 mb-3">
                            <div class="relative w-full">
                                <x-input-label for="observacoes" :value="__('Observacoes:')" />
                                <textarea id="observacoes" name="observacoes" rows="4"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700"
                                    value="{{ $medicamentos->observacoes }}"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="button m-auto flex flex-wrap items-center justify-center">
                        <a href="{{ route('meusMedicamentos') }}">
                            <button type="button"
                                class="mr-4 mb-2 rounded-lg border border-red-600 px-7 py-2 text-center font-medium text-red-700 hover:bg-red-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-50">
                                Cancelar
                            </button>
                        </a>
                        <button type="submit" onclick="confirmEdit(event)"
                            class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
                            value="Salvar">Salvar</button>
                    </div>
                </form>
            </div>

        </section>
    </section>
</x-app-layout>
