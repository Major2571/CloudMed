@section('title', 'Editar Vacina')

<x-app-layout>
    <section class="login session-allow">
        <section class="form-cad-new-exam">

            <div class="form sm:w-5/6 md:w-3/5 lg:w-3/5 xl:w-2/5">
                <form method="POST" action="{{ route('updateVaccine', $vacinne->id) }}">

                    @csrf
                    @method('PUT')

                    <div class="cad-new-title pb-2 text-center">
                        <h1>Edite sua vacina </h1>
                    </div>

                    <div class="py-4 px-10">

                        <div class="mb-6">
                            <div class="relative w-full">
                                <label for="vaccine_name" class="mb-2 block font-medium text-gray-900"> Nome da Vacina:
                                </label>
                                <select name="vaccine_name" id="vacinaSelect"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                                    <option value=""> Selecionar </option>
                                    @foreach ($vaccineNames as $name)
                                        <option value="{{ $name->id }}"
                                            {{ $name->id == $vacinne->id_vaccine ? 'selected' : '' }}>
                                            {{ $name->name_vaccine }}
                                        </option>
                                    @endforeach
                                    <option value="0" {{ '0' == $vacinne->id_vaccine ? 'selected' : '' }}>Não
                                        encontrei minha vacina</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6 hidden" id="newVacinaInputContainer">
                            <p class="mb-2 font-semibold text-cyan-700">A lista fornecida abrange a maioria das vacinas
                                importantes e comuns. No entanto, pode haver outras vacinas recomendadas em casos
                                específicos. Caso não encontre a vacina desejada, você pode adicioná-la abaixo: </p>
                            <div class="input-box cad-exame form-group">
                                <x-input-label for="new_vaccine" :value="__('Nome da vacina:')" />
                                <x-text-input type="text" name="new_vaccine" id="newNomeVacinaInput"
                                    value="{{ $vacinne->new_vaccine_name }}" />
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div>
                                <div class="mb-6">
                                    <label for="dose_type" class="mb-2 block font-medium text-gray-900"> Dose: </label>
                                    <div class="relative w-full">
                                        <select name="dose_type"
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                                            <option value="">Selecionar</option>
                                            <option value="Dose Única"
                                                {{ $vacinne->doses == 'Dose Única' ? 'selected' : '' }}>Dose Única
                                            </option>
                                            <option value="Primeira Dose"
                                                {{ $vacinne->doses == 'Primeira Dose' ? 'selected' : '' }}>Primeira
                                                Dose
                                            </option>
                                            <option value="Segunda Dose"
                                                {{ $vacinne->doses == 'Segunda Dose' ? 'selected' : '' }}>Segunda
                                                Dose
                                            </option>
                                            <option value="Terceira Dose"
                                                {{ $vacinne->doses == 'Terceira Dose' ? 'selected' : '' }}>Terceira
                                                Dose
                                            </option>
                                            <option value="Quarta Dose"
                                                {{ $vacinne->doses == 'Quarta Dose' ? 'selected' : '' }}>Quarta Dose
                                            </option>
                                            <option value="Reforco"
                                                {{ $vacinne->doses == 'Reforco' ? 'selected' : '' }}>
                                                Reforço
                                            </option>
                                            <option value="Primeiro Reforço"
                                                {{ $vacinne->doses == 'Primeiro Reforço' ? 'selected' : '' }}>
                                                Primeiro Reforço
                                            </option>
                                            <option value="Segundo Reforço"
                                                {{ $vacinne->doses == 'Segundo Reforço' ? 'selected' : '' }}>
                                                Segundo Reforço
                                            </option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div>
                                <x-input-label for="vaccination_date" :value="__('Data de aplicação:')" />
                                <x-text-input type="date" name="vaccination_date" id="vaccination_date" value="{{ $vacinne->vaccination_date }}"
                                    required />
                            </div>
                        </div>

                        <div class="mb-6">
                            <x-input-label for="manufacturer" :value="__('Fabricante:')" />
                            <x-text-input type="text" name="manufacturer" id="manufacturer" placeholder="Ex: Fiocruz"
                                value="{{ $vacinne->manufacturer }}" required />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="lot_number" :value="__('Lote:')" />
                            <x-text-input type="text" name="lot_number" id="lot_number" placeholder="000000"
                                value="{{ $vacinne->lot_number }}" required />
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">

                            <div class="mb-6">
                                <x-input-label for="city" :value="__('Cidade:')" />
                                <x-text-input type="text" name="city" id="city"
                                    value="{{ $vacinne->city }}" required />
                            </div>

                            <div class="mb-6">
                                <div class="relative w-full">
                                    <label for="medical_specialty" class="mb-2 block font-medium text-gray-900"> UF </label>
                                    <select name="uf"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                                        <option value=""> Selecionar </option>
                                        @foreach ($uf as $uf)
                                            <option value="{{ $uf->id }}"
                                                {{ $uf->id == $vacinne->id_uf ? 'selected' : '' }}>
                                                {{ $uf->uf }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button m-auto flex flex-wrap items-center justify-center">
                        <a href="{{ route('myVaccines') }}">
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
