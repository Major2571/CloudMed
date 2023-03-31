<header class="perfil-paciente-menu">
    <nav>
        <div class="menuHamburger">
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>

        <div class="nav-menu menu-main">
            <ul>
                <li><a href="/novo">
                        <img src="{{url('assets/img/iconMenu/novo.png')}}" alt="">
                        Novo
                    </a>
                </li>
                <li>
                    <a href="/meus-exames">
                        <img src="{{url('assets/img/iconMenu/exame.png')}}" alt="">
                        Exames
                    </a>
                </li>
                <li>
                    <a href="/minhas-vacinas">
                        <img src="{{url('assets/img/iconMenu/vacina.png')}}" alt="">
                        Vacinas
                    </a>
                </li>

                <li>
                    <a href="/perfil"> <img src="{{url('assets/img/iconMenu/perfil.png')}}" alt="">
                        Perfil
                    </a>
                </li>
            </ul>

        </div>
    </nav>
</header>

@yield('contentPaciente')