<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-auto ms-auto">
                    <div class="list-grid-nav hstack gap-1">
                        @isset($userRoute['link'])
                            <a href="{{ route($userRoute['link']) }}" title="Voir la liste des articles"
                                class="btn btn-secondary addMembers-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-list-task" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                                    <path
                                        d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                                    <path fill-rule="evenodd"
                                        d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                                </svg> {{ $userRoute['name'] }}
                            </a>
                        @endisset
                        @isset($addRoute['link'])
                            <a href="{{ route($addRoute['link']) }}" title="Ajouter un nouvel utilisateur"
                                class="btn btn-success addMembers-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-plus-circle mb-1" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg> {{ $addRoute['name'] }}
                            </a>
                        @endisset
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @livewire('user.user-table', ['viewRoute' => $viewRoute])
                </div>
            </div>
        </div>
    </div>
</div>
