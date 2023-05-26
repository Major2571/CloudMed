<section id="sidebar" class="bg-cyan-700 py-5">

    <div class="hidden sm:flex">
        <x-sidebar-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
            <div class="mr-3 text-xl">
                <i class="fa-solid fa-user"></i>
            </div>
            {{ __('Meu Perfil') }}
        </x-sidebar-nav-link>
    </div>

    <div class="hidden sm:flex">
        <x-sidebar-nav-link :href="route('userDetailsMedical')" :active="request()->routeIs('userDetailsMedical')">
            <div class="mr-3 text-xl">
                <i class="fa-solid fa-file-lines"></i>
            </div>
            {{ __('Minhas Infomações') }}
        </x-sidebar-nav-link>
    </div>

    <div class="hidden sm:flex">
        <x-sidebar-nav-link :href="route('meuSus')" :active="request()->routeIs('meuSus')">
            <div class="mr-3 text-xl">
                <i class="fa-regular fa-address-card"></i>
            </div>
            {{ __('Cartão SUS') }}
        </x-sidebar-nav-link>
    </div>

    <div class="hidden sm:flex">
        <x-sidebar-nav-link :href="route('meuConvenio')" :active="request()->routeIs('meuConvenio')">
            <div class="mr-3 text-xl">
                <i class="fa-solid fa-address-card"></i>
            </div>
            {{ __('Cartão Convênio') }}
        </x-sidebar-nav-link>
    </div>

    <div class="mt-9 hidden sm:flex">
        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <x-sidebar-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-red-400">
                <div class="mr-3 text-xl transition none">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </div>
                {{ __('Sair') }}
            </x-sidebar-nav-link>
        </form>
    </div>
</section>
