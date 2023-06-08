@extends('templates.headLogin')

<title> Cadastro </title>

@section('contentLogin')
    <section class="cadastros session-cads">

        <div class="flex min-h-screen w-full items-center justify-center">

            <div class="form md:w-2/5 lg:w-1/4">
                <div class="title mb-6 text-center">
                    <h1>Cadastre-se</h1>
                    <p> Crie sua conta agora mesmo! </p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="continer-input-box">
                        <div class="cad-info">

                            <div class="mb-6">
                                <x-input-label for="name" :value="__('Primeiro Nome')" /> <span class="text-red-500">*</span>
                                <x-text-input id="name" type="text" name="name" :value="old('name')" required
                                    autofocus autocomplete="name" class="{{ $errors->has('name') ? 'border-red-500' : '' }}" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            </div>

                            <div class="mb-6">
                                <x-input-label for="email" :value="__('Email')" /> <span class="text-red-500">*</span>
                                <x-text-input id="email" type="email" name="email" :value="old('email')" required
                                    autocomplete="username" class="{{ $errors->has('email') ? 'border-red-500' : '' }}" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mb-6">
                                <x-input-label for="password" :value="__('Senha')" /><span class="text-red-500">*</span>
                                <x-text-input id="password" type="password" name="password" required
                                    autocomplete="new-password" class="{{ $errors->has('password') ? 'border-red-500' : '' }}"/>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="mb-6">
                                <x-input-label for="password_confirmation" :value="__('Confirme sua senha')" /> <span
                                    class="text-red-500">*</span>
                                <x-text-input id="password_confirmation" type="password" name="password_confirmation"
                                    required autocomplete="new-password" class="{{ $errors->has('password_confirmation') ? 'border-red-500' : '' }}"/>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                        </div>
                    </div>

                    <div class="login-links">
                        <a href="{{ route('login') }}">
                            {{ __('Já possui conta?') }}
                        </a>
                        <div class="button">
                            <input class="btnCadastrar" type="submit" value=" Cadastrar ">
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section>
@endsection
