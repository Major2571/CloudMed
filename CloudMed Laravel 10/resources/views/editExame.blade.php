@extends('templates.headSessionAllow')

<title> Editar Exame </title>

@section('contentPaciente')
    <section class="login session-allow">

        <section class="form-cad-new-exam">

            <div class="form">
                <form 
                    method="post" 
                    action="/meus-exames/update/{{ $exame->id }}" 
                    enctype="multipart/form-data"
                    >
                    @csrf
                    @method('PUT')

                    <div class="text-center pb-2 cad-new-title">
                        <h1>Cadastre um novo Exame</h1>
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
                                    <label for="especialidade" class="block mb-2 font-medium text-gray-900"> Especialidade:
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
                                <label for="date" class="block mb-2 font-medium text-gray-900"> Data que foi realizada:
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
                                $imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];
                                $isImage = in_array($fileExtension, $imageExtensions);
                            @endphp

                            @if ($isImage)
                                <img src="{{ asset('storage/arquivos_exames/' . $exame->nome_arquivo) }}"
                                    alt="Preview do Exame">
                            @else
                                <a href="{{ asset('storage/arquivos_exames/' . $exame->nome_arquivo) }}"
                                    target="_blank">Visualizar Exame</a>
                            @endif
                        @endif

                        <div class="mb-6">
                            <label for="arquivo" class="block mb-2 font-medium text-gray-900"> Novo Arquivo do Exame: </label>
                            <input type="file" name="arquivo" id="arquivo"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-cyan-700 focus:border-cyan-700 block w-full p-2.5"
                                required>
                        </div>

                    </div>

                    <div class="button">
                        <button type="submit" onclick="confirmEdit(event)"
                            class="text-cyan-700 hover:text-white border border-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:outline-none focus:ring-cyan-50 font-medium rounded-lg px-7 py-2 text-center mr-2 mb-2"
                            value="Salvar">Salvar</button>
                    </div>
                </form>
            </div>

        </section>
    @endsection
