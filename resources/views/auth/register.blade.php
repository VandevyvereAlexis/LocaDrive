@extends('layouts.app')

@section('content')


    <!-- SECTION CARD FORMULAIRE INSCRIPTION
    ===================================================================================== -->
    <div class="container-fluid pt-5" id="container_register_blade">
        <div class="row justify-content-center align-items-center" id="row_register_blade">
            <div class="col-md-7 col-sm-11">


                <!-- MESSAGES ALERT / SUCCESS
                ===================================================================================== -->
                <div class="container-fluid mx-auto col-md-7 col-sm-11 border-0 m-0 p-1 text-center pt-2">
                    @if (session()->has('message'))
                        <p class="alert alert-success">{{ session()->get('message') }}</p>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="p-0" style="list-style-type: none ; text-decoration: none;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>


                <!-- CARD
                ===================================================================================== -->
                <div class="card p-1 mb-4 border-0" id="card_register_blade">


                    <!-- CARD HEADER
                    ===================================================================================== -->
                    <div class="card-header" id="card_header_register_blade"><h1 class="fs-6 m-1">{{ __('Inscription') }}</h1></div>


                    <!-- CARD BODY 
                    ===================================================================================== -->
                    <div class="card-body">


                        <!-- FORMULAIRE INSCRIPTION
                        ===================================================================================== -->
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf


                            <!-- SECTION "NOM + PRENOM + EMAIL + PSEUDO + IMAGE + MOT DE PASSE + MOT DE PASSE CONFIRM"
                            ===================================================================================== -->
                            <div class="row justify-content-center">
                                <div class="col-10 border-bottom mb-1" style="border-color: #a0a4ef !important;">
                                    <h3 class="text-center mt-2"><small>Informations de base</small></h3>


                                    <!-- SECTION NOM + PRENOM
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-4">

                                        <!-- NOM -->
                                        <div class="col-6">
                                            <label for="nom" class="col-form-label ms-1"><small>{{ __('Nom') }}</small></label>
                                            <input id="nom" type="text" placeholder="Nom..." class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="on" autofocus>

                                            @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <!-- PRENOM -->
                                        <div class="col-6">
                                            <label for="prenom" class="col-form-label ms-1"><small>{{ __('Prénom') }}</small></label>
                                            <input id="prenom" type="text" placeholder="Prénom..." class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="on">

                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>


                                    <!-- E-MAIL 
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3 ">
                                        <div class="col">
                                            <label for="email" class="col-form-label ms-1"><small>{{ __('Adresse e-mail') }}</small></label>
                                            <input id="email" type="email" placeholder="Adresse e-mail..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="on">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <!-- SECTION PSEUDO + IMAGE 
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3">

                                        <!-- PSEUDO -->
                                        <div class="col-6">
                                            <label for="pseudo" class="col-form-label ms-1"><small>{{ __('pseudo') }}</small></label>
                                            <input id="pseudo" type="text" placeholder="Pseudo..." class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" required autocomplete="on">

                                            @error('pseudo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- IMAGE -->
                                        <div class="col-6">
                                            <label for="image" class="col-form-label ms-1"><small>{{ __('image (optionnel)') }}</small></label>
                                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">

                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>


                                    <!-- SECTION PASSWORD + CONFIRM 
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3 mb-4">

                                        <!-- PASSWORD -->
                                        <div class="col-6">
                                            <label for="password" class="col-form-label ms-1"><small>{{ __('Mot de passe') }}</small></label>
                                            <input id="password" type="password" placeholder="..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                                            <div id="emailHelp" class="form-text ms-1"><small>8 et 15 caracteres. minimum 1 lettre, 1 chiffre et 1 caractère spécial</small></div>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- PASSWORD CONFIRM -->
                                        <div class="col-6">
                                            <label for="password-confirm" class="col-form-label ms-1"><small>{{ __('Mot de passe') }}</small></label>
                                            <input id="password-confirm" type="password" placeholder="..." class="form-control" name="password_confirmation" required autocomplete="off">
                                        </div>

                                    </div>


                                </div>
                            </div>





                            <!-- SECTION "AGE + NUMERO + NUMERO_PERMIS + PAYS_PERMIS + DATE_PERMIS + BUTTON VALIDATION
                            ===================================================================================== -->
                            <div class="row justify-content-center">
                                <div class="col-10 border-top" style="border-color: #a0a4ef !important;">
                                    <h3 class="text-center mt-4"><small>Informations complémentaires</small></h3>


                                    <!-- SECTION AGE + NUMERO TELEPHONE
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-4">

                                        <!-- AGE -->
                                        <div class="col-4">
                                            <label for="age" class="col-form-label ms-1"><small>{{ __('Age') }}</small></label>
                                            <input id="age" type="number" min="18" max="70" placeholder="18" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="off">

                                            @error('age')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- NUMERO TELEPHONE -->
                                        <div class="col-8">
                                            <label for="numero" class="col-form-label ms-1"><small>{{ __('Numéro de téléphone') }}</small></label>
                                            <input id="numero" type="text" placeholder="06..." class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('nuemro') }}" autocomplete="off">

                                            @error('numero')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>


                                    <!-- NUMERO PERMIS 
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3">
                                        <div class="col">
                                            <label for="numero_permis" class="col-md-10 col-form-label"><small>{{ __('Numéro de permis') }}</small></label>
                                            <input id="numero_permis" type="text" placeholder="13AA..." class="form-control @error('numero_permis') is-invalid @enderror" name="numero_permis" value="{{ old('numero_permis') }}" required autocomplete="off">

                                            @error('numero_permis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <!-- SECTION PAYS PERMIS + DATE PERMIS 
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3 border-bottom pb-5" style="border-color: #a0a4ef !important;">

                                        <!-- PAYS PERMIS -->
                                        <div class="col-6">
                                            <label for="pays_permis" class="col-form-label ms-1"><small>{{ __('Pays du permis') }}</small></label>
                                            <input id="pays_permis" type="text" placeholder="Fr.." class="form-control @error('pays_permis') is-invalid @enderror" name="pays_permis" value="{{ old('pays_permis') }}" required autocomplete="off">

                                            @error('pays_permis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- DATE PERMIS -->
                                        <div class="col-6">
                                            <label for="date_permis" class="col-form-label ms-1"><small>{{ __('Date du permis') }}</small></label>
                                            <input id="date_permis" type="date" class="form-control @error('date_permis') is-invalid @enderror" name="date_permis" value="{{ old('date_permis') }}" autocomplete="off">

                                            @error('date_permis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>


                                    <!-- BOUTON VALIDATION INSCRIPTION
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3">
                                        <!--<button type="submit" class="btn col-11" id="button_validation_register_blade"><small>{{ __('S\'inscrire') }}</small></button>-->
                                        <button type="submit" class="learn-more">
                                            <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                                            <span class="button-text">{{ __('S\'inscrire') }}</span>
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


















