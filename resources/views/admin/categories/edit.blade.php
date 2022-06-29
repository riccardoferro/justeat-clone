<h1>Modifica le tue categorie</h1>
{{-- Visualizzazione delle categorie presenti --}}
<h2>Le tue categorie</h2>
@foreach ($user->categories as $category)
    <p>{{ $category->name }}</p>
    <img src="{{ asset('storage/images/category_img/' . $category->image) }}" alt="{{ $category->name }}"
        style="width:150px">
@endforeach

{{-- Qui ci sarà un form per modificare --}}
<h2>Tutte le categorie</h2>
<form action="{{ route('admin.categories.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    {{-- Token --}}
    @csrf
    @method('PUT')

    <div class="form-group">

        <h3>Categorie BoolEat</h3>

        <div>
            @foreach ($categories as $category)
                {{-- name is an array --}}
                {{-- RAGAZZI QUI ANDRANNO ANCHE LE IMMAGINI ($all->image) --}}

                <input name="categories[]" class="form-check-input @error('categories') is-invalid @enderror "
                    type="checkbox" value="{{ $category->id }}"
                    {{ $user->categories->contains($category) ? 'checked' : '' }} />

                {{-- <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categories[]"
                                {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}
                        /> --}}

                {{-- Nome categoria --}}
                <div class="form-check-label"> {{ $category->name }} </div>
            @endforeach

            @error('categories')
                <div class="invalid-feedback" style="color: red ; margin:20px;"> {{ $message }} </div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">
                Clicca per la Modifica
            </button>
        </div>

    </div>
</form>
