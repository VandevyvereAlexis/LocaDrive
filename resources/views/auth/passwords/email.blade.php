@extends('layouts.app')

@section('content')


    <!-- CONTAINER
    ===================================================================================== -->
    <div class="container-fluid pt-5" id="container_email_blade">
        <div class="row justify-content-center align-items-center" id="row_email_blade">
            <div class="col-md-5 col-sm-11">


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
                <div class="card p-1 mb-4 border-0" id="card_email_blade">


                    <!-- CARD HEADER
                    ===================================================================================== -->
                    <div class="card-header" id="card_header_email_blade"><h1 class="fs-6 m-1">{{ __('Réinitialiser le mot de passe') }}</h1></div>


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
                                <div class="col-md-9 col-sm-11 mb-1">
                                    <h3 class="text-center mt-2"><small>Informations de récupération du mot de passe</small></h3>


                                    <!-- EMAIL -->
                                    <div class="col border-bottom" style="border-color: #a0a4ef !important;">
                                        <label for="email" class="col-form-label ms-1 mt-1"><small>{{ __('Adresse e-mail') }}</small></label>
                                        <input id="email" type="email" placeholder="Adresse e-mail" class="form-control mb-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="on" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
        
        
                                    <!-- BOUTON ENVOYER
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3">
                                        <button type="submit" class="learn-more">
                                            <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                                            <span class="button-text">{{ __('Envoyer') }}</span>
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



