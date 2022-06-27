<p>Benvenuto {{ $user->name }}</p>
<h1>I tuoi Dati</h1>
<p>{{ $user->email }}</p>
<p>{{ $user->company }}</p>
<p>{{ $user->address }}</p>
<p>{{ $user->partita_iva }}</p>
<p>{{ $user->image }}</p>
<h1>Le tue Categorie</h1>
@foreach ($user->categories as $category)
    <p>{{ $category->name }}</p>
    <img src="{{ $category->image }}" alt="{{ $category->name }}">
@endforeach

{{-- Da inserire una crud per la modifica delle categorie dei Ristoranti --}}
