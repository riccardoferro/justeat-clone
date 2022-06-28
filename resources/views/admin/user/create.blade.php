<h1>Ecco tutte le categorie</h1>

<form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <div> Categories </div>
        @foreach ($categories as $category)
            {{-- name is an array --}}
            <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categories[]"
                {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }} />
            <div class="form-check-label"> {{ $category->name }} </div>
        @endforeach

        @error('categories[]')
            <div class="invalid-feedback"> {{ $message }} </div>
        @enderror
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">
            Aggiungi le tue categorie
        </button>
    </div>
</form>
