<x-app-layout>
    <section class="login session-allow min-h-screen">
        <section class="profile my-5 flex w-full items-center justify-center">
            <div class="flex justify-center drop-shadow-md filter md:w-4/5">
                <x-sidebar />
                <div class="profile-forms">
                    @yield('conteudo')
                </div>
            </div>
        </section>
    </section>
</x-app-layout>
