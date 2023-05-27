<x-app-layout>

    <section class="login session-allow min-h-screen">

        <section class="profile my-5 w-full flex justify-center items-center ">
            <div class="filter drop-shadow-md md:w-4/5 flex justify-center">
                <x-sidebar />

                <div class="profile-forms  block">
                    <div class="">
                        @include('profile.partials.update-password-form')
                    </div>
                    <div class="">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </section>
    </section>
</x-app-layout>