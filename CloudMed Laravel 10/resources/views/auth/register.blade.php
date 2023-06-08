@extends('templates.headLogin')

<title> Cadastro </title>

@section('contentLogin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    
    <section class="cadastros session-cads">

        <div class="min-h-screen w-full flex justify-center items-center">

            <div class="lg:w-1/4 md:w-2/5 form">
                <div class="title text-center mb-6">
                    <h1>Cadastre-se</h1>
                    <p> Crie sua conta agora mesmo! </p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="continer-input-box">
                        <div class="cad-info">

                            <div class="mb-6">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" type="text" name="name" :value="old('name')" required
                                    autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="mb-6">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" type="email" name="email" :value="old('email')" required
                                    autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mb-6">
                                <x-input-label for="password" :value="__('Senha')" />
                                <x-text-input id="password" type="password" name="password" required
                                    autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="mb-6">
                                <x-input-label for="password_confirmation" :value="__('Confirme sua senha')" />
                                <x-text-input id="password_confirmation" type="password" name="password_confirmation"
                                    required autocomplete="new-password" />
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
