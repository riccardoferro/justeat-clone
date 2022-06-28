@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row flex-column justify-content-center">
            <div class="col-12">
                <h1>I tuoi piatti</h1>
            </div>
            <a href="{{ route('admin.plates.create') }}">Aggiungi Piatto al menù</a>
            <div class="row">
                @if ($plates)
                    @foreach ($plates as $plate)
                        <div class="col-sm-10 col-md-5 col-xl-3  d-flex flex-column t4-card">
                            <div class="t4-card-img">
                                <img src="{{ asset('storage/' . $plate->image) }}" alt="{{ $plate->name }}">
                            </div>
                            <div class="t4-card-title">
                                <p class="t4-card-label">Nome Piatto</p>
                                <p> {{ $plate->name }} </p>

                            </div>
                            <div class="t4-card-description">
                                <p class="t4-card-label">Descrizione </p>
                                <p>{{ $plate->description }}</p>
                            </div>
                            <div class="t4-card-info d-flex justify-content-between">
                                <p>{{ $plate->price }}</p>
                                @if ($plate->visible == 1)
                                    <p>Disponibile</p>
                                @else
                                    <p>Non disponibile</p>
                                @endif
                            </div>
                            <div class="t4-card-buttons
                                d-flex justify-content-between">
                                {{-- MODIFICA PIATTO --}}

                                <a href="{{ route('admin.plates.edit', ['plate' => $plate->id]) }}"
                                    class="btn btn-warning">
                                    Modifica
                                </a>
                                {{-- ELIMINA PIATTO --}}

                                <form action="{{ route('admin.plates.destroy', ['plate' => $plate->id]) }}"
                                    class="d-inline-block" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        Elimina
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
