<section id="sidebar" class="bg-cyan-700">
    <ul class="side-menu top">
        <li class="active">
            <a href="{{ route('profile') }}">
                <div class="mx-5 text-xlg">
                    <i class="fa-solid fa-user"></i>
                </div>
                <span class="text">Meu Perfil</span>
            </a>
        </li>

        <li>
            <a href="{{ route('userDetailsMedical') }}">
                <div class="mx-5 text-xlg">
                    <i class="fa-regular fa-file-lines"></i>
                </div>
                <span class="text">Minhas Infomações</span>
            </a>
        </li>

        <li>
            <a href="">
                <div class="mx-5 text-xlg">
                    <i class="fa-regular fa-address-card"></i>
                </div>
                <span class="text">Cartão do SUS</span>
            </a>
        </li>

        <li>
            <a href="/tarefas">
                <div class="mx-5 text-xlg">
                    <i class="fa-solid fa-address-card"></i>
                </div>
                <span class="text">Cartão do Convênio</span>
            </a>
        </li>
    </ul>

    <ul class="side-menu">
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" class="logout"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <div class="mx-5 text-xlg">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </div>
                    <span class="text">Sair</span>
                </a>
            </form>
        </li>
    </ul>
</section>