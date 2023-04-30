@extends('templates.headLogin')

<title> Login </title>

@section('contentLogin')
<section class="login session-cads">
    <div class="main-login">
        <div class="form-login">

            <div class="title">
                <h1>Login</h1>
            </div>

            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="form-box">
                    <div class="input-box">
                        <!-- <label for="usuario">CPF/CRN</label>
                        <input type="text" name="usuario" placeholder="Digite sem pontos"> -->
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="input-box">
                        <!-- <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha"> -->
                        <x-input-label for="password" :value="__('Senha')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
                </div>
                
                            <div class="button">
                                <input class="btnLogin" type="submit" value=" Entrar ">
                            </div>
            </form>

            <!-- <div class="flex items-center justify-end mt-4">
               
    
                <x-primary-button class="ml-6 bg-blue-500/100 ">
                    {{ __('Log in') }}
                </x-primary-button>
            </div> -->

            <div class="login-links">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua Senha?') }}
                </a>
                @endif
                <p>Não possui uma conta?</p>
                <a href="/register">Cadastre-se</a>
            </div>

        </div>
        <div class="img-login">
            <img src="{{url('assets/img/svg/imgLogin.svg')}}" alt="Animação login">
        </div>

    </div>
</section>


@endsection