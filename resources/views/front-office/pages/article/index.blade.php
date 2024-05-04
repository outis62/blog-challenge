@extends('front-office.layouts.livewire')
@section('title', 'Gestion des articles du blog')

@section('livewire-component')
    @if ($articles->count() > 0)
        @foreach ($articles as $article)
            <article>
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-image">
                                <div class="post-heading">
                                    <h3><a href="#">{{ $article->titre ? $article->titre : '---' }}</a></h3>
                                </div>
                                <img src="{{ Storage::url('images/' . $article->image_path) }}" alt="{{ $article->titre }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <p>
                                    {{ $article->description ? $article->description : '---' }}
                                </p>
                                <ul>
                                    <li>Publier par: <a href="javascript:void(0)"
                                            class="author">{{ $article->user->nom ? $article->user->nom : '---' }}
                                            {{ $article->user->prenom ? $article->user->prenom : '---' }}</a></li>
                                    <li>date de publication: <a href="javascript:void(0)"
                                            class="date">{{ $article->created_at ? formatDate($article->created_at) : '---' }}</a>
                                    </li>
                                    <li><a href="{{ route('commentaires.index', ['article_id' => $article->id]) }}"
                                            class="">Voir les commentaires <span
                                                class="badge bg-warning text-white">{{ $article->commentaire->count() }}</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    @else
        <div class="small-box bg-white mt-5 mb-5">
            <div class="inner ms-3">
                <p class="fs-6 text-center">Aucun article n'a été publier pour le moment 👦</p>
            </div>
        </div>
    @endif
@endsection
