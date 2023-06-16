@section('title', 'Meu Convenio')

@extends('layouts.profile')

@section('conteudo')

    <div class="title-profile absolute top-0 mb-5 w-3/5 py-8 px-16">
        <h2> Carteirinha do Convênio </h2>
        <p class="text-base">
            Tenha seus dados do convênio sempre à disposição. Aqui você pode cadastrar e atualizar as informações da sua
            carteirinha do convênio médico. Insira o número da carteirinha, o nome do convênio, o tipo de plano e faça o
            upload da sua carteirinha para facilitar o acesso aos benefícios e serviços oferecidos pelo seu convênio.
        </p>
    </div>

    <div class="w-full pt-24">
        @if ($healthInsurance->isEmpty())
            <form method="post" action="{{ route('convenio.store') }}" enctype="multipart/form-data" class="mt-10"
                id="cadastroForm">
                @csrf

                <div class="grid md:grid-cols-2 md:gap-4">
                    <div>
                        <x-input-label for="insurance_name" :value="__('Nome do convênio:')" />
                        <x-text-input type="text" name="insurance_name" id="insurance_name" required />
                    </div>
                    <div>
                        <x-input-label for="insurance_plan" :value="__('Plano:')" />
                        <x-text-input type="text" name="insurance_plan" id="insurance_plan" required />
                    </div>
                </div>

                <div class="mb-4">
                    <x-input-label for="num-healthInsurance" :value="__('Número da carteirinha convênio:')" />
                    <x-text-input type="text" name="insurance_number" id="insurance_number" :value="old('')" required />
                </div>

                <div class="mt-4">
                    <h3> Carteirinha do Convênio:</h3><br>
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
            @foreach ($healthInsurance as $infoConvenio)
                <form method="post" action="{{ route('convenio.update', $infoConvenio->id) }}"
                    enctype="multipart/form-data" class="mt-10">
                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-2 md:gap-4">
                        <div>
                            <x-input-label for="insurance_name" :value="__('Nome do Convenio:')" />
                            <x-text-input type="text" name="insurance_name" id="insurance_name" :value="old('insurance_name', $infoConvenio->insurance_name)" />
                        </div>
                        <div>
                            <x-input-label for="insurance_plan" :value="__('Plano:')" />
                            <x-text-input type="text" name="insurance_plan" id="insurance_plan" :value="old('insurance_plan', $infoConvenio->insurance_plan)" />
                        </div>

                    </div>
                    <div class="mb-4">
                        <x-input-label for="num-healthInsurance" :value="__('Número da carteinha do convênio:')" />
                        <x-text-input type="text" name="insurance_number" id="insurance_number" :value="old('insurance_number', $infoConvenio->insurance_number)" />
                    </div>

                    <div class="mt-5">
                        <div>
                            <p class="mb-2 block py-2 font-semibold text-gray-900"> Carteirinha do convênio:</p>

                            @if ($infoConvenio->file_insurance_name)
                                <div class="mb-5" id="preview-container">

                                    <div class="card-vacina relative">
                                        <img src="{{ asset('storage/health_card/insurance_file/' . $infoConvenio->file_insurance_name) }}"
                                            alt="Preview da Carteirinha" id="chosen-image"
                                            class="img-preview m-auto w-3/5 rounded-lg border border-gray-300 shadow-sm">

                                        <div
                                            class="absolute inset-0 m-auto flex w-3/5 flex-wrap items-center justify-center rounded-md opacity-0 transition-opacity duration-300">
                                            <a href="{{ asset('storage/health_card/insurance_file/' . $infoConvenio->file_insurance_name) }}"
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
                                        {{ $infoConvenio->file_insurance_name }}
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
