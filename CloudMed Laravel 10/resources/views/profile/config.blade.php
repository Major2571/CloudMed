@section('title', 'Configurações')

@extends('layouts.profile')

@section('conteudo')
    <div class="profile-forms block">
        <div class="">
            @include('profile.partials.update-password-form')
        </div>
        <div class="">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
<@endsection
