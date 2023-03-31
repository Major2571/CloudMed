@extends('templates.headSessionAllow')

<title> Minhas Vacinas </title>

@section('contentPaciente')

<section class="session-allow">

    <section class="pag-exames-vacinas">
        <div class="title-filters">
            <div class="title">
                <h1> Minhas Vacinas </h1>
                <p> Aqui você encontra suas Vacinas Salvas no no nosso sistema.</p>
            </div>
            <div class="filter">
                <h3>Filtrar por:</h3>
                <div class="select-data">
                    <div class="input-box cad-exame">
                        <label for="date"> Data de Aplicação </label>
                        <input type="date" name="date" id="date" placeholder=" 00 / 00 / 0000 " required>
                    </div>
                </div>
            </div>
        </div>

        <div class="table">
            <table>

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Tipo de Dose</th>
                        <th>Data de Aplicação</th>
                        <th>Fabricante</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                    </tr>
                    <tr>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                    </tr>
                    <tr>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                    </tr>
                    <tr>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                    </tr>
                </tbody>

            </table>
        </div>

        <div class="cad-new">
            <p> Gostaria de fazer um novo cadastro de Vacina?
            </p>
            <div>
                <h3> Clique Aqui: </h3>
                <a href="/novo-cad-exame">
                    <img src="{{url('assets/img/iconMenu/novo.png')}}" alt="">
                    Nova Vacina
                </a>
            </div>
        </div>
    </section>

</section>

<div class="toTop">
    <button onclick="backToTop()" id="toTopButton" type="button">
        <img src="{{url('https://blog.social.mg.gov.br/wp-content/plugins/photo-gallery/css/bwg-fonts/fonts/bwg-fonts-svg/angle-up-sm.svg')}}" alt="arrowUp">
    </button>
</div>
@endsection