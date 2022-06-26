@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <div class="row align-items-center">
            <div class="col-xxl-4 col-xl-5 col-md-6 order-md-1 order-sm-2 order-2 col-12 t4-jumbo-register">
                <img src="/images/JumboRegister.jpeg" alt="">
            </div>

            {{-- Form --}}
            <div
                class=" justify-content-around col-xxl-7 col-xl-7 col-md-6 order-md-3 order-sm-1 order-1 col-12 t4-form-register ">


                <form class="row justify-content-center" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="col-xxl-10 col-xl-6 order-xxl-2 order-xl-1 order-md-2 order-sm-2 order-2 me-xxl-5">
                        <div class="form-group row justify-content-center">


                            <div class="col-xl-10 col-md-9 col-sm-10">
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

                        <div class="form-group row justify-content-center">


                            <div class="col-xl-10 col-md-9 col-sm-10">
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

                        <div class="form-group row justify-content-center">


                            <div class="col-xl-10 col-md-9 col-sm-10">
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

                        <div class="form-group row justify-content-center">


                            <div class="col-xl-10 col-md-9 col-sm-10">
                                <input id="password-confirm" type="password" class="form-control"
                                    placeholder="Conferma Password" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                        </div>
                        {{-- Aggiunta nuovi campi input --}}

                        {{-- Company --}}
                        <div class="form-group row justify-content-center">


                            <div class="col-xl-10 col-md-9 col-sm-10">
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
                        <div class="form-group row justify-content-center">


                            <div class="col-xl-10 col-md-9 col-sm-10">
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
                        <div class="form-group row justify-content-center">


                            <div class="col-xl-10 col-md-9 col-sm-10 mb-3">
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

                        {{-- Buttons --}}
                        <div class="t4-btn-group order-md-2 order-sm-3 order-3 mb-5">
                            <button type="submit" class="t4-btn me-3">
                                {{ __('Iscriviti') }}
                            </button>
                            <button>
                                <a href="{{ route('login') }}" class="t4-btn ">
                                    Home
                                </a>
                            </button>

                        </div>
                    </div>

                    {{-- right side --}}
                    <div
                        class="col-xxl-12 col-xl-5 col-md-9 col-sm-10 order-xxl-1 order-xl-2 order-md-1 order-sm-1 order-1 t4-register-text">
                        <div class="row justify-content-md-start justify-content-sm-start">
                            <div class="d-md-flex flex-md-column text-md-start t4-register-title mb-3">
                                <div class="d-xxl-flex justify-content-xxl-center">
                                    <div class="col-xxl-5">
                                        <p>Benvenuto</p>
                                        <h2 class="fs-xl-1 fs-md-2 fs-sm-4">Registrati subito e diventa nostro
                                            partner</h2>
                                    </div>
                                    <img class="col-xxl-3 col-xl-12 d-md-none d-sm-none d-none d-xl-block  p-xl-3"
                                        src="../images/food-service.png" alt="">
                                </div>

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
