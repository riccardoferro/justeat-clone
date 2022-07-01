@extends('layouts.app')

@section('navcategory')
    <a href="{{ route('admin.user.index') }}" class="btn t4-add-btn d-flex align-items-center">
        <span class="me-2">Torna al Profilo </span>
        <img src="/images/replay.png" alt="">
    </a>
@endsection

@section('content')
    <div class="container-fluid position-relative">
        <div class="row justify-content-center">
            <div class="col-12 ">

                <div class="d-flex justify-content-center">
                    <h1>Il tuo menù</h1>
                    <a href="{{ route('admin.plates.create') }}" class=" btn t4-add-btn d-flex align-items-center ms-5">
                        <span class="me-2">Aggiungi </span>
                        <img src="/images/add2.png" alt="">
                    </a>
                </div>
            </div>


        </div>

        <div class="row flex-column justify-content-center">

            <div class="row col-xxl-10 col-xl-10 col-md-11 col-sm-12 m-auto mt-3 justify-content-center">

                @if (count($plates))
                    @foreach ($plates as $plate)
                        <div class="col-sm-10 col-md-5 col-xl-3  d-flex flex-column t4-card ">

                            {{-- ////////// Card Piatto --}}
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
                            {{-- Fine Card piatto \\\\\\\\\\\\\\ --}}

                            {{-- /////////////   Sezione Bottoni --}}
                            <div class="t4-card-buttons
                                d-flex justify-content-between">

                                {{-- ///////   MODIFICA PIATTO --}}
                                <a href="{{ route('admin.plates.edit', ['plate' => $plate->id]) }}"
                                    class="btn t4-add-btn d-flex align-items-center">
                                    <span class="me-2">Modifica </span>
                                    <img src="/images/edit-document.png" alt="">
                                </a>
                                {{-- fine modifica Piatto  \\\\\\\\\ --}}


                                {{-- ////////// ELIMINA PIATTO --}}
                                <form action="{{ route('admin.plates.destroy', ['plate' => $plate->id]) }}"
                                    class="d-inline-block" method="POST">

                                    @csrf
                                    @method('DELETE')



                                    <button id='delete_button' type="submit"
                                        class="btn t4-add-btn d-flex align-items-center">
                                        <span class="me-2">Elimina</span>
                                        <img src="/images/delete.png" alt="">
                                    </button>
                                </form>
                                {{-- Fine Elimina piatto \\\\\\\\\ --}}

                            </div>
                            {{-- Fine Sezione Bottoni \\\\\\\\\\\ --}}


                        </div>
                    @endforeach
                @else
                    <div class="col-4 text-center mt-5">
                        <img src="/images/sad.png" alt="" class="t4-empty-plates">
                        <h1>Non hai nessuno Prodotto</h1>
                    </div>
                @endif
            </div>

        </div>
    </div>


























@endsection



<script></script>
