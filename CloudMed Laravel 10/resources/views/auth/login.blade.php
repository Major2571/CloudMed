@extends('templates.headLogin')

<title> Login </title>

@section('contentLogin')
<section class="login session-cads">

    <div class="main-login min-h-screen flex justify-center items-center flex-wrap w-4/5 p-8">

        <div class="form-login lg:w-1/4 md:w-1/2 lg:mr-5">

            <div class="title text-center">
                <h1>Login</h1>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="">
                    
                    <div class="mb-6">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="password" :value="__('Senha')" />
                        <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex justify-between flex-wrap">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300  text-cyan-800 shadow-sm focus:ring-cyan-600 " name="remember">
                            <span class="ml-2 text-sm text-gray-600 font-semibold">{{ __('Lembre de mim') }}</span>
                        </label>
                        <div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Esqueci a Senha') }}
                            </a>
                            @endif
                        </div>
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