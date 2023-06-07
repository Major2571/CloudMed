@section('title', 'Editar Exame')

<x-app-layout>
    <section class="login session-allow">
        <section class="form-cad-new-exam">

            <div class="form sm:w-9/12 xl:w-2/5">
                <form method="POST" action="{{ route('updateExam', $exam->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="cad-new-title pb-2 text-center">
                        <h1>Edite seu Exame cadastrado</h1>
                    </div>

                    <div class="py-4 px-10">

                        <div class="mb-6">
                            <x-input-label for="name" :value="__('Título:')" />
                            <x-text-input type="text" name="name" id="name" value="{{ $exam->titulo }}"
                                placeholder="Ex: Hemograma Completo" required />
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div>
                                <div class="mb-6">
                                    <label for="especialidade" class="mb-2 block font-medium text-gray-900">
                                        Especialidade:
                                    </label>
                                    <div class="relative w-full">
                                        <select name="especialidade"
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                                            <option value=""> Selecionar </option>
                                            @foreach ($especialidades as $especialidade)
                                                <option value="{{ $especialidade->id }}"
                                                    {{ $especialidade->id == $exam->id_especialidade ? 'selected' : '' }}>
                                                    {{ $especialidade->especialidade }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <x-input-label for="date" :value="__('Data de realização:')" />
                                <x-text-input type="date" name="date" id="date" value="{{ $exam->data }}"
                                    required />
                            </div>
                        </div>

                        <div class="mb-6">
                            <x-input-label for="local" :value="__('Instituição:')" />
                            <x-text-input type="text" name="local" id="local" value="{{ $exam->instituicao }}"
                                placeholder="Ex: Santa Casa" required />
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-4">
                            <div class="mb-6">
                                <x-input-label for="cidade" :value="__('Cidade:')" />
                                <x-text-input type="text" name="cidade" id="cidade" value="{{ $exam->cidade }}"
                                    required />
                            </div>

                            <div class="mb-6">
                                <div class="relative w-full">
                                    <label for="especialidade" class="mb-2 block font-medium text-gray-900"> UF </label>
                                    <select name="uf"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700">
                                        <option value=""> Selecionar </option>
                                        @foreach ($uf as $uf)
                                            <option value="{{ $uf->id }}"
                                                {{ $uf->id == $exam->id_uf ? 'selected' : '' }}>
                                                {{ $uf->uf }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        @if ($exam->nome_arquivo)
                            @php
                                $fileExtension = pathinfo($exam->nome_arquivo, PATHINFO_EXTENSION);
                                $imageExtensions = ['jpg', 'jpeg', 'png', 'svg'];
                                $isImage = in_array($fileExtension, $imageExtensions);
                            @endphp

                            @if ($isImage)
                                <div class="text-center">

                                    <p class="mb-2 block py-2 font-semibold text-gray-900"> Preview do Exame:</p>

                                    <div class="mb-5" id="preview-container">

                                        <img src="{{ asset('storage/exam_files/' . $exam->nome_arquivo) }}"
                                            alt="Preview do Exame" id="chosen-image"
                                            class="img-preview m-auto w-4/5 rounded-lg border border-gray-300 shadow-sm">

                                        <figcaption id="file-name" class="mb-2 block py-2 font-medium text-gray-900">
                                            {{ $exam->nome_arquivo }}
                                        </figcaption>

                                    </div>

                                    <div id="file-info" class="file-info bg-white"></div>

                                    <div class="relative m-auto mb-2 w-1/2">
                                        <input type="file" name="arquivo" id="arquivo" required>
                                        <figcaption id="file-name"></figcaption>
                                        <label
                                            class="text-md pointer relative m-auto block cursor-pointer rounded-md bg-cyan-700 py-2.5 text-center text-white hover:bg-cyan-900"
                                            for="arquivo">
                                            <i class="fas fa-upload"></i> &nbsp; Escolha um novo arquivo
                                        </label>
                                    </div>
                                </div>
                            @else
                                <div class="text-center">

                                    <p class="mb-2 block py-2 font-semibold text-gray-900"> Preview do Exame:</p>

                                    <div class="mb-5 m-auto w-4/5" id="preview-container">

                                        <embed src="{{ asset('storage/arquivos_exams/' . $exam->nome_arquivo) }}"
                                            alt="Preview do Exame" id="chosen-image"
                                            class="img-preview m-auto w-full h-96 rounded-lg border border-gray-300 shadow-sm">

                                        <figcaption id="file-name" class="mb-2 block py-2 font-medium text-gray-900">
                                            {{ $exam->nome_arquivo }}
                                        </figcaption>

                                    </div>

                                    <div id="file-info" class="file-info bg-white"></div>

                                    <div class="relative m-auto mb-2 w-1/2">
                                        <input type="file" name="arquivo" id="arquivo" required>
                                        <figcaption id="file-name"></figcaption>
                                        <label
                                            class="text-md pointer relative m-auto block cursor-pointer rounded-md bg-cyan-700 py-2.5 text-center text-white hover:bg-cyan-900"
                                            for="arquivo">
                                            <i class="fas fa-upload"></i> &nbsp; Escolha um novo arquivo
                                        </label>
                                    </div>
                                </div>
                            @endif
                        @endif

                        @if ($exam->nome_arquivo === null)
                            <div class="text-center">
                                <div id="preview-container" class="image-container m-auto w-4/5">
                                    <img id="chosen-image" class="img-preview">
                                    <figcaption id="file-name"></figcaption>
                                </div>

                                <div id="file-info" class="file-info"></div>

                                <input type="file" name="arquivo" id="arquivo" required>
                                <label
                                    class="text-md relative m-auto block w-1/2 cursor-pointer rounded-md bg-cyan-700 py-2.5 text-center text-white hover:bg-cyan-900"
                                    for="arquivo">
                                    <i class="fas fa-upload"></i> &nbsp; Escolha um Arquivo
                                </label>
                            </div>
                        @endif

                    </div>

                    <div class="button m-auto flex flex-wrap items-center justify-center">
                        <a href="{{ route('myExams') }}">
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
