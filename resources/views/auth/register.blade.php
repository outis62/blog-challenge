<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <title>Legrand Web Service Blog</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon_v2.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>
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
                                <li><a href="#">Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-section mt-100 mb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5>Inscription</h5>
                                <p>Les champs avec <span class="text-danger">*</span> sont obligatoires</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xxl-4 col-md-6 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <label for="nom" class="form-label">
                                                    Nom de famaille
                                                    <span class="text-danger fs-15">*</span>
                                                </label>
                                                <input id="nom" type="text" name="nom"
                                                    class="form-control @error('nom') is-invalid @enderror"
                                                    placeholder="Renseigner le nom de famille">
                                                @error('nom')
                                                    <div class="form-text invalid-feedback d-block">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <label for="prenom" class="form-label">
                                                    Prénom
                                                    <span class="text-danger fs-15">*</span>
                                                </label>
                                                <input id="prenom" type="text" name="prenom"
                                                    class="form-control @error('prenom') is-invalid @enderror"
                                                    placeholder="Renseigner le prénom">
                                                @error('prenom')
                                                    <div class="form-text invalid-feedback d-block">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-4 col-md-6 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <label for="telephone" class="form-label">
                                                    Téléphone
                                                    <span class="text-danger fs-15">*</span>
                                                </label>
                                                <input id="telephone" type="text" name="telephone"
                                                    class="form-control @error('telephone') is-invalid @enderror"
                                                    placeholder="Renseigner le téléphone">
                                                @error('telephone')
                                                    <div class="form-text invalid-feedback d-block">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label">
                                                    Email
                                                    <span class="text-danger fs-15">*</span>
                                                </label>
                                                <input id="email" type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="Renseigner e-mail">
                                                @error('email')
                                                    <div class="form-text invalid-feedback d-block">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="nom" class="form-label">
                                                    Mot de passe
                                                    <span class="text-danger fs-15">*</span>
                                                </label>
                                                <input id="password" type="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    placeholder="Renseigner le mot de passe">
                                                @error('password')
                                                    <div class="form-text invalid-feedback d-block">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <input id="role" type="hidden" name="role" value="utilisateur"
                                            class="form-control @error('role') is-invalid @enderror"
                                            placeholder="Renseigner le mot de passe">
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-success w-100 text-white"
                                            type="submit">S'inscrire</button>
                                    </div>
                                    @if (session()->has('error'))
                                        <div style="margin-top: 10px;" class="alert alert-danger" role="alert">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                </form>
                                <div>
                                    Vous avez un compte ? <a href="{{ route('login') }}"
                                        class="">connectez-vous</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © <span>{{ config('app.name') }}</span>.
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <p>Nos conditions d'utilisation</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/sticker.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
