@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center t4-h80vh">
            {{-- Title --}}
            <div class="row">
                <div class="col text-white text-center t4-title-create">
                    <h2>Aggiungi nuovo prodotto</h2>
                    <h4>Qui potrai aggiungere tanti nuovi prodotti da aggiungere al tuo menù</h4>
                </div>
            </div>
            {{-- jumbo-create --}}
            <div class="col-xxl-6 col-xl-6 col-md-5">
                <img class="t4-jumbo-create" src="/images/jumbo-create.jpeg" alt="">
            </div>

            {{-- Form --}}
            <div class="col-xxl-6 col-xl-4 col-md-5 mt-5">
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
                        <input type="number" step="any" class="form-control @error('price') is-invalid @enderror"
                            id="name" placeholder="Prezzo" name='price' value='{{ old('price') }}'>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">

                        <label for="visible" class="form-label">Disponibile</label>
                        <input class="radio" type="radio" value="1" name='visible' checked />
                        <label for="visible" class="form-label">Non diponibile</label>
                        <input class="radio" type="radio" value="0" name='visible' />

                    </div>
                    <div class="mb-3 t4-input-img">
                        <label for="cover" class="form-label">Image</label>
                        <input type="file" name='cover' />
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn t4-add-btn d-flex align-items-center">
                            <span>Aggiungi</span>
                            <img src="/images/plus.png" alt="">
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
