@extends('templates.headLogin')

<title> Login </title>

@section('contentLogin')
    <section class="login session-cads">
        <div class="main-login">
            <div class="form-login">

                <div class="title">
                    <h1>Login</h1>
                </div>

                <form method="post" action="">
                    <div class="form-box">
                        <div class="input-box">
                            <label for="usuario">CPF/CRN</label>
                            <input type="text" name="usuario" placeholder="Digite sem pontos">
                        </div>
    
                        <div class="input-box">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" placeholder="Senha">
                        </div>
                    </div>
                </form>

                <div class="button">
                    <input class="btnLogin" type="submit" value=" Entrar ">
                </div>

                <div class="login-links">
                    <a href="#">Esqueci a senha</a>
                    <p>Não possui uma conta?</p>
                    <a href="/cadastro">Cadastre-se</a>
                </div>

            </div>
            <div class="img-login">
                <img src="{{url('assets/img/svg/imgLogin.svg')}}" alt="Animação login">
            </div>

        </div>
    </section>


    @endsection