<p>Qui avrò tutti i piatti</p>
@if ($plates)
    @foreach ($plates as $plate)
        <p>{{ $plate->name }}</p>
        <p>{{ $plate->price }}</p>
        <p>{{ $plate->description }}</p>
        <p>{{ $plate->visible }}</p>
    @endforeach
@else
    <p>Non hai nessun contenuto</p>
    <a href="{{ route('admin.plates.create') }}">Aggiungi Piatto al menù</a>
@endif
