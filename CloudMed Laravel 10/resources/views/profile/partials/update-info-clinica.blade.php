<div class="profile-forms">
    @foreach ($infoClinica as $infoClinica)
        <form method="POST" action="{{ route('infoClinica.update', $infoClinica->id) }}">
            @csrf
            @method('PUT')
            <div class="title-profile mb-5">
                <h2> Informações Clínicas </h2>
            </div>

            <div class="grid md:grid-cols-2 md:gap-4">

                <div class="mb-3">
                    <div class="relative w-full">
                        <label for="tipoSanguineo" class="mb-2 block font-medium text-gray-900"> Tipo
                            Sanguínio
                        </label>
                        <select name="tipoSanguineo"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                            <option value="Não Informado"
                                {{ $infoClinica->tipoSanguineo == 'Não Informado' ? 'selected' : '' }}>Selecione
                            </option>
                            <option value="O+" {{ $infoClinica->tipoSanguineo == 'O+' ? 'selected' : '' }}>
                                O+
                            </option>
                            <option value="O-" {{ $infoClinica->tipoSanguineo == 'O-' ? 'selected' : '' }}>
                                O-
                            </option>
                            <option value="A+" {{ $infoClinica->tipoSanguineo == 'A+' ? 'selected' : '' }}>
                                A+
                            </option>
                            <option value="A-" {{ $infoClinica->tipoSanguineo == 'A-' ? 'selected' : '' }}>
                                A-
                            </option>
                            <option value="B+" {{ $infoClinica->tipoSanguineo == 'B+' ? 'selected' : '' }}>
                                B+
                            </option>
                            <option value="B-" {{ $infoClinica->tipoSanguineo == 'B-' ? 'selected' : '' }}>
                                B-
                            </option>
                            <option value="AB+" {{ $infoClinica->tipoSanguineo == 'AB+' ? 'selected' : '' }}>
                                AB+
                            </option>
                            <option value="AB-" {{ $infoClinica->tipoSanguineo == 'AB-' ? 'selected' : '' }}>
                                AB-
                            </option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="relative w-full">
                        <label for="doador" class="mb-2 block font-medium text-gray-900"> É doador de
                            orgãos?
                        </label>
                        <select name="doador"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                            <option value="" value="Não Informado"
                                {{ $infoClinica->tipoSanguineo == 'Não Informado' ? 'selected' : '' }}>Selecione
                            </option>
                            <option value="Sim" {{ $infoClinica->doador == 'Sim' ? 'selected' : '' }}>
                                Sim
                            </option>
                            <option value="Não" {{ $infoClinica->doador == 'Não' ? 'selected' : '' }}>
                                Não
                            </option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="relative w-full">
                        <x-input-label for="altura" :value="__('Altura:')" />
                        <x-text-input type="text" name="altura" id="altura" :value="old('altura', $infoClinica->altura)" required />
                    </div>
                </div>

                <div class="mb-3">
                    <div class="relative w-full">
                        <x-input-label for="peso" :value="__('Peso:')" />
                        <x-text-input type="text" name="peso" id="peso" :value="old('peso', $infoClinica->peso)" required />
                    </div>
                </div>

                <div class="mb-3 col-span-2">
                    <div class="relative w-full">
                        <x-input-label for="alergias" :value="__('Alergias:')" />
                        <textarea id="alergias" name="alergias" rows="4" class="p-2.5 w-full bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block"> {{ $infoClinica->alergias }}</textarea>
                    </div>
                </div>

            </div>
    @endforeach
    <div class="btn-profile">
        <button type="submit" onclick="saveProfileInfo(event)"
            class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
            value="Salvar">Salvar</button>
    </div>
    </form>
</div>
