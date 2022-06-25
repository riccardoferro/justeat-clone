@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-xl-3 t4-jumbo-register">
                <img src="/images/JumboRegister.jpeg" alt="">
            </div>

            {{-- Form --}}
            <div class="col-xl-9 t4-form-register ">


                <form class="row justify-content-center" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="col-xl-6 t4-input-group">
                        <div class="form-group row">


                            <div class="col-xl-8">
                                <input id="name" type="text" placeholder="Nome"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-xl-8">
                                <input id="email" type="email" placeholder="E-mail"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">


                            <div class="col-xl-8">
                                <input id="password" type="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-xl-8">
                                <input id="password-confirm" type="password" class="form-control"
                                    placeholder="Conferma Password" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                        </div>
                        {{-- Aggiunta nuovi campi input --}}
                        {{-- Company --}}
                        <div class="form-group row">


                            <div class="col-xl-8">
                                <input id="company" type="company" placeholder="Azienda"
                                    class="form-control @error('company') is-invalid @enderror" name="company" required
                                    autocomplete="new-company">

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Adress --}}
                        <div class="form-group row">


                            <div class="col-xl-8">
                                <input id="address" type="address" placeholder="Indirizzo"
                                    class="form-control @error('address') is-invalid @enderror" name="address" required
                                    autocomplete="new-address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Partita_iva --}}
                        <div class="form-group row">


                            <div class="col-xl-8">
                                <input id="partita_iva" type="partita_iva" placeholder="P.IVA"
                                    class="form-control @error('partita_iva') is-invalid @enderror" name="partita_iva"
                                    required autocomplete="new-partita_iva">

                                @error('partita_iva')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- right side --}}
                    <div class="col-xl-3">
                        <div class="row flex-column">
                            <div class="t4-register-title">
                                <h4>Benvenuto</h4>
                                <h2>Registrati subito e diventa nostro partner</h2>
                            </div>

                            <div class="t4-btn-group ">
                                <button type="submit" class="t4-btn">
                                    {{ __('Iscriviti') }}
                                </button>

                                <a href="{{ route('login') }}" class="t4-btn ">
                                    Home
                                </a>
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
