<section class="">
    <div class="title-profile mb-5">
        
        <h2>
            Exclua sua conta
        </h2>

        <span class="text-sm ">
            Se você deseja excluir sua conta, é importante entender as consequências dessa ação. Todos os seus dados, histórico de atividades e informações pessoais serão permanentemente excluídos do sistema. Se você ainda deseja prosseguir com a exclusão de conta, siga as instruções abaixo para iniciar o processo. Lembre-se de que a exclusão de conta é uma ação permanente e irreversível, portanto, certifique-se de ter certeza antes de tomar essa decisão.
        </span>
    </div>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Excluir Conta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Tem certeza de que deseja excluir sua conta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Você está prestes a excluir permanentemente sua conta. Todos os seus dados e recursos serão apagados e não poderão ser recuperados. Antes de prosseguir, por favor confirme que deseja realizar essa ação digitando sua senha abaixo.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Senha') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Excluir Conta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
