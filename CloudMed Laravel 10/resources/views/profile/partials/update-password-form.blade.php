@section('title', 'Alterar Senha')
<x-app-layout>
    <section class="login session-allow min-h-screen">

        <section class="profile my-5 w-full flex justify-center items-center ">
            <div class="filter drop-shadow-md md:w-4/5 flex justify-center">
                <x-sidebar />

                <div class="profile-forms">

                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')

                        <div class="title-profile mb-5">
                            <h2> Alterar senha atual </h2>
                        </div>

                        <div>
                            <x-input-label for="current_password" :value="__('Senha atual:')" />
                            <x-text-input id="current_password" name="current_password" type="password"
                                class="mt-1 block w-full" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="password" :value="__('Nova senha')" />
                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                                autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirme sua senha:')" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="btn-profile">
                            <x-primary-button>{{ __('Salvar') }}</x-primary-button>

                            @if (session('status') === 'password-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('Senha alterada com sucesso!') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
</x-app-layout>