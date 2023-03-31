@extends('templates.headSessionAllow')

<title> Novo </title>

@section('contentPaciente')

<section class="login session-allow">
    <div class="main">
        <div class="card-cadastro">
            <h1>Tipo de Cadastro</h1>
            <div class="card-cad-choice">
                <div class="cad-choice">
                    <a href="/novo-cad-exame">
                        <div class="info-cad">
                            <div class="tipo-cad-img">
                                <img src="{{url('assets/img/icon/exame.png')}}" alt="">
                            </div>
                            <h2>Exame</h2>
                        </div>
                    </a>
                </div>

                <div class="cad-choice">
                    <a href="/novo-cad-vacina">
                        <div class="info-cad">
                            <div class="tipo-cad-img">
                                <img src="{{url('assets/img/icon/vacinas.png')}}" alt="">
                            </div>
                            <h2>Vacina</h2>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection