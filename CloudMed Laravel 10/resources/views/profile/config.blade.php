@section('title', 'Configurações')

@extends('layouts.profile')

@section('conteudo')
    <div class="profile-forms block">
        <div>
            @include('profile.partials.update-password-form')
        </div>
        <div>
            @include('profile.partials.delete-user-form')
        </div>
    </div>
<@endsection
