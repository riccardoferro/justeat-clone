<p>Benvenuto {{ $user->name }}</p>
<h1>I tuoi Dati</h1>
<p>{{ $user->email }}</p>
<p>{{ $user->company }}</p>
<p>{{ $user->address }}</p>
<p>{{ $user->partita_iva }}</p>

<img src="{{ asset('storage/' . $user->image) }}" alt="image-company" style="width:150px">
<div>
    <a href="{{ route('admin.user.edit', $user->id) }}">Inserisci una nuova Immagine Profilo</a>
</div>


<h1>Le tue Categorie</h1>

@if (count($user->categories))
    @foreach ($user->categories as $category)
        <p>{{ $category->name }}</p>
        <img src="{{ asset('storage/images/category_img/' . $category->image) }}" alt="{{ $category->name }}"
            style="width:150px">
    @endforeach
    <a href="{{ route('admin.categories.edit', $user->id) }}">Modifica le tue categorie</a>
@else
    <p>Al momento non possiedi alcuna categoria</p>
    <a href="{{ route('admin.categories.create', $user->id) }}">Aggiungi categoria</a>
@endif

{{-- Da inserire una crud per la modifica delle categorie dei Ristoranti --}}
