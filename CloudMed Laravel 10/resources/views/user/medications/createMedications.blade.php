@section('title', 'Novo Medicamento')

<x-app-layout>
    <section class="login session-allow">
        <section class="form-cad-new-exam">

            <div class="form sm:w-5/6 md:w-3/5 lg:w-3/5 xl:w-2/5">
                <form method="post" action="{{ route('saveNewMedications') }}" id="cadastroForm">

                    @csrf

                    <div class="cad-new-title pb-2 text-center">
                        <h1 class="py-5 text-3xl">Cadastre um novo Medicamento</h1>
                    </div>

                    <div class="py-4 px-10">

                        <div class="mb-4">
                            <div class="relative w-full">
                                <x-input-label for="medicamento" :value="__('Nome do Medicamento')" /><span
                                    class="text-red-500">*</span>:
                                <x-text-input type="text" name="medicamento" id="medicamento"
                                    placeholder="Ex: Losartana Potássica" required />
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <div class="relative w-full">
                                    <x-input-label for="dosage" :value="__('Dosagem')" /><span
                                        class="text-red-500">*</span>:
                                    <x-text-input type="text" name="dosage" id="dosage" placeholder="Ex: 50mg"
                                        required />
                                </div>
                            </div>

                            <div>
                                <div class="relative w-full">
                                    <x-input-label for="laboratory" :value="__('Laboratório:')" />
                                    <x-text-input type="text" name="laboratory" placeholder="Ex: Neo Química"
                                        id="laboratory" />
                                </div>
                            </div>

                            <div>
                                <div class="relative w-full">
                                    <x-input-label for="treatment" :value="__('Tratamento')" /><span
                                        class="text-red-500">*</span>:
                                    <x-text-input type="text" name="treatment"
                                        placeholder="Ex: Pressão Alta / Hipertensão" id="treatment" required />
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="relative w-full">
                                    <x-input-label for="frequency" :value="__('Frequência:')" />
                                    <x-text-input type="text" name="frequency" placeholder="Ex: Uso contínuo "
                                        id="frequency" />
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 mb-3">
                            <div class="relative w-full">
                                <x-input-label for="observations" :value="__('Observações:')" />
                                <textarea id="observations" name="observations" rows="4"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700"
                                    placeholder="Ex: Tomar 1 comprimido de 12/12 horas "></textarea>
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
                        <button type="submit"
                            class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
                            value="Salvar">Salvar</button>
                    </div>
                </form>
            </div>

        </section>
    </section>
</x-app-layout>
