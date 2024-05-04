@extends('back-office.layouts.livewire')
@section('title', 'Gestion des articles du blog')

@section('livewire-component')

    @livewire('article.index', [
        'addRoute' => ['link' => 'article.create', 'name' => 'Ajouter un article'],
        'viewRoute' => ['link' => 'article.show', 'name' => 'Détail'],
        'userRoute' => ['link' => 'utilisateur.index', 'name' => 'Utilisateurs'],
    ])
@endsection
