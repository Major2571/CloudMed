@extends('templates.headSessionAllow')

<title> Bem-Vindo! </title>

@section('contentPaciente')

    <h1>Bem-Vindo(a) {{ Auth::user()->name }}!</h1>

@endsection