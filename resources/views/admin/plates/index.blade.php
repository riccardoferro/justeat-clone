@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row flex-column justify-content-center">
            <div class="col-12 text-alig-center d-flex justify-content-center flex-sm-column flex-xl-row">
                <h1>Il tuo menù</h1>


                <div class="ms-a">
                    <a href="{{ route('admin.plates.create') }}" class="btn t4-add-btn d-flex align-items-center">
                        <span class="me-2">Aggiungi </span>
                        <img src="/images/add2.png" alt="">
                    </a>
                </div>

            </div>



            <div class="row col-xxl-10 col-xl-10 col-md-11 col-sm-12 m-auto mt-3">
                @if ($plates)
                    @foreach ($plates as $plate)
                        <div class="col-sm-10 col-md-5 col-xl-3  d-flex flex-column t4-card ">
                            <div class="t4-card-img">
                                <img src="{{ asset('storage/' . $plate->image) }}" alt="{{ $plate->name }}">
                            </div>
                            <div class="t4-card-title">
                                <span class="t4-card-label">Nome Piatto</span>
                                <p> {{ $plate->name }} </p>

                            </div>
                            <div class="t4-card-description">
                                <span class="t4-card-label">Descrizione </span>
                                <p>{{ $plate->description }}</p>
                            </div>
                            <div class="t4-card-info d-flex justify-content-between">
                                <p><span>Prezzo: </span>{{ $plate->price }} &euro;</p>
                                @if ($plate->visible == 1)
                                    <p style="color:rgb(4, 165, 4)">Disponibile</p>
                                @else
                                    <p style="color:rgb(165, 4, 4)">Non disponibile</p>
                                @endif
                            </div>
                            <div class="t4-card-buttons
                                d-flex justify-content-around">
                                {{-- MODIFICA PIATTO --}}


                                <a href="{{ route('admin.plates.edit', ['plate' => $plate->id]) }}"
                                    class="btn t4-add-btn d-flex align-items-center">
                                    <span class="me-2">Modifica </span>
                                    <img src="/images/edit-document.png" alt="">
                                </a>
                                {{-- ELIMINA PIATTO --}}

                                <form action="{{ route('admin.plates.destroy', ['plate' => $plate->id]) }}"
                                    class="d-inline-block" method="POST">

                                    @csrf
                                    @method('DELETE')



                                    <button type="submit" class="btn t4-add-btn d-flex align-items-center">
                                        <span class="me-2">Elimina</span>
                                        <img src="/images/delete.png" alt="">
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Non hai nessun contenuto</p>
                    <a href="{{ route('admin.plates.create') }}">Aggiungi Piatto al menù</a>
                @endif
            </div>

        </div>
    </div>

























@endsection
