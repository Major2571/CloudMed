<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <link rel="shortcut icon" href="assets/img/icon-logo.png" type="image/x-icon">

    @include('templates.styles')

<body>


    <header class="menu-main menu-main-index">
        <nav class="nav-main">
            <div class="menuHamburger">
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>

            <div class="nav-menu menu-main">

                <a href="/">
                    <img src="{{ url('assets/img/logo.png') }}" alt="logo">
                </a>

                <ul class="menu manu-main">
                    <li>
                        <a href="/servicos" target="_blank">
                            Serviços
                        </a>
                    </li>
                    <li>
                        <a href="/sobre" target="_blank">
                            Sobre
                        </a>
                    </li>
                </ul>

                <a href="/login">
                    <button class="btnLogin"> Login </button>
                </a>

            </div>
        </nav>
    </header>


    @yield('contentMain')


    <footer class="index">

        <img src="{{ url('assets/img/logo.png') }}" alt="logo">

        <ul>
            <li>
                <h4>Links Rápidos</h4>
            </li>
            <li>
                <a href="/servicos" target="_blank">
                    Serviços
                </a>
            </li>
            <li>
                <a href="/sobre" target="_blank">
                    Sobre
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    Politica de Privacidade
                </a>
            </li>
        </ul>
    </footer>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://unpkg.com/scrollreveal"></script>

<script src="assets/js/btnBack.js"></script>
<script src="assets/js/btnToTop.js"></script>
<script src="assets/js/carousel.js"></script>
<script src="assets/js/scrollReveal.js"></script>
<script src="assets/js/menuHamburgerIndex.js"></script>

</html>
