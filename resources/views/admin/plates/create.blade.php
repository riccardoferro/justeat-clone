@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            {{-- Form --}}
            <form action="{{ route('admin.plates.store') }}" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="mb-3">

                    <label for="name" class="form-label">Nome Piatto</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Nome piatto" name='name' value='{{ old('name') }}'>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="name"
                        placeholder="Descrizione" name='description' value='{{ old('description') }}'>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" step="0.5" class="form-control @error('price') is-invalid @enderror"
                        id="name" placeholder="Prezzo" name='price' value='{{ old('price') }}'>
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="visible" class="form-label">Disponibile</label>
                    <input type="boolean" class="form-control @error('price') is-invalid @enderror" id="name"
                        placeholder="Disponibile" name='visible' value='{{ old('visible') }}'>
                    @error('visible')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="image" class="form-label">Image</label>
                    <input type="file" name='image' />
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </div>
            </form>
        </div>
    </div>
@endsection
