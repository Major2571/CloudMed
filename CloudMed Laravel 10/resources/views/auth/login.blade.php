@extends('templates.headLogin')

<title> Login </title>

@section('contentLogin')
    <section class="login session-cads">

        <div class="main-login flex min-h-screen w-4/5 flex-wrap items-center justify-center p-8">

            <div class="form-login md:w-1/2 lg:mr-5 lg:w-1/4">

                <div class="title text-center">
                    <h1>Login</h1>
                </div>

                <form method="POST" action="{{ route('login') }}" id="login-form">
                    @csrf
                    <div class="">

                        <div class="mb-6">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" class="{{ $errors->has('email') ? 'border-red-500' : '' }}" />
                            <x-input-error :messages="$errors->get('email')" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="password" :value="__('Senha')" />
                            <x-text-input id="password" type="password" name="password" required
                                autocomplete="current-password"
                                class="{{ $errors->has('password') ? 'border-red-500' : '' }}" />
                            <x-input-error :messages="$errors->get('password')" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex flex-wrap justify-between">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-cyan-800 shadow-sm focus:ring-cyan-600"
                                    name="remember">
                                <span class="ml-2 text-sm font-semibold text-gray-600">{{ __('Lembre de mim') }}</span>
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

                <div class="login-links">
                    <p>Não possui uma conta?</p>
                    <a href="/register">Cadastre-se</a>
                </div>

            </div>
            <div class="img-login">
                <img src="{{ url('assets/img/svg/imgLogin.svg') }}" alt="Animação login">
            </div>

        </div>
    </section>
@endsection
