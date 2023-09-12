@extends('layouts.app')

@section('content')


    <!-- SECTION CARD FORMULAIRE CONNEXION
    ===================================================================================== -->
    <div class="container-fluid rounded" id="container_login_blade">
        <div class="row justify-content-center align-items-center" id="row_login_blade">
            <div class="col-md-5 col-sm-11">


                <!-- MESSAGES ALERTE SUCCESS/DANGER -->
                @include('messages')


                <!-- CARD
                ===================================================================================== -->
                <div class="card bg-transparent py-4 mt-2 mb-4" id="card_login_blade">


                    <!-- CARD BODY 
                    ===================================================================================== -->
                    <div class="card-body">


                        <!-- FORMULAIRE CONNEXION
                        ===================================================================================== -->
                        <form method="POST" action="{{ route('login') }}">
                        @csrf


                            <!-- SECTION "EMAIL + PASSWORD + CHECKBOX + PASSWORD OUBLIE"
                            ===================================================================================== -->
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-sm-11 mb-1">
                                    <h1 class="text-center mb-5">{{ __('Connexion') }}</h1>


                                    <!-- LIEN CREER UN COMPTE
                                    ===================================================================================== -->
                                    <div class="col text-center">
                                        <a class="text-light mx-auto p-0 my-2" id="lien_login_blade" href="{{ route('register') }}"><span class="position-relative" id="lien_span_login_blade">{{ __('- Créer un compte -') }}</span></a>
                                    </div>


                                    <!-- SPHERE
                                    ===================================================================================== -->
                                    <div class="loader mx-auto my-3"></div>


                                    <!-- EMAIL + MOT DE PASSE
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-5">

                                        <!-- EMAIL -->
                                        <div class="col-md-6 col-sm-12 mb-2">
                                            <label for="email" class="col-form-label ms-2 pb-1"><small>{{ __('- Adresse e-mail') }}</small></label>
                                            <input id="email" type="email" placeholder="Adresse e-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="on" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <!-- PASSWORD -->
                                        <div class="col-md-6 col-sm-12">
                                            <label for="password" class="col-form-label ms-2 pb-1"><small>{{ __('- Mot de passe') }}</small></label>
                                            <input id="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>


                                    <!-- SECTION CHECKBOX + PASSWORD OUBLIE
                                    ===================================================================================== -->
                                    <div class="col d-flex justify-content-between border-bottom gap-2 pb-1 mt-5">

                                        <!-- CHECKBOX -->
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input border" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label ms-1 mt-1" for="remember"><small>{{ __('Rester connecté') }}</small></label>
                                        </div>

                                        <!-- PASSWORD OUBLIE -->
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link p-0 mt-1 text-light" href="{{ route('password.request') }}" style="list-style-type: none ; text-decoration: none;"><small>{{ __('Oublié ?') }}</small></a>
                                        @endif

                                    </div>


                                    <!-- BOUTON CONNEXION
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-5" id="row_button_login_blade">
                                        <button type="submit" class="learn-more">
                                            <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                                            <span class="button-text">{{ __('Connexion') }}</span>
                                        </button>
                                    </div>


                                    <!-- BOUTON "ENVOYER" TABLETTE - MOBILE
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-5 d-none" id="row_button_tb_login_blade">
                                        <button class="btn p-0" id="button_login_blade" type="submit">
                                            <span>{{ __('Connexion') }}</span>
                                        </button>
                                    </div>

                                </div>
                            </div>


                        </form>


                    </div>


                </div>


            </div>
        </div>


    </div>


@endsection













