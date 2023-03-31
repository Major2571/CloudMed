<header class="menu-main">
    <nav>
        <div class="menuHamburger">
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>

        <div class="nav-menu menu-main">

            <a href="/">
                <img src="{{url('assets/img/logo.png')}}" alt="logo">
            </a>

            <ul class="menu manu-main">
                <li><a href="/funcionalidades" target="_blank"> Funcionalidades </a></li>
                <li><a href="/sobre" target="_blank"> Sobre </a></li>
            </ul>

            <a href="/login">
                <button class="btnLogin"> Login </button>
            </a>
        </div>
    </nav>
</header>

@yield('contentMain')