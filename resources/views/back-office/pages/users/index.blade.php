@extends('back-office.layouts.livewire')
@section('title', 'Gestion des articles des utilisateurs')

@section('livewire-component')

    @livewire('user.index', [
        'addRoute' => ['link' => 'utilisateur.create', 'name' => 'Ajouter un utilisateur'],
        'viewRoute' => ['link' => 'utilisateur.show', 'name' => 'Détail'],
        'userRoute' => ['link' => 'dashboard', 'name' => 'Articles'],
    ])
@endsection
