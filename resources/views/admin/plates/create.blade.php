@extends('layouts.app')

@section('navcategory')
    <a href="{{ route('admin.user.index') }}" class="btn t4-add-btn d-flex align-items-center">
        <span class="me-2">Torna al Profilo </span>
        <img src="/images/replay.png" alt="">
    </a>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center t4-h80vh">
            {{-- Title --}}
            <div class="row">
                <div class="col text-white text-center t4-title-create mb-md-3 mb-2">
                    <h2>Aggiungi nuovo prodotto</h2>
                    <h4>Qui potrai aggiungere tanti nuovi prodotti da aggiungere al tuo menù</h4>
                </div>
            </div>
            {{-- jumbo-create --}}
            <div class="col-xxl-6 col-xl-6 col-md-6">
                <img class="t4-jumbo-create" src="/images/jumbo-create.jpeg" alt="">
            </div>

            {{-- Form --}}
            <div class="col-xxl-4 col-xl-4 col-md-5 mt-5">
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
                        <div class="d-flex justify-content-start align-items-center">

                            <div id="decrement"><img src="/images/minus.png" alt=""></div>
                            <input type="number" step="any"
                                class="form-control mb-0 @error('price') is-invalid @enderror" id="price-input"
                                placeholder="Prezzo" name='price' value='{{ old('price') }}'>
                            <div id="increment"><img src="/images/plus.png" alt=""></div>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">

                        <label for="visible" class="form-label">Disponibile</label>
                        <input class="radio" type="radio" value="1" name='visible' checked />
                        <label for="visible" class="form-label">Non diponibile</label>
                        <input class="radio" type="radio" value="0" name='visible' />

                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label t4-photo-label">
                            Seleziona Foto <img src="/images/upload.png" alt="">
                            <input class="t4-input-img" type="file" name='cover' id="cover" />
                        </label>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn t4-add-btn d-flex align-items-center me-3">
                            <span class="me-2">Modifica </span>
                            <img src="/images/edit-document.png" alt="">
                        </button>
                        <a href="{{ route('admin.plates.index') }}" class="btn t4-add-btn d-flex align-items-center">
                            <span class="me-2">Indietro </span>
                            <img src="/images/replay.png" alt="">
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
