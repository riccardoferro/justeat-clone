<h1>Modifica le tue categorie</h1>
{{-- Visualizzazione delle categorie presenti --}}
<h2>Le tue categorie</h2>
@foreach ($user->categories as $category)
    <p>{{ $category->name }}</p>
    <img src="{{ $category->image }}" alt="{{ $category->name }}">
@endforeach

{{-- Qui ci sarà un form per modificare --}}
<h2>Tutte le categorie</h2>
@foreach ($allCategories as $all)
    <p>{{ $all->name }}</p>
    <img src="{{ $all->image }}" alt="{{ $all->name }}">
@endforeach
