<div>
    {{-- Do your work, then step back. --}}
    <div class="card">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-auto ms-auto">
                    <div class="list-grid-nav hstack gap-1">
                        @isset($listRoute['link'])
                            <a href="{{ route($listRoute['link']) }}" title="Retour à la liste des accès"
                                class="btn btn-secondary addMembers-modal">
                                <i class="ri-list-check-2 me-1 align-bottom"></i> {{ $listRoute['name'] }}
                            </a>
                        @endisset
                        @isset($addRoute['link'])
                            <a href="{{ route($addRoute['link']) }}" title="Ajouter un nouveau compte"
                                class="btn btn-success addMembers-modal">
                                <i class="ri-add-box-line me-1 align-bottom"></i> {{ $addRoute['name'] }}
                            </a>
                        @endisset
                        @isset($editRoute['link'])
                            @if ($userConnected->id !== $user->id)
                                <a href="{{ route($editRoute['link'], $user) }}" title="Modifier les information du compte"
                                    class="btn btn-warning addMembers-modal">
                                    <i class="ri-pencil-line me-1 align-bottom"></i> {{ $editRoute['name'] }}
                                </a>
                            @endif
                        @endisset
                        <button type="button" class="btn btn-danger waves-effect waves-light"
                            wire:click="deleteUser('{{ $user->id }}')" title="Supprimer l'utilisateur">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="avatar-lg">
                                <img src="{{ asset('assets/img/user_profil.png') }}" width="70" height="70"
                                    alt="user-img" class="img-thumbnail rounded-circle" />
                            </div>
                        </div>
                        <div class="col-12">
                            <dl class="mt-3 dl">
                                <dt>Nom:</dt>
                                <dd>{{ $user->nom ? $user->nom : '---' }}</dd>
                                <dt>Prenom:</dt>
                                <dd>{{ $user->prenom ? $user->prenom : '---' }}</dd>
                                <dt>Telephone:</dt>
                                <dd>{{ $user->telephone ? $user->telephone : '---' }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            @if ($userConnected->id !== $user->id)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-warning waves-effect waves-light"
                                    wire:click='generatePassword'>Reinitialiser Mot de passe</button>
                                <button type="button"
                                    class="btn btn-outline-{{ $user->statut ? 'success' : 'danger' }} waves-effect waves-light"
                                    wire:click='setAccountState'>{{ $user->statut ? 'Déverouiller' : 'Verouiller' }}
                                    le compte</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <dl class="mt-1 dl">
                        <dt>Email:</dt>
                        <dd>{{ $user->email ? $user->email : '---' }}</dd>
                        <dt>Date de création :</dt>
                        <dd>{{ $user->created_at ? \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') : '---' }}
                        </dd>
                        <dt>Compte:</dt>
                        <dd>
                            @if ($user->statut)
                                <span class="badge badge-danger">
                                    <i class="ri-lock-unlock-line"></i>
                                    Blocqué
                                </span>
                            @else
                                <span class="badge badge-success">
                                    <i class="ri-lock-2-line"></i>
                                    Accessible
                                </span>
                            @endif
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
