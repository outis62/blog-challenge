<div>
    {{-- The whole world belongs to you. --}}
    <div class="card">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-sm-4">
                    <span class="text-muted mb-3">
                        Les champs avec <span class="text-danger fs-15">*</span>
                        sont obligatoires
                    </span>
                </div>
                <div class="col-sm-auto ms-auto">
                    <div class="list-grid-nav hstack gap-1">
                        @isset($listRoute['link'])
                            <a href="{{ route($listRoute['link']) }}" title="Retour à la liste des articles"
                                class="btn btn-secondary addMembers-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-list-task" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                                    <path
                                        d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                                    <path fill-rule="evenodd"
                                        d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                                </svg> {{ $listRoute['name'] }}
                            </a>
                        @endisset
                        @isset($addRoute['link'])
                            <a href="{{ route($addRoute['link']) }}" title="Ajouter un nouvel article"
                                class="btn btn-success addMembers-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-plus-circle mb-1" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg> {{ $addRoute['name'] }}
                            </a>
                        @endisset
                        @isset($showRoute['link'])
                            <a href="{{ route($showRoute['link'], $article) }}" title="Retour aux détails de l'article"
                                class="btn btn-info addMembers-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg> {{ $showRoute['name'] }}
                            </a>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="onSubmitFormArticle">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <span class="text-muted mb-2">Informations sur l'article</span>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nom" class="form-label">
                                Image
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="image" type="file" wire:model="image"
                                class="form-control @error('image') is-invalid @enderror"
                                placeholder="Renseigner l'image'">
                            @error('image')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="titre" class="form-label">
                                Titre
                                <span class="text-danger fs-15">*</span>
                            </label>
                            <input id="titre" type="text" wire:model="titre"
                                class="form-control @error('titre') is-invalid @enderror"
                                placeholder="Renseigner le titre">
                            @error('titre')
                                <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mt-4">
                            <label for="description"
                                class="form-label @error('description') is-invalid @enderror">Description
                                <span class="text-danger fs-15">*</span></label>
                            <textarea class="form-control" id="description" wire:model="description" rows="3"
                                placeholder="Renseigner la description"></textarea>
                        </div>
                        @error('description')
                            <div class="form-text invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input id="user_id" type="hidden" wire:model="user_id" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mt-4">
                            <div class="col-12">
                                <button class="btn btn-{{ $article->id ? 'secondary' : 'success' }}" type="submit">

                                    @if ($article->id)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-upload me-1" viewBox="0 0 16 16">
                                            <path
                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                            <path
                                                d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z" />
                                        </svg>
                                        Mettre à jour
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-floppy me-1" viewBox="0 0 16 16">
                                            <path d="M11 2H9v3h2z" />
                                            <path
                                                d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z" />
                                        </svg>
                                        Enregistrer
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
