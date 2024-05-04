@extends('back-office.layouts.livewire')
@section('title', 'Gestion des utilisateurs du blog')

@section('livewire-component')

    @livewire('user.show', [
        'user' => $user,
        'listRoute' => ['link' => 'utilisateur.index', 'name' => 'Tous les comptes'],
        'viewRoute' => ['link' => 'utilisateur.show', 'name' => 'Détail'],
    ])
@endsection
