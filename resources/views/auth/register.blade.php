@extends('layouts.app')

@section('content')


    <!-- SECTION CARD FORMULAIRE INSCRIPTION
    ===================================================================================== -->
    <div class="container-fluid rounded" id="container_register_blade">
        <div class="row justify-content-center align-items-center" id="row_register_blade">
            <div class="col-md-7 col-sm-11">


                <!-- MESSAGES ALERTE SUCCESS/DANGER -->
                @include('messages')


                <!-- CARD
                ===================================================================================== -->
                <div class="card bg-transparent py-4 mt-2 mb-4" id="card_register_blade">


                    <!-- CARD BODY 
                    ===================================================================================== -->
                    <div class="card-body">


                        <!-- FORMULAIRE INSCRIPTION
                        ===================================================================================== -->
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf


                            <!-- NOM + PRENOM + EMAIL + PSEUDO + PASSWORD + PASSWORD CONFIRM
                            ===================================================================================== -->
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-sm-12">
                                    <h1 class="text-center mb-5">{{ __('Inscription') }}</h1>


                                    <!-- LIEN RETOUR A LA CONNEXION
                                    ===================================================================================== -->
                                    <div class="col text-center mb-5">
                                        <a class="text-light mx-auto" id="lien_register_blade" href="{{ route('login') }}"><span class="position-relative" id="lien_span_register_blade">{{ __('- Retour à la connexion -') }}</span></a>
                                    </div>


                                    <!-- NOM + PRENOM
                                    ===================================================================================== -->
                                    <div class="row justify-content-center">

                                        <!-- NOM -->
                                        <div class="col-6">
                                            <label for="nom" class="col-form-label ms-2 pb-1"><small>{{ __('- Nom') }}</small></label>
                                            <input id="nom" type="text" placeholder="Nom ..." class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="on" autofocus>

                                            @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <!-- PRENOM -->
                                        <div class="col-6">
                                            <label for="prenom" class="col-form-label ms-2 pb-1"><small>{{ __('- Prénom') }}</small></label>
                                            <input id="prenom" type="text" placeholder="Prénom ..." class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="on">

                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>


                                    <!-- E-MAIL + PSEUDO
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3">

                                        <!-- E-MAIL -->
                                        <div class="col-6">
                                            <label for="email" class="col-form-label ms-2 pb-1"><small>{{ __('- Adresse e-mail') }}</small></label>
                                            <input id="email" type="email" placeholder="Adresse e-mail ..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="on">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- PSEUDO -->
                                        <div class="col-6">
                                            <label for="pseudo" class="col-form-label ms-2 pb-1"><small>{{ __('- pseudo') }}</small></label>
                                            <input id="pseudo" type="text" placeholder="Pseudo ..." class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" required autocomplete="on">

                                            @error('pseudo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>


                                    <!-- PASSWORD + PASSWORD CONFIRM 
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3">

                                        <!-- PASSWORD -->
                                        <div class="col-6">
                                            <label for="password" class="col-form-label ms-2 pb-1"><small>{{ __('- Mot de passe') }}</small></label>
                                            <input id="password" type="password" placeholder="8 et 15 caracteres. minimum 1 lettre, 1 chiffre et 1 caractère spécial ..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                                            <div id="passwordHelp" class="form-text ms-2 text-light pt-1"><small>8 et 15 caracteres. minimum 1 lettre, 1 chiffre et 1 caractère spécial</small></div>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- PASSWORD CONFIRM -->
                                        <div class="col-6">
                                            <label for="password-confirm" class="col-form-label ms-2 pb-1"><small>{{ __('- Mot de passe') }}</small></label>
                                            <input id="password-confirm" type="password" placeholder="Confirmation ..." class="form-control" name="password_confirmation" required autocomplete="off">
                                        </div>

                                    </div>


                                </div>
                            </div>





                            <!-- SPHERE
                            ===================================================================================== -->
                            <div class="loader my-3 mx-auto"></div>





                            <!-- AGE + IMAGE + NUMERO TELEPHONE + DATE PERMIS + NUMERO PERMIS + PAYS PERMIS + BUTTON INSCRIPTION
                            ===================================================================================== -->
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-sm-12">


                                    <!-- AGE + IMAGE
                                    ===================================================================================== -->
                                    <div class="row justify-content-center">

                                        <!-- AGE -->
                                        <div class="col-6">
                                            <label for="age" class="col-form-label ms-2 pb-1"><small>{{ __('- Age') }}</small></label>
                                            <input id="age" type="number" min="18" max="70" placeholder="Min : 18 ..." class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="off">

                                            @error('age')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- IMAGE -->
                                        <div class="col-6">
                                            <label for="image" class="col-form-label ms-2 pb-1"><small>{{ __('- image (optionnel)') }}</small></label>
                                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" >

                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>


                                    <!-- NUMERO TELEPHONE + DATE PERMIS 
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3">

                                        <!-- NUMERO TELEPHONE -->
                                        <div class="col-6">
                                            <label for="numero" class="col-form-label ms-2 pb-1"><small>{{ __('- Numéro de téléphone') }}</small></label>
                                            <input id="numero" type="text" placeholder="00.00.00.00.00 ..." class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('nuemro') }}" autocomplete="off">

                                            @error('numero')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- DATE PERMIS -->
                                        <div class="col-6">
                                            <label for="date_permis" class="col-form-label ms-2 pb-1"><small>{{ __('- Date du permis') }}</small></label>
                                            <input id="date_permis" type="date" class="form-control @error('date_permis') is-invalid @enderror" name="date_permis" value="{{ old('date_permis') }}" autocomplete="off">

                                            @error('date_permis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>


                                    <!-- NUMERO PERMIS + PAYS PERMIS 
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3">

                                        <!-- NUMERO PERMIS -->
                                        <div class="col-6">
                                            <label for="numero_permis" class="col-form-label pb-1 ms-2"><small>{{ __('- Numéro de permis') }}</small></label>
                                            <input id="numero_permis" type="text" placeholder="De 1 à 15 caractères ..." class="form-control @error('numero_permis') is-invalid @enderror" name="numero_permis" value="{{ old('numero_permis') }}" required autocomplete="off">

                                            @error('numero_permis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- PAYS PERMIS -->
                                        <div class="col-6">
                                            <label for="pays_permis" class="col-form-label ms-2 pb-1"><small>{{ __('- Pays du permis') }}</small></label>
                                            <input id="pays_permis" type="text" placeholder="France ..." class="form-control @error('pays_permis') is-invalid @enderror" name="pays_permis" value="{{ old('pays_permis') }}" required autocomplete="off">

                                            @error('pays_permis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>


                                </div>

                                <!-- BOUTON VALIDATION INSCRIPTION
                                ===================================================================================== -->
                                <div class="row justify-content-center mt-5" id="row_button_register_blade">
                                    <button type="submit" class="learn-more m-2">
                                        <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                                        <span class="button-text">{{ __('S\'inscrire') }}</span>
                                    </button>
                                </div>


                                <!-- BOUTON "ENVOYER" TABLETTE - MOBILE
                                ===================================================================================== -->
                                <div class="row justify-content-center mt-5 d-none" id="row_button_tb_register_blade">
                                    <button class="btn p-0" id="button_register_blade" type="submit">
                                        <span>{{ __('S\'inscrire') }}</span>
                                    </button>
                                </div>

                            </div>


                        </form>


                    </div>


                </div>


            </div>
        </div>
    </div>


@endsection


















