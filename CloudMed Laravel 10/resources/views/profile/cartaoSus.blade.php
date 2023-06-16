@section('title', 'Meu SUS')

@extends('layouts.profile')

@section('conteudo')

    <div class="title-profile absolute top-0 mb-7 w-3/5 py-8 px-16">
        <h2> Cartão Nacional de Saúde - CNS </h2>
        <span class="text-base font-normal italic text-gray-500"> O Cartão Nacional de Saúde - CNS, é o documento de
            identificação do usuário do SUS. </span>
        <p class="text-base">
            Facilite o acesso aos serviços de saúde com o cadastro do seu CNS. Nesta seção, você pode cadastrar e
            atualizar as informações do seu Cartão do SUS de forma rápida e segura. Insira o número do cartão e faça o seu
            upload para ter sempre à mão quando necessário.
        </p>
    </div>
    <div class="w-full pt-28">
        @if ($sus->isEmpty())
            <form method="post" action="{{ route('sus.store') }}" enctype="multipart/form-data" class="mt-10"
                id="cadastroForm">
                @csrf
                <div class="mb-4">
                    <x-input-label for="number_cardSUS" :value="__('Número CNS:')" />
                    <x-text-input type="text" name="number_cardSUS" id="number_cardSUS" :value="old('')" required
                        maxlength="16" onkeyup="this.value = formatSusCardNumber(this.value)" />
                </div>
                <div>
                    <h3> Foto do CNS:</h3><br>
                    <div class="text-center">
                        <div id="preview-container" class="image-container m-auto w-3/5">
                            <img id="chosen-image" class="img-preview">
                        </div>

                        <figcaption id="file-name"></figcaption>

                        <div id="file-info" class="file-info"></div>

                        <input type="file" name="arquivo" id="arquivo" accept="image/*">
                        <label
                            class="text-md pointer relative m-auto block w-1/2 cursor-pointer rounded-md bg-cyan-700 py-2.5 text-center text-white hover:bg-cyan-900"
                            for="arquivo">
                            <i class="fas fa-upload"></i> &nbsp; Escolha um Arquivo
                        </label>

                    </div>
                </div>

                <div class="btn-profile">
                    <button type="submit"
                        class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50">
                        Salvar
                    </button>
                </div>
            </form>
        @else
            @foreach ($sus as $infoSus)
                <form method="post" action="{{ route('sus.update', $infoSus->id) }}" enctype="multipart/form-data"
                    class="mt-16">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <x-input-label for="number_cardSUS" :value="__('Número CNS:')" />
                        <x-text-input type="text" name="number_cardSUS" id="number_cardSUS"
                            value="{{ preg_replace('/(\d{10})(\d{4})/', '$1 $4', $infoSus->number_cardSUS) }}"
                            maxlength="15" onkeyup="this.value = formatSusCardNumber(this.value)" required />
                    </div>
                    <div>
                        <h3> Foto do CNS:</h3><br>
                        @if ($infoSus->file_cardSUS_name)
                            <div id="preview-container">
                                <div class="card-vacina relative">
                                    <img src="{{ asset('storage/health_card/card_sus_file/' . $infoSus->file_cardSUS_name) }}"
                                        alt="Preview da Carteirinha" id="chosen-image"
                                        class="img-preview m-auto w-3/5 rounded-lg border border-gray-300 shadow-sm">

                                    <div
                                        class="absolute inset-0 m-auto flex w-3/5 flex-wrap items-center justify-center rounded-md opacity-0 transition-opacity duration-300">
                                        <a href="{{ asset('storage/health_card/card_sus_file/' . $infoSus->file_cardSUS_name) }}"
                                            target="blank">
                                            <button type="button"
                                                class="mr-2 inline-flex items-center rounded-lg border border-gray-600 bg-gray-600 p-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200">
                                                <div class="mr-2">
                                                    <i class="fa-solid fa-eye"></i>
                                                </div>
                                                Visualizar
                                            </button>
                                        </a>
                                    </div>
                                </div>

                                <figcaption id="file-name" class="mb-2 block py-2 font-medium text-gray-900">
                                    {{ $infoSus->file_cardSUS_name }}
                                </figcaption>

                            </div>

                            <div class="text-center">
                                <div id="preview-container" class="image-container m-auto w-3/5">
                                    <img id="chosen-image" class="img-preview">
                                </div>

                                <figcaption id="file-name"></figcaption>

                                <div id="file-info" class="file-info"></div>

                                <input type="file" name="arquivo" id="arquivo" accept="image/*">
                                <label
                                    class="text-md pointer relative m-auto block w-1/2 cursor-pointer rounded-md bg-cyan-700 py-2.5 text-center text-white hover:bg-cyan-900"
                                    for="arquivo">
                                    <i class="fas fa-upload"></i> &nbsp; Escolha um Arquivo
                                </label>

                            </div>
                        @else
                            <div class="text-center">
                                <div id="preview-container" class="image-container m-auto w-3/5">
                                    <img id="chosen-image" class="img-preview">
                                </div>

                                <figcaption id="file-name"></figcaption>

                                <div id="file-info" class="file-info"></div>

                                <input type="file" name="arquivo" id="arquivo" accept="image/*">
                                <label
                                    class="text-md pointer relative m-auto block w-1/2 cursor-pointer rounded-md bg-cyan-700 py-2.5 text-center text-white hover:bg-cyan-900"
                                    for="arquivo">
                                    <i class="fas fa-upload"></i> &nbsp; Escolha um Arquivo
                                </label>

                            </div>
                        @endif

                    </div>

                    <div class="btn-profile">
                        <button type="submit" onclick="confirmEdit(event)"
                            class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
                            value="Salvar">Salvar</button>
                    </div>
                </form>
            @endforeach
        @endif
    </div>

@endsection
