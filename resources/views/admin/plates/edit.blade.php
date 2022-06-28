@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            {{-- Title --}}
            <div class="row">
                <div class="col text-white text-center t4-title-create mb-md-3 mb-2">
                    <h2>Modifica prodotto</h2>
                    <h4>Qui potrai modificare il tuo prodotto presente sul menù</h4>
                </div>
            </div>

            {{-- Form --}}
            <div class="col-xxl-4 col-xl-4 col-md-5 mt-5">
                <form action="{{ route('admin.plates.update', $plate->id) }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nome Piatto</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Nome piatto" name='name' value="{{ old('name', $plate->name) }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">

                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="name"
                            placeholder="Descrizione" name='description'
                            value="{{ old('description', $plate->description) }}">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">

                        <label for="price" class="form-label">Prezzo</label>

                        <input type="number" step="any" class="form-control @error('price') is-invalid @enderror"
                            id="price-input" placeholder="Prezzo" name='price'
                            value="{{ old('price', $plate->price) }}">

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
                    <div class="mb-3">
                        {{-- <label for="cover" class="form-label">Image</label>
                    <input type="file" name='cover' />
                    <img src="{{ asset('storage/' . $plate->image) }}" alt=""> --}}

                        <label for="cover" class="form-label t4-photo-label">
                            Seleziona Foto <img src="/images/upload.png" alt="">
                            <input class="t4-input-img" type="file" name='cover' id="cover" />
                        </label>


                        @error('cover')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn t4-add-btn d-flex align-items-center">
                            <span class="me-2">Modifica </span>
                            <img src="/images/edit-document.png" alt="">
                        </button>
                    </div>
                </form>
            </div>
            {{-- jumbo-edit --}}

            <div class="col-xxl-4 col-xl-4 col-md-6 mt-5">
                <label for="cover" style="cursor: pointer">
                    <img class="t4-jumbo-create" src="{{ asset('storage/' . $plate->image) }}" alt="{{ $plate->name }}">
                </label>
            </div>




        </div>
    </div>
@endsection
