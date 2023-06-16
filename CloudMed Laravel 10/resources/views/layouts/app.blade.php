<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">

    @include('templates.styles')
    <link rel="shortcut icon" href="assets/img/icon-logo.png" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="nav-users bg-[#c9e4e5]">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    
    <footer class="bg-[#c9e4e5]">
        <div class="mx-auto w-full max-w-screen-xl p-4 md:py-4">
            <hr class="my-6 border-cyan-700 sm:mx-auto lg:my-5" />
            <div class="flex justify-between items-center py-5">
                <div class="footer-img block w-[7%] text-gray-500 sm:text-right">
                    <a href="/">
                        <img src="{{ url('assets/img/logo.png') }}" alt="logo">
                    </a>
                </div>
                <span class="block text-sm text-gray-500 sm:text-center"> Copyright &copy; 2023, CloudMed. <br>All Rights
                    Reserved.</span>
                <div class="block text-sm text-gray-500 sm:text-right"> 
                    <span> Dúvidas ou sugestões? </span> <br>
                    <a href="#" class="text-cyan-800 font-medium">Entre em Contato</a>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>

<script src="{{ url('assets/js/modal/deleteModal.js') }}"></script>
<script src="{{ url('assets/js/modal/editModal.js') }}"></script>
<script src="{{ url('assets/js/modal/profileSaveModal.js') }}"></script>
<script src="{{ url('assets/js/modal/saveModal.js') }}"></script>

<script src="{{ url('assets/js/inputs/inputHiddenVaccine.js') }}"></script>
<script src="{{ url('assets/js/inputs/imgPreview.js') }}"></script>
<script src="{{ url('assets/js/inputs/dates.js') }}"></script>
<script src="{{ url('assets/js/inputs/regex.js') }}"></script>

<script src="{{ url('assets/js/dashboard.js') }}"></script>
<script src="{{ url('assets/js/btnToTop.js') }}"></script>


</html>
