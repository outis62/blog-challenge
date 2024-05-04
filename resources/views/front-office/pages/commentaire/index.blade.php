@extends('front-office.layouts.livewire')
@section('title', 'Gestion des articles du blog')

@section('livewire-component')

    <div class="container">
        <div class="row">
            <div class="col-lg-10 justify-content-center">
                <div class="single-article-section">
                    <div class="comments-list-wrap">
                        <h3 class="comment-count-title">Commentaires de l'article: <span
                                class="text-primary">{{ $article->titre }}</span></h3>
                        <div class=""><img src="{{ Storage::url('images/' . $article->image_path) }}"
                                alt="{{ $article->titre }}"></div>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i>
                                {{ $article->user->nom ? $article->user->nom : '---' }}
                                {{ $article->user->prenom ? $article->user->prenom : '---' }}</span>
                            <span class="date"><i
                                    class="fas fa-calendar"></i>{{ $article->created_at ? formatDate($article->created_at) : '---' }}</span>
                        </p>
                        @if ($commentaires->count() > 0)
                            @foreach ($commentaires as $commentaire)
                                <div class="comment-list">
                                    <div class="single-comment-body">
                                        <div class="comment-user-avater">
                                            <img src="{{ asset('assets/img/user_profil.png') }}" alt="">
                                        </div>
                                        <div class="comment-text-body">
                                            <h4>{{ $commentaire->nomcomplet ? $commentaire->nomcomplet : '---' }} <span
                                                    class="comment-date">{{ $commentaire->created_at ? formatDate($commentaire->created_at) : '---' }}</span>
                                            </h4>
                                            <p>{{ $commentaire->message ? $commentaire->message : '---' }}</p>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                    </div>
                @else
                    <div class="small-box bg-white mt-5 mb-5">
                        <div class="inner ms-3">
                            <p class="fs-6 text-center">Aucun commentaire constaté pour le moment 👦</p>
                        </div>
                    </div>
                    @endif
                    <div class="comment-template">
                        <h4>Laisser un commentaire</h4>
                        <p>N'hésitez pas à nous envoyer votre opinion si vous avez un commentaire.</p>
                        <form action="{{ route('commentaire.store') }}" method="POST">
                            @csrf
                            <p>
                                <input type="hidden" name="article_id" value="{{ $article->id }}">
                                <input type="text" name="nomcomplet" placeholder="Renseigner votre nom complet">
                                <input type="email" name="email" placeholder="Renseigner votre e-mail">
                            </p>
                            <p>
                                <textarea name="message" id="comment" rows="5" placeholder="Renseigner votre commentaire."></textarea>
                            </p>
                            <button class="btn btn-success" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-send" viewBox="0 0 16 16">
                                    <path
                                        d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                                </svg>
                                Envoyer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
