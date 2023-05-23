@section('title', 'Novo Exame')

<x-app-layout>
    <section class="login session-allow">
        <section class="form-cad-new-exam">

            <div class="form">

                <form method="post" action="/cad-novo-exame" id="cadastroForm" enctype="multipart/form-data">

                    @csrf

                    <div class="text-center pb-2 cad-new-title">
                        <h1>Cadastre um novo Exame</h1>
                    </div>

                    <div class="py-4 px-10">

                        <div class="mb-6">
                            <label for="name" class="block mb-2 font-medium text-gray-900">
                                Título:
                            </label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                required placeholder="Ex: Hemograma Completo">
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div>
                                <div class="mb-6">
                                    <label for="especialidade" class="block mb-2 font-medium text-gray-900">
                                        Especialidade:
                                    </label>
                                    <div class="relative w-full">
                                        <select name="especialidade"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                            <option value=""> Selecionar </option>
                                            @foreach ($especialidades as $especialidade)
                                                <option value="{{ $especialidade->id }}">
                                                    {{ $especialidade->especialidade }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-6">
                                <label for="date" class="block mb-2 font-medium text-gray-900"> Data que foi
                                    realizada:
                                </label>
                                <input type="date" name="date" id="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>
                        </div>


                        <div class="mb-6">
                            <label for="local" class="block mb-2 font-medium text-gray-900"> Instituição: </label>
                            <input type="text" name="local" id="local"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                placeholder="Ex: Santa Casa">
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div class="mb-6">
                                <label for="cidade" class="block mb-2 font-medium text-gray-900"> Cidade: </label>
                                <input type="text" name="cidade" id="cidade"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>

                            <div class="mb-6">
                                <div class="relative w-full">
                                    <label for="especialidade" class="block mb-2 font-medium text-gray-900"> UF </label>
                                    <select name="uf"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5 pr-10">
                                        <option value=""> Selecionar </option>
                                        @foreach ($uf as $uf)
                                            <option value="{{ $uf->id }}">{{ $uf->uf }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <div id="preview-container" class="image-container w-4/5 m-auto">
                                <img id="chosen-image" class="img-preview w-4/5 block relative">
                                <figcaption id="file-name"></figcaption>
                            </div>

                            <div id="file-info" class="file-info"></div>

                            <input type="file" name="arquivo" id="arquivo" required>
                            <label
                                class="block relative bg-cyan-700 text-white text-md w-1/2 py-2.5 m-auto pointer text-center rounded-md"
                                for="arquivo">
                                <i class="fas fa-upload"></i> &nbsp; Escolha um Arquivo
                            </label>
                        </div>

                    </div>

                    <div class="button flex flex-wrap justify-center items-center m-auto">
                        <a href="{{ route('meusExames') }}">
                            <button type="button"
                                class="text-red-700 hover:text-white border border-red-600 hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-red-50 font-medium rounded-lg px-7 py-2 text-center mr-4 mb-2">
                                Cancelar
                            </button>
                        </a>
                        <button type="submit"
                            class="text-emerald-800 hover:text-white border border-emerald-600 hover:bg-emerald-600 focus:ring-2 focus:outline-none focus:ring-emerald-50 font-medium rounded-lg px-7 py-2 text-center mb-2"
                            value="Salvar">Salvar</button>
                    </div>
                </form>
            </div>

        </section>
    </section>
</x-app-layout>
