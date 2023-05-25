@section('title', 'info')

<x-app-layout>
    <section class="login session-allow">
        
        <section class="profile my-5 w-full">
            <div class="form md:w-4/5 lg:w-1/2">

                <form action="" enctype="multipart/form-data">
                    <div class="title-profile mb-5">
                        <h2> Informações Clínicas </h2>
                    </div>
                    <div class="w-full flex justify-evenly content-center items-center">
                        
                        <div class="m-5 w-1/2 bg-slate-200">
                            <div class="">
                                <x-input-label for="num-convenio" :value="__('Cartão do Convênio:')" />
                                <x-text-input type="text" name="numConvenio" id="numConvenio" :value="old('')"
                                    required />
                            </div>
                            <div class="">
                                <x-input-label for="nome-convenio" :value="__('Nome do Convênio:')" />
                                <x-text-input type="text" name="nomeConvenio" id="nomeConvenio" required />
                            </div>
                            <div class=" mt-5">
                                <h3> Cartão do Convênio:</h3><br>
                                <div class="flex w-full items-center justify-center">
                                    <label for="conv-image"
                                        class="flex h-64 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                </path>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                                (MAX.
                                                800x400px)</p>
                                        </div>
                                        <input type="file" id="conv-image" accept="image/*" required
                                            class="hidden" />
                                    </label>
                                </div>
                            </div>
                        </div>

                        
                        <div class="m-5 w-1/2 bg-slate-200">
                            <div class="">
                                <x-input-label for="num-sus" :value="__('Cartão do Sus:')" />
                                <x-text-input type="text" name="sus" id="sus" required
                                    placeholder="00000000000 0000 0" />
                            </div>
                            <div class="col-span-2 mt-5">
                                <div class="mt-5">
                                    <h3> Cartão do SUS:</h3><br>
                                    <div class="flex w-full items-center justify-center">
                                        <label for="sus-image"
                                            class="flex h-64 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                    </path>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                        class="font-semibold">Click to upload</span> or drag and drop
                                                </p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                                    (MAX. 800x400px)</p>
                                            </div>
                                            <input type="file" id="sus-image" accept="image/*" required
                                                class="hidden" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="button m-auto flex flex-wrap items-center justify-center">
                        <a href="{{ route('sus.store') }}">
                            <button type="button"
                                class="mr-4 mb-2 rounded-lg border border-cyan-600 px-7 py-2 text-center font-medium text-cyan-700 hover:bg-cyan-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-50">
                                Editar Carteirinha
                            </button>
                        </a>
                    </div>

                </form>

            </div>

        </section> 
       

        <section class="profile my-5 w-full">
            <div class="form md:w-4/5 lg:w-1/2">
                @if ($infoClinica->isEmpty())
                    @include('profile.partials.cadastrar-info-clinica')
                @else
                    @include('profile.partials.update-info-clinica')
                @endif
            </div>
        </section>

    </section>

</x-app-layout>
