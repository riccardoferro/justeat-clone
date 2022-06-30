@extends('layouts.app')

@section('content')
    <div class="container t4-h80vh d-flex align-items-center justify-content-center ">
        <div class="row justify-content-center text-center">
            <h1 class='t4-orangeText m-auto'>Pagina non trovata</h1>
            <div class=" col-8 col-xl-4 col-md-5 m-auto d-flex justify-content-center">
                <img class="t4-w100" src="/images/404.png" alt="">
            </div>
            <div class="row justify-content-center">
                <div class="col-3 d-flex justify-content-center">
                    <a href="/" class="btn t4-add-btn d-flex align-items-center">
                        <span class="me-2">Indietro </span>
                        <img src="/images/replay.png" alt="">
                    </a>

                </div>
            </div>


        </div>

    </div>
@endsection
