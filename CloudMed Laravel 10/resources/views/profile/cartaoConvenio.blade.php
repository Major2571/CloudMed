@section('title', 'Meu Convenio')

@extends('layouts.profile')

@section('conteudo')

    <div class="title-profile mb-5 absolute top-0 w-3/5 py-8 px-16">
        <h2> Carteirinha do Convênio </h2>
        <p class="text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima vel nesciunt eum fugit
            exercitationem dolorem sunt aut libero maiores, soluta, dicta saepe! Quae maiores ab, eligendi vitae quo
            libero cumque!</p>
    </div>

    <div class="pt-24 w-full">
        @if ($healthInsurance->isEmpty())
            <form method="post" action="{{ route('convenio.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <x-input-label for="num-healthInsurance" :value="__('Numero da carteirinha convênio:')" />
                    <x-text-input type="text" name="insurance_number" id="insurance_number" :value="old('')" required />
                </div>

                <div class="grid md:grid-cols-2 md:gap-4">
                    <div class="">
                        <x-input-label for="insurance_name" :value="__('Nome do convênio:')" />
                        <x-text-input type="text" name="insurance_name" id="insurance_name" required />
                    </div>
                    <div class="">
                        <x-input-label for="insurance_plan" :value="__('Plano:')" />
                        <x-text-input type="text" name="insurance_plan" id="insurance_plan" required />
                    </div>
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
                        class="mr-4 mb-2 rounded-lg border border-cyan-600 px-7 py-2 text-center font-medium text-cyan-700 hover:bg-cyan-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-50">
                        Salvar Carteirinha
                    </button>
                </div>
            </form>
        @else
            @foreach ($healthInsurance as $infoConvenio)
                <form method="post" action="{{ route('convenio.update', $infoConvenio->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <x-input-label for="num-healthInsurance" :value="__('Número da carteinha do convênio:')" />
                        <x-text-input type="text" name="insurance_number" id="insurance_number" :value="old('insurance_number', $infoConvenio->insurance_number)" />
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-4">
                        <div class="">
                            <x-input-label for="insurance_name" :value="__('Nome do Convenio:')" />
                            <x-text-input type="text" name="insurance_name" id="insurance_name" :value="old('insurance_name', $infoConvenio->insurance_name)" />
                        </div>
                        <div class="">
                            <x-input-label for="insurance_plan" :value="__('Plano:')" />
                            <x-text-input type="text" name="insurance_plan" id="insurance_plan" :value="old('insurance_plan', $infoConvenio->insurance_plan)" />
                        </div>

                    </div>

                    <div class="mt-5">
                        <div class="">
                            <p class="mb-2 block py-2 font-semibold text-gray-900"> Carteirinha do convênio:</p>

                            @if ($infoConvenio->file_insurance_name)
                                <div class="mb-5" id="preview-container">

                                    <img src="{{ asset('storage/health_card/insurance_file/' . $infoConvenio->file_insurance_name) }}"
                                        alt="Preview da Carteirinha" id="chosen-image"
                                        class="img-preview m-auto w-3/5 rounded-lg border border-gray-300 shadow-sm">

                                    <figcaption id="file-name" class="mb-2 block py-2 font-medium text-gray-900">
                                        {{ $infoConvenio->file_insurance_name }}
                                    </figcaption>

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

                            <div id="file-info" class="file-info bg-white"></div>

                            <div class="relative m-auto mb-2 w-1/2">
                                <input type="file" name="arquivo" id="arquivo">
                                <figcaption id="file-name"></figcaption>
                                <label
                                    class="text-md pointer relative m-auto block cursor-pointer rounded-md bg-cyan-700 py-2.5 text-center text-white hover:bg-cyan-900"
                                    for="arquivo">
                                    <i class="fas fa-upload"></i> &nbsp; Escolha um novo arquivo
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="btn-profile">
                        <button type="submit"
                            class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
                            value="Salvar">Salvar</button>
                    </div>
                </form>
            @endforeach
        @endif
    </div>
@endsection
