@section('title', 'Minhas Informações')

@extends('layouts.profile')

@section('conteudo')

    <div class="title-profile absolute top-0 mb-5 w-3/5 py-8 px-16">
        <h2> Informações Clínicas </h2>
        <p class="text-base">
            Tenha controle total das suas informações clínicas. Cadastre dados relevantes, como alergias, tipo sanguíneo, altura e outros detalhes que são essenciais para a sua saúde. 
        </p>
    </div>

    @if ($clinicalInfo->isEmpty())
        @include('profile.partials.cadastrar-info-clinica')
    @else
        @include('profile.partials.update-info-clinica')
    @endif

@endsection
