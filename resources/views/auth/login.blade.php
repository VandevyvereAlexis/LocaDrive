@extends('layouts.app')

@section('content')


    <!-- SECTION CARD FORMULAIRE CONNEXION
    ===================================================================================== -->
    <div class="container-fluid pt-5" id="container_login_blade">
        <div class="row justify-content-center align-items-center" id="row_login_blade">
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
                <div class="card p-1 mb-4 border-0" id="card_login_blade">


                    <!-- CARD HEADER
                    ===================================================================================== -->
                    <div class="card-header" id="card_header_login_blade"><h1 class="fs-6 m-1">{{ __('Connexion') }}</h1></div>


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
                                <div class="col-md-9 col-sm-11 mb-1">
                                    <h3 class="text-center mt-2"><small>Informations de connexion</small></h3>


                                    <!-- EMAIL
                                    ===================================================================================== -->
                                    <div class="col">
                                        <label for="email" class="col-form-label ms-1 mt-1"><small>{{ __('Adresse e-mail') }}</small></label>
                                        <input id="email" type="email" placeholder="Adresse e-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="on" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <!-- PASSWORD
                                    ===================================================================================== -->
                                    <div class="col">
                                        <label for="password" class="col-form-label ms-1 mt-3"><small>{{ __('Mot de passe') }}</small></label>
                                        <input id="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <!-- SECTION CHECKBOX + PASSWORD OUBLIE
                                    ===================================================================================== -->
                                    <div class="col mt-5 d-flex justify-content-between border-bottom gap-2" style="border-color: #a0a4ef !important;">

                                        <!-- CHECKBOX -->
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" name="remember" style="background-color: #a0a4ef !important;" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label ms-1 mt-1" for="remember"><small>{{ __('Rester connecté') }}</small></label>
                                        </div>

                                        <!-- PASSWORD OUBLIE -->
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link p-0 mt-1" href="{{ route('password.request') }}" style="list-style-type: none ; text-decoration: none;"><small style="color: #a0a4ef; text-decoration: none;">{{ __('Oublié ?') }}</small></a>
                                        @endif

                                    </div>


                                    <!-- BOUTON CONNEXION
                                    ===================================================================================== -->
                                    <div class="row justify-content-center mt-3">
                                        <button type="submit" class="learn-more">
                                            <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                                            <span class="button-text">{{ __('Connexion') }}</span>
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













