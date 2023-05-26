<div class="profile-forms">
    <form method="POST" action="{{ route('infoClinica.store') }}">
        @csrf
        <div class="title-profile mb-5">
            <h2> Informações Clínicas </h2>
        </div>
    
        <div class="grid md:grid-cols-2 md:gap-10">
    
            <div class="mb-3">
                <div class="relative w-full">
                    <label for="tipoSanguineo" class="mb-2 block font-medium text-gray-900"> Tipo
                        Sanguínio
                    </label>
                    <select name="tipoSanguineo"
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
                    <label for="doador" class="mb-2 block font-medium text-gray-900"> É doador de
                        orgãos?
                    </label>
                    <select name="doador"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                        <option value="">Selecione</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>
            </div>
    
            <div class="mb-3">
                <div class="relative w-full">
                    <x-input-label for="altura" :value="__('Altura:')" />
                    <x-text-input type="text" name="altura" id="altura" required />
                </div>
            </div>
    
            <div class="mb-3">
                <div class="relative w-full">
                    <x-input-label for="peso" :value="__('Peso:')" />
                    <x-text-input type="text" name="peso" id="peso" required />
                </div>
            </div>
    
            <div class="mb-3">
                <div class="relative w-full">
                    <x-input-label for="alergias" :value="__('Alergias:')" />
                    <x-text-input type="text" name="alergias" id="alergias" required />
                </div>
            </div>
    
        </div>
        <button type="submit"
            class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
            value="Salvar">Salvar</button>
    </form>
</div>