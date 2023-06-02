@foreach ($infoClinica as $info)
    <form method="post" action="{{ route('infoClinica.update', $info->id) }}">
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
                        <option value="Não Informado" {{ $info->tipoSanguineo == 'Não Informado' ? 'selected' : '' }}>
                            Selecione
                        </option>
                        <option value="O+" {{ $info->tipoSanguineo == 'O+' ? 'selected' : '' }}>
                            O+
                        </option>
                        <option value="O-" {{ $info->tipoSanguineo == 'O-' ? 'selected' : '' }}>
                            O-
                        </option>
                        <option value="A+" {{ $info->tipoSanguineo == 'A+' ? 'selected' : '' }}>
                            A+
                        </option>
                        <option value="A-" {{ $info->tipoSanguineo == 'A-' ? 'selected' : '' }}>
                            A-
                        </option>
                        <option value="B+" {{ $info->tipoSanguineo == 'B+' ? 'selected' : '' }}>
                            B+
                        </option>
                        <option value="B-" {{ $info->tipoSanguineo == 'B-' ? 'selected' : '' }}>
                            B-
                        </option>
                        <option value="AB+" {{ $info->tipoSanguineo == 'AB+' ? 'selected' : '' }}>
                            AB+
                        </option>
                        <option value="AB-" {{ $info->tipoSanguineo == 'AB-' ? 'selected' : '' }}>
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
                            {{ $info->tipoSanguineo == 'Não Informado' ? 'selected' : '' }}>Selecione
                        </option>
                        <option value="Sim" {{ $info->doador == 'Sim' ? 'selected' : '' }}>
                            Sim
                        </option>
                        <option value="Não" {{ $info->doador == 'Não' ? 'selected' : '' }}>
                            Não
                        </option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <div class="relative w-full">
                    <x-input-label for="altura" :value="__('Altura:')" />
                    <div class="flex items-center">
                        <x-text-input type="text" name="altura" id="altura" :value="old('altura', preg_replace('/(\d)(\d{2})$/', '$1,$2', $info->altura))" max="300"
                            onkeyup="formatarAltura(this)" required />
                        <span class="ml-2 pb-3"> m </span>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="relative w-full">
                    <x-input-label for="peso" :value="__('Peso:')" />
                    <div class="flex items-center">
                        <x-text-input type="text" name="peso" id="peso" :value="old('peso', preg_replace('/(\d+)(\d{2})$/', '$1.$2', $info->peso))" max="300"
                            onkeyup="formatarPeso(this)" required />
                        <span class="ml-2 pb-3"> kg </span>
                    </div>
                </div>
            </div>

            <div class="col-span-2 mb-3">
                <div class="relative w-full">
                    <x-input-label for="alergias" :value="__('Alergias:')" />
                    <textarea id="alergias" name="alergias" rows="4"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700"> {{ $info->alergias }}</textarea>
                </div>
                <div class="btn-profile">
                    <button type="submit"  onclick="confirmEdit(event)"
                        class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
                        value="Salvar">Salvar</button>
                </div>
            </div>

    </form>
@endforeach
