@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        {{-- Jumbotron + Carousel --}}
        <div class="row">
            <div class="col-12 t4-carousel">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active t4-carousel-p">
                            <img src="/images/jumbo-home.jpeg" class="d-block w-100" alt="jumbo-home">
                            <div class="text-center t4-carousel-text">
                                <div class="d-xxl-block d-xl-block d-lg-block d-md-block d-sm-none d-none">
                                    <p>#1 Miglior sito di food delivery</p>
                                    <h2>Mangia con un click</h2>
                                    <h5 class="mb-5">Ordina online dai tuoi ristoranti preferiti</h5>
                                </div>
                                <div class="d-flex align-items-baseline mt-sm-5">

                                    <p class="d-xxl-none d-xl-none d-lg-none d-md-none d-sm-block d-block">Ordina online
                                        dai tuoi ristoranti preferiti</p>
                                    <input id="password" type="search" placeholder="Cerca per ristorante"
                                        class="form-control">
                                    <span class="t4-search ms-2"><img src="/images/search.png" alt=""></span>


                                </div>

                            </div>

                        </div>
                        <div class="carousel-item">
                            <img src="/images/team4.png" class="d-block w-100" alt="team4">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Sezione Categorie --}}
        <div class="row t4-50vh"></div>
        {{-- Banner --}}
        <div class="row t4-bg-orange py-5 justify-content-evenly">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-3 col-6 t4-text-black">
                <div class="d-flex flex-column">
                    <h2>Ordina comodamente da casa</h2>
                    <h4>I nostri Rider arriveranno subito da te</h4>
                    <p>Scarica l'app e otterai il 25% sul tuo primo ordine!</p>
                    <div class="d-flex">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-3 col-lg-3 col-md-5 col-sm-3 col-6 t4-banner-app">
                <img src="/images/Booleat-Tel.png" alt="">
            </div>
        </div>
    @endsection
