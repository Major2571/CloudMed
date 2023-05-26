@section('title', 'Meu SUS')

<x-app-layout>

    <section class="login session-allow h-[80vh]">
        
        <section class="profile my-5 w-full flex justify-center items-center ">
            <div class="filter drop-shadow-md md:w-4/5 flex justify-center">
                
                <x-sidebar />
                
                <div class="profile-forms">
                    <div class="title-profile mb-5">
                        <h2> Suas carteirinha do SUS </h2>
                    </div>
                        @if ($sus->isEmpty())
                            <form method="post" action="{{ route('sus.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="">
                                    <x-input-label for="numero" :value="__('Cartão do SUS:')" />
                                    <x-text-input type="text" name="numero" id="numero" :value="old('')" required />
                                </div>
                                <div class="">
                                    <h3> Cartão do SUS:</h3><br>
                                    <div class="text-center">
                                        <div id="preview-container" class="image-container m-auto w-4/5">
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
    
                                <button type="submit"
                                    class="mr-4 mb-2 rounded-lg border border-cyan-600 px-7 py-2 text-center font-medium text-cyan-700 hover:bg-cyan-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-50">
                                    Salvar Carteirinha
                                </button>
                            </form>
                        @else
                            @foreach ($sus as $infoSus)
                                <form method="post" action="{{ route('sus.update', $infoSus->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="">
                                        <x-input-label for="numero" :value="__('Cartão do SUS:')" />
                                        <x-text-input type="text" name="numero" id="numero" :value="old('numero', $infoSus->numero)"
                                            required />
                                    </div>
                                    <div class="">
                                        <h3> Cartão do SUS:</h3><br>
                                        <div class="text-center">
                                            <div id="preview-container" class="image-container m-auto w-4/5">
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
    
                                    <button type="submit"
                                        class="mb-2 rounded-lg border border-emerald-600 px-7 py-2 text-center font-medium text-emerald-800 hover:bg-emerald-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-50"
                                        value="Salvar">Salvar</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
    
                </div>
    
            </section>
    
        </section>

</x-app-layout>
