<section class="m-auto max-h-full min-h-screen w-full flex">

    <div class=" mx-auto my-5 flex w-3/5 items-center justify-center">
        <div class="text-md mr-5 w-3/4">
            <h1>Você ainda não tem medicamentos salvos.</h1>
            <p> Para adicionar um medicamento clique no botão abaixo, e preencha as informações. </p>
            <a href="{{ route('novoCadMedicamentos') }}"
                class="inline-flex items-center rounded-md bg-cyan-700 px-3 py-2 text-center text-base font-medium text-white hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-gray-300">
                <div class="mr-2 text-base">
                    <i class="fa-solid fa-circle-plus"></i>
                </div>
                Adicionar Medicamento
            </a>
        </div>
        <div class="w-2/3">
            <img src="{{ url('assets/img/svg/addVacina.svg') }}" alt="">
        </div>
    </div>

</section>
