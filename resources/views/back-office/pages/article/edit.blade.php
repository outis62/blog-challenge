@extends('back-office.layouts.livewire')
@section('title', 'Gestion des articles du blog')

@section('livewire-component')

    @livewire('article.form-article', [
        'article' => $article,
        'listRoute' => ['link' => 'dashboard', 'name' => 'Tous les articles'],
        'addRoute' => ['link' => 'article.create', 'name' => 'Ajouter une article'],
        'showRoute' => ['link' => 'article.show', 'name' => 'Revenir aux détails'],
    ])
@endsection
