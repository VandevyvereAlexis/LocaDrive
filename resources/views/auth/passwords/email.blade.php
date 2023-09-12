@extends('layouts.app')

@section('content')


    <!-- CONTAINER
    ===================================================================================== -->
    <div class="container-fluid rounded" id="container_email_blade">
        <div class="row justify-content-center align-items-center" id="row_email_blade">
            <div class="col-md-5 col-sm-11">


                <!-- MESSAGES ALERTE SUCCESS/DANGER -->
                @include('messages')


                <!-- CARD
                ===================================================================================== -->
                <div class="card bg-transparent py-4 mt-2 mb-4" id="card_email_blade">


                    <!-- CARD BODY 
                    ===================================================================================== -->
                    <div class="card-body">


                        @if (session('status'))
                            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                        @endif


                        <!-- FORMULAIRE EMAIL
                        ===================================================================================== -->
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf


                            <!-- SECTION "EMAIL"
                            ===================================================================================== -->
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-sm-11 mb-1">
                                    <h1 class="text-center mb-5">{{ __('Réinitialiser le mot de passe') }}</h1>


                                    <!-- LIEN RETOUR A LA CONNEXION
                                    ===================================================================================== -->
                                    <div class="col text-center">
                                        <a class="text-light mx-auto p-0 my-2" id="lien_email_blade" href="{{ route('login') }}"><span class="position-relative" id="lien_span_email_blade">{{ __('- Retour à la connexion -') }}</span></a>
                                    </div>


                                    <!-- SPHERE
                                    ===================================================================================== -->
                                    <div class="loader mx-auto my-3"></div>


                                    <!-- EMAIL -->
                                    <div class="col mt-4">
                                        <label for="email" class="ccol-form-label pb-1"><small>{{ __('- Adresse e-mail') }}</small></label>
                                        <input id="email" type="email" placeholder="Adresse e-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="on" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
        
        
                                    <!-- BOUTON "ENVOYER" DESKTOP
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-5" id="row_button_email_blade">
                                        <button type="submit" class="learn-more">
                                            <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                                            <span class="button-text">{{ __('Envoyer') }}</span>
                                        </button>
                                    </div>


                                    <!-- BOUTON "ENVOYER" TABLETTE - MOBILE
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-5 d-none" id="row_button_tb_email_blade">
                                        <button class="btn p-0" id="button_email_blade" type="submit">
                                            <span>{{ __('Envoyer') }}</span>
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



