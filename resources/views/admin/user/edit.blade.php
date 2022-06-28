<h1>Modifica le tue categorie</h1>
{{-- Visualizzazione delle categorie presenti --}}
<h2>Le tue categorie</h2>
@foreach ($user->categories as $category)
    <p>{{ $category->name }}</p>
    <img src="{{ $category->image }}" alt="{{ $category->name }}">
@endforeach

{{-- Qui ci sarà un form per modificare --}}
<h2>Tutte le categorie</h2>
<form action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    {{-- Token --}}
    @csrf
    @method('PUT')
    <div class="form-group">
        <h3>Categorie Booleat</h3>
        @foreach ($categories as $category)
            {{-- name is an array --}}
            {{-- RAGAZZI QUI ANDRANNO ANCHE LE IMMAGINI ($all->image) --}}
            <input class="form-check-input" type="checkbox" value="{{ $all->id }}" name="categories[]"
                {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }} />
            <div class="form-check-label"> {{ $category->name }} </div>
        @endforeach

        @error('categories[]')
            <div class="invalid-feedback"> {{ $message }} </div>
        @enderror

        <div class="form-group">
            <button type="submit" class="btn btn-success">
                Clicca per la Modifica
            </button>
        </div>
    </div>
</form>
