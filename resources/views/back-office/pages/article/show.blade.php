@extends('back-office.layouts.livewire')
@section('title', 'Gestion des articles du blog')

@section('livewire-component')

    @livewire('article.show', [
        'article' => $article,
        'listRoute' => ['link' => 'dashboard', 'name' => 'Tous les articles'],
        'addRoute' => ['link' => 'article.create', 'name' => 'Ajouter un article'],
        'viewRoute' => ['link' => 'article.show', 'name' => 'Détail'],
        'editRoute' => ['link' => 'article.edit'],
        'userRoute' => ['link' => 'utilisateur.index', 'name' => 'Utilisateurs'],
    ])
@endsection
