@section('title', 'Minhas Informações')

@extends('layouts.profile')

@section('conteudo')

    @if ($clinicalInfo->isEmpty())
        @include('profile.partials.cadastrar-info-clinica')
    @else
        @include('profile.partials.update-info-clinica')
    @endif

@endsection
