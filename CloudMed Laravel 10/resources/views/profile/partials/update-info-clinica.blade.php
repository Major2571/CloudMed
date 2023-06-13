@foreach ($clinicalInfo as $info)
    <div class="title-profile mb-5 absolute top-0 w-3/5 py-8 px-16">
        <h2> Informações Clínicas </h2>
        <p class="text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima vel nesciunt eum fugit
            exercitationem dolorem sunt aut libero maiores, soluta, dicta saepe! Quae maiores ab, eligendi vitae quo
            libero cumque!</p>
    </div>

    <form method="post" action="{{ route('infoClinica.update', $info->id) }}" class="mt-10">
        @csrf
        @method('PUT')

        <div class="grid md:grid-cols-2 md:gap-4">
            <div class="mb-3">
                <div class="relative w-full">
                    <label for="blood_type" class="mb-2 block font-medium text-gray-900"> Tipo
                        Sanguíneo
                    </label>
                    <select name="blood_type"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                        <option value="Não Informado" {{ $info->blood_type == 'Não Informado' ? 'selected' : '' }}>
                            Selecione
                        </option>
                        <option value="O+" {{ $info->blood_type == 'O+' ? 'selected' : '' }}>
                            O+
                        </option>
                        <option value="O-" {{ $info->blood_type == 'O-' ? 'selected' : '' }}>
                            O-
                        </option>
                        <option value="A+" {{ $info->blood_type == 'A+' ? 'selected' : '' }}>
                            A+
                        </option>
                        <option value="A-" {{ $info->blood_type == 'A-' ? 'selected' : '' }}>
                            A-
                        </option>
                        <option value="B+" {{ $info->blood_type == 'B+' ? 'selected' : '' }}>
                            B+
                        </option>
                        <option value="B-" {{ $info->blood_type == 'B-' ? 'selected' : '' }}>
                            B-
                        </option>
                        <option value="AB+" {{ $info->blood_type == 'AB+' ? 'selected' : '' }}>
                            AB+
                        </option>
                        <option value="AB-" {{ $info->blood_type == 'AB-' ? 'selected' : '' }}>
                            AB-
                        </option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <div class="relative w-full">
                    <label for="is_donor" class="mb-2 block font-medium text-gray-900"> É doador de
                        orgãos?
                    </label>
                    <select name="is_donor"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                        <option value="" value="Não Informado"
                            {{ $info->blood_type == 'Não Informado' ? 'selected' : '' }}>Selecione
                        </option>
                        <option value="Sim" {{ $info->is_donor == 'Sim' ? 'selected' : '' }}>
                            Sim
                        </option>
                        <option value="Não" {{ $info->is_donor == 'Não' ? 'selected' : '' }}>
                            Não
                        </option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <div class="relative w-full">
                    <x-input-label for="height" :value="__('Altura:')" />
                    <div class="flex items-center">
                        <x-text-input type="text" name="height" id="height" :value="old('height', preg_replace('/(\d)(\d{2})$/', '$1,$2', $info->height))" max="300"
                            onkeyup="formatarAltura(this)" required />
                        <span class="ml-2 pb-3"> m </span>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="relative w-full">
                    <x-input-label for="weight" :value="__('Peso:')" />
                    <div class="flex items-center">
                        <x-text-input type="text" name="weight" id="weight" :value="old('weight', preg_replace('/(\d+)(\d{2})$/', '$1.$2', $info->weight))" max="300"
                            onkeyup="formatarPeso(this)" required />
                        <span class="ml-2 pb-3"> kg </span>
                    </div>
                </div>
            </div>

            <div class="col-span-2 mb-3">
                <div class="relative w-full">
                    <x-input-label for="allergies" :value="__('Alergias:')" />
                    <textarea id="allergies" name="allergies" rows="4"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700"> {{ $info->allergies }}</textarea>
                </div>
                <div class="btn-profile">
                    <button type="submit" onclick="confirmEdit(event)"
                        class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
                        value="Salvar">Salvar</button>
                </div>
            </div>

    </form>
@endforeach
