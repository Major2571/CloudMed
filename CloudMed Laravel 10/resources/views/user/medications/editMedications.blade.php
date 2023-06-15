@section('title', 'Editar Medicamento')

<x-app-layout>
    <section class="login session-allow">
        <section class="form-cad-new-exam">

            <div class="form sm:w-5/6 md:w-3/5 lg:w-3/5 xl:w-2/5">
                <form method="post" action="{{ route('updateMedications', $medications->id) }}" id="cadastroForm">

                    @csrf
                    @method('PUT')

                    <div class="cad-new-title pb-2 text-center">
                        <h1 class="text-3xl py-5">Editar Medicamento</h1>
                    </div>

                    <div class="py-4 px-10">

                        <div class="mb-3">
                            <div class="relative w-full">
                                <x-input-label for="medicamento" :value="__('Nome do Medicamento:')" />
                                <x-text-input type="text" name="medicamento" id="medicamento"
                                    value="{{ $medications->medication_name }}" required />
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="relative w-full">
                                <x-input-label for="dosage" :value="__('Dosagem:')" />
                                <x-text-input type="text" name="dosage" id="dosage"
                                    value="{{ $medications->dosage }}" required />
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="relative w-full">
                                <x-input-label for="laboratory" :value="__('Laboratorio:')" />
                                <x-text-input type="text" name="laboratory" value="{{ $medications->laboratory }}"
                                    id="laboratory" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="relative w-full">
                                <x-input-label for="frequency" :value="__('Frequência:')" />
                                <x-text-input type="text" name="frequency" value="{{ $medications->frequency }}"
                                    id="frequency" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="relative w-full">
                                <x-input-label for="treatment" :value="__('Tratamento:')" />
                                <x-text-input type="text" name="treatment" value="{{ $medications->treatment }}"
                                    id="treatment" required />
                            </div>
                        </div>

                        <div class="col-span-2 mb-3">
                            <div class="relative w-full">
                                <x-input-label for="observations" :value="__('Observacoes:')" />
                                <textarea id="observations" name="observations" rows="4"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700"> {{ $medications->observations }} </textarea>
                            </div>
                        </div>

                    </div>

                    <div class="button m-auto flex flex-wrap items-center justify-center">
                        <a href="{{ route('myMedications') }}">
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
