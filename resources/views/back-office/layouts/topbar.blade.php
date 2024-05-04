<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <div class="site-logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/img/logo_v2.png') }}" alt="">
                        </a>
                    </div>
                    <nav class="main-menu">
                        <ul>
                            <li><a href="/">Blog</a>
                            </li>
                            <li><img src="{{ asset('assets/img/user_profil.png') }}" alt="" width="30"
                                    height="30" class="rounded-circle"> {{ Auth::user()->nom }}
                                {{ Auth::user()->prenom }}
                                <ul class="sub-menu">
                                    <li><a href="javascript: void(0);">Profile</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="dropdown-icon mdi me-2  mdi-logout-variant"></i>Déconnexion
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>
