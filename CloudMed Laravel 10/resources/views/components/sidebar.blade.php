<section id="sidebar" class="bg-cyan-700">
    <ul class="side-menu top">

        <div class="hidden sm:flex my-5">
            <x-sidebar-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
                <div class="mx-2 text-xlg">
                    <i class="fa-solid fa-user"></i>
                </div>
                {{ __('Meu Perfil') }}
            </x-sidebar-nav-link>
        </div>

        <div class="hidden sm:flex">
            <x-sidebar-nav-link :href="route('userDetailsMedical')" :active="request()->routeIs('userDetailsMedical')">
                <div class="mx-2 text-xlg">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                {{ __('Minhas Infomações') }}
            </x-sidebar-nav-link>
        </div>

        <div class="hidden sm:flex">
            <x-sidebar-nav-link>
                <div class="mx-2 text-xlg">
                    <i class="fa-regular fa-address-card"></i>
                </div>
                {{ __('Cartão SUS') }}
            </x-sidebar-nav-link>
        </div>

        <div class="hidden sm:flex">
            <x-sidebar-nav-link>
                <div class="mx-2 text-xlg">
                    <i class="fa-solid fa-address-card"></i>
                </div>
                {{ __('Cartão Convênio') }}
            </x-sidebar-nav-link>
        </div>

        <div class="hidden sm:flex mt-9 text-red-500">
            <x-sidebar-nav-link :href="route('logout')">
                <div class="mx-2 text-xlg">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </div>
                {{ __('Sair') }}
            </x-sidebar-nav-link>
        </div>
</section>