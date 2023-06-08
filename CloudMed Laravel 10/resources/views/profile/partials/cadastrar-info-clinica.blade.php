<form method="POST" action="{{ route('infoClinica.store') }}">
    @csrf
    <div class="title-profile mb-5">
        <h2> Informações Clínicas </h2>
    </div>

    <div class="grid gap-x-5 md:grid-cols-2">

        <div class="mb-3">
            <div class="relative w-full">
                <label for="blood_type" class="mb-2 block font-medium text-gray-900"> Tipo
                    Sanguínio
                </label>
                <select name="blood_type"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                    <option value="">Selecione</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <div class="relative w-full">
                <label for="is_donor" class="mb-2 block font-medium text-gray-900"> É is_donor de
                    orgãos?
                </label>
                <select name="is_donor"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                    <option value="">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <div class="relative">
                <x-input-label for="height" :value="__('Altura:')" />
                <div class="flex items-center">
                    <x-text-input type="text" name="height" placeholder="Ex: 170" id="height" max="300"
                        onkeyup="formatarAltura(this)" required />
                    <span class="ml-2 pb-3"> cm </span>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="relative w-full">
                <x-input-label for="weight" :value="__('Peso:')" />
                <div class="flex items-center">
                    <x-text-input type="text" name="weight" placeholder="Ex: 65,4" id="weight" max="300"
                        onkeyup="formatarPeso(this)" required />
                    <span class="ml-2 pb-3"> kg </span>
                </div>
            </div>
        </div>

        <div class="col-span-2 mb-3">
            <div class="relative w-full">
                <x-input-label for="allergies" :value="__('Alergias:')" />
                <textarea id="allergies" name="allergies" rows="4"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700"
                    placeholder="Escreva suas principais allergies..."></textarea>
            </div>
        </div>

    </div>
    <div class="btn-profile">
        <button type="submit" onclick="saveProfileInfo()"
            class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
            value="Salvar">Salvar</button>
    </div>
</form>
