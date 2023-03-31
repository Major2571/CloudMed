@extends('templates.headSessionAllow')

<title> Meus Exames </title>

@section('contentPaciente')

<section class="session-allow">

    <section class="pag-exames-vacinas">
        <div class="title-filters">
            <div class="title">
                <h1> Meus Exames </h1>
                <p> Aqui você encontra seus Exames Salvos no no nosso sistema.</p>
            </div>
            <div class="filter">
                <h3>Filtrar por:</h3>
                <div class="select-data">
                    <div class="input-box select">
                        <label for="especialidade"> Especialidade</label>
                        <div class="input-box-sel cad-exame-vacina">
                            <select>
                                <option value="">Selecionar</option>
                                <option value="Cardiologia">Cardiologia</option>
                                <option value="Cirurgia Plástica">Cirurgia Plástica</option>
                                <option value="Clinico Geral">Clinico Geral</option>
                                <option value="Dermatologia">Dermatologia</option>
                                <option value="Endocrinologia">Endocrinologia</option>
                                <option value="Ginecologia e Obstetrícia">Ginecologia e Obstetrícia</option>
                                <option value="Hematologia">Hematologia</option>
                                <option value="Neurologia">Neurologia/option>
                                <option value="Oftalmologia">Oftalmologia</option>
                                <option value="Ortopedia">Ortopedia</option>
                                <option value="Oncologia">Oncologia</option>
                                <option value="Pediatria">Pediatria</option>
                                <option value="Urologia">Urologia</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-box cad-exame">
                        <label for="date"> Data que foi realizada </label>
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
                        <th>Especialidade</th>
                        <th>Data</th>
                        <th>Instituição</th>
                        <th>Visualizar</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                </tbody>

            </table>
        </div>

        <div class="cad-new">
            <p> Gostaria de fazer um novo cadastro de Exame?
            </p>
            <div>
                <h3> Clique Aqui: </h3>
                <a href="/novo-cad-exame">
                    <img src="{{url('assets/img/iconMenu/novo.png')}}" alt="">
                    Novo Exame
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