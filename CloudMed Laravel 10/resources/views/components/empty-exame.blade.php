<section>

    <div class="mx-auto my-5 flex w-3/5 items-center justify-center">
        <div class="text-md mr-5 w-4/5">
            <h1>Você ainda não possui Exames salvos...</h1>
            <a href="{{ route('novoCadExame') }}"
                class="inline-flex items-center rounded-md bg-cyan-700 px-3 py-2 text-center text-base font-medium text-white hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-gray-300">
                Não perca tempo!
                <div class="ml-2 text-base">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </a>
        </div>
        <div class="w-2/3">
            <img src="{{ url('assets/img/svg/saveNewItem.svg') }}" alt="">
        </div>
    </div>

</section>
