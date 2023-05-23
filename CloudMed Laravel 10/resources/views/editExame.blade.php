@section('title', 'Editar Exame')

<x-app-layout>
    <section class="login session-allow">
        <section class="form-cad-new-exam">

            <div class="form xl:w-2/5 sm:w-9/12">
                <form method="post" action="/meus-exames/update/{{ $exame->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="text-center pb-2 cad-new-title">
                        <h1>Edite seu Exame cadastrado</h1>
                    </div>

                    <div class="py-4 px-10">

                        <div class="mb-6">
                            <label for="name" class="block mb-2 font-medium text-gray-900">
                                Título:
                            </label>
                            <input type="text" name="name" id="name" value="{{ $exame->titulo }}"
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
                                                <option value="{{ $especialidade->id }}"
                                                    {{ $especialidade->id == $exame->id_especialidade ? 'selected' : '' }}>
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
                                <input type="date" name="date" id="date" value="{{ $exame->data }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                    required>
                            </div>
                        </div>


                        <div class="mb-6">
                            <label for="local" class="block mb-2 font-medium text-gray-900"> Instituição: </label>
                            <input type="text" name="local" id="local" value="{{ $exame->instituicao }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                required placeholder="Ex: Santa Casa">
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div class="mb-6">
                                <label for="cidade" class="block mb-2 font-medium text-gray-900"> Cidade: </label>
                                <input type="text" name="cidade" id="cidade" value="{{ $exame->cidade }}"
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
                                            <option value="{{ $uf->id }}"
                                                {{ $uf->id == $exame->id_uf ? 'selected' : '' }}>
                                                {{ $uf->uf }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        @if ($exame->nome_arquivo)
                            @php
                                $fileExtension = pathinfo($exame->nome_arquivo, PATHINFO_EXTENSION);
                                $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
                                $isImage = in_array($fileExtension, $imageExtensions);
                            @endphp

                            @if ($isImage)
                                <div class="text-center">

                                    <p class="block mb-2 font-semibold text-gray-900 py-2"> Preview do Exame:</p>

                                    <div class="mb-5" id="preview-container">

                                        <img src="{{ asset('storage/arquivos_exames/' . $exame->nome_arquivo) }}"
                                            alt="Preview do Exame" id="chosen-image"
                                            class="img-preview rounded-lg border border-gray-300 shadow-sm w-4/5 m-auto">

                                        <figcaption id="file-name" class="block mb-2 font-medium text-gray-900 py-2">
                                            {{ $exame->nome_arquivo }}
                                        </figcaption>

                                    </div>

                                    <div id="file-info" class="file-info bg-white"></div>

                                    <div class="relative mb-2 w-1/2 m-auto">
                                        <input type="file" name="arquivo" id="arquivo" required>
                                        <figcaption id="file-name"></figcaption>
                                        <label
                                            class="block relative hover:bg-cyan-900 bg-cyan-700 text-white text-md py-2.5 m-auto pointer text-center rounded-md cursor-pointer"
                                            for="arquivo">
                                            <i class="fas fa-upload"></i> &nbsp; Escolha um novo arquivo
                                        </label>
                                    </div>
                                </div>
                            @else
                                <div class="text-center">

                                    {{-- <p class="block mb-2 font-semibold text-gray-900 py-2"> Arquivo do Exame:</p> --}}

                                    <div class="mb-5" id="preview-container">

                                        <div>
                                            <a href="{{ asset('storage/arquivos_exames/' . $exame->nome_arquivo) }}"
                                                target="blank">
                                                <button type="button"
                                                    class="border bg-gray-500 border-gray-500 hover:bg-gray-700 text-white focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-md py-2.5 px-3.5 text-center inline-flex items-center mr-2">
                                                    <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor"
                                                        viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                                    </svg>
                                                    <span class="sr-only">Icon description</span>
                                                    Visualizar Exame
                                                </button>
                                            </a>

                                        </div>

                                        {{-- <figcaption id="file-name" class="block mb-2 font-medium text-gray-900 py-2">
                                            {{ $exame->nome_arquivo }}
                                        </figcaption> --}}

                                    </div>

                                    <div id="file-info" class="file-info bg-white"></div>

                                    <p class="block font-semibold text-gray-900"> Ou</p>

                                    <div class="relative mb-2 w-1/2 m-auto">
                                        <input type="file" name="arquivo" id="arquivo" required>
                                        <figcaption id="file-name"></figcaption>
                                        <label
                                            class="block relative hover:bg-cyan-900 bg-cyan-700 text-white text-md py-2.5 m-auto pointer text-center rounded-md cursor-pointer"
                                            for="arquivo">
                                            <i class="fas fa-upload"></i> &nbsp; Escolha um novo arquivo
                                        </label>
                                    </div>
                                </div>
                            @endif
                        @endif

                        @if ($exame->nome_arquivo === null)
                            <div class="text-center">
                                <div id="preview-container" class="image-container w-4/5 m-auto">
                                    <img id="chosen-image" class="img-preview w-4/5 block relative">
                                    <figcaption id="file-name"></figcaption>
                                </div>

                                <div id="file-info" class="file-info"></div>

                                <input type="file" name="arquivo" id="arquivo" required>
                                <label
                                    class="block relative hover:bg-cyan-900 bg-cyan-700 text-white text-md w-1/2 py-2.5 m-auto pointer text-center rounded-md"
                                    for="arquivo">
                                    <i class="fas fa-upload"></i> &nbsp; Escolha um Arquivo
                                </label>
                            </div>
                        @endif


                    </div>

                    <div class="button flex flex-wrap justify-center items-center m-auto">
                        <a href="{{ route('meusExames') }}">
                            <button type="button"
                                class="text-red-700 hover:text-white border border-red-600 hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-red-50 font-medium rounded-lg px-7 py-2 text-center mr-4 mb-2">
                                Cancelar
                            </button>
                        </a>
                        <button type="submit" onclick="confirmEdit(event)"
                            class="text-emerald-800 hover:text-white border border-emerald-600 hover:bg-emerald-600 focus:ring-2 focus:outline-none focus:ring-emerald-50 font-medium rounded-lg px-7 py-2 text-center mb-2"
                            value="Salvar">Salvar</button>
                    </div>
                </form>
            </div>

        </section>
    </section>
</x-app-layout>
