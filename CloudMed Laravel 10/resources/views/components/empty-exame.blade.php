<section class="m-auto max-h-full min-h-screen w-full flex">

    <div class="mx-auto my-5 flex w-4/5 items-center justify-center flex-wrap">
        <div class="text-lg mr-5 w-1/3">
            <h1 class="leading-tight">Você ainda não tem nenhum exame salvo. </h1>
            <p class="py-5">
                Para adicionar um Exame clique no botão abaixo, e preencha as informações.
            </p>
            <a href="{{ route('novoCadExame') }}"
                class="inline-flex items-center rounded-full bg-teal-900 px-16 py-2 text-center text-base font-bold text-white hover:bg-teal-800 focus:outline-none focus:ring-2 focus:ring-gray-300">
                <div class="mr-3 text-lg">
                    <i class="fa-solid fa-circle-plus"></i>
                </div>
                Adicionar Exame
            </a>
        </div>
        <div class="w-2/5">
            <img src="{{ url('assets/img/svg/emptyExame.svg') }}" class="drop-shadow" alt="">
        </div>
    </div>

</section>
