<p>Qui avrò tutti i piatti</p>
@if ($plates)
    @foreach ($plates as $plate)
        <p>{{ $plate->name }}</p>
        <p>{{ $plate->price }} &euro;</p>
        <p>{{ $plate->description }}</p>
        @if ($plate->visible == 1)
            <p>Disponibile</p>
        @else
            <p>Non disponibile</p>
        @endif
        <img src="{{ asset('storage/' . $plate->image) }}" alt="{{ $plate->name }}">

        {{-- MODIFICA PIATTO --}}

        <a href="{{ route('admin.plates.edit', ['plate' => $plate->id]) }}" class="btn btn-warning">

            Modifica

        </a>
    @endforeach
    {{-- @dd($plates) --}}
    <a href="{{ route('admin.plates.create') }}">Aggiungi Piatto al menù</a>
@else
    <p>Non hai nessun contenuto</p>
    <a href="{{ route('admin.plates.create') }}">Aggiungi Piatto al menù</a>
@endif
