<h1>Sezione Inserisci Immagine</h1>

<form action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype='multipart/form-data'>
    @csrf
    @method('PUT')
    <div class="mb-3">
        <div class="pb-5">
            <img src="{{ asset('storage/images/' . $user->image) }}" alt="{{ $user->image }}">
        </div>


        <label for="cover" class="form-label">Image</label>
        <input type="file" name='cover' />


        @error('cover')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <button type="submit" class="btn btn-success">
                Clicca per la Modifica
            </button>
        </div>

    </div>
</form>
