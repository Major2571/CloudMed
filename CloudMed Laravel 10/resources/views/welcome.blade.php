@extends('templates.headSessionAllow')


<title> Bem-Vindo! </title>

@section('contentPaciente')

    <h1>Bem-Vindo(a) {{ Auth::user()->name }}!</h1>

    <h1>Meus Exames </h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Especialidade</th>
                <th>Data</th>
                <th>Instituição</th>
                <th>Cidade</th>
                <th>UF</th>

            <tbody>
                <!-- quando coloca o foreach ($exames as @exames), ele simplesmente não funciona -->
            

            </tbody>

            </tr>
        </thead>
    </table>

@endsection