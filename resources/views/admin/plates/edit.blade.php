@extends('layouts.app')

@section('navcategory')
    <a href="{{ route('admin.user.index') }}" class="btn t4-add-btn d-flex align-items-center">
        <span class="me-2">Torna al Profilo </span>
        <img src="/images/replay.png" alt="">
    </a>
@endsection

@section('content')
    <div class="container-fluid ">
        <div class="row justify-content-center">
            {{-- Title --}}
            <div class="row">
                <div class="col text-white text-center t4-title-create mb-md-3 mb-2">
                    <h2>Modifica prodotto</h2>
                    <h4>Qui potrai modificare il tuo prodotto presente sul menù</h4>
                </div>
            </div>

            {{-- Form --}}
            <div
                class="col-xxl-4 col-xl-4 col-md-5 mt-5 order-xx-1 order-xl-1 order-md-1 order-sm-2 order-2 position-relative">
                <form action="{{ route('admin.plates.update', $plate->id) }}" method="POST"
                    enctype='multipart/form-data'>
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nome Piatto*</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Nome piatto" name='name' value="{{ old('name', $plate->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">

                        <label for="description" class="form-label">Descrizione*</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="name"
                            placeholder="Descrizione" name='description'
                            value="{{ old('description', $plate->description) }}" required>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label id='test' for="price" class="form-label">Prezzo*</label>
                        <div class="d-flex justify-content-start align-items-center">

                            <div id="decrement"><img src="/images/minus.png" alt=""></div>
                            <input type="number" step="any" min='0'
                                class="form-control mb-0  @error('price') is-invalid @enderror" id="price-input"
                                placeholder="Prezzo" name='price' value="{{ old('price', $plate->price) }}" required>
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
                        {{-- <label for="cover" class="form-label">Image</label>
                    <input type="file" name='cover' />
                    <img src="{{ asset('storage/' . $plate->image) }}" alt=""> --}}

                        <label for="cover" class="form-label t4-photo-label">
                            Seleziona Foto <img src="/images/upload.png" alt="">
                            <input style='display:none' class="t4-input-img" type="file" name='cover' id="cover" />
                        </label>


                        @error('cover')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn t4-add-btn d-flex align-items-center ">
                            <span class="me-2">Modifica </span>
                            <img src="/images/edit-document.png" alt="">
                        </button>

                        <div id='t4-delete-span' class="btn t4-add-btn d-flex align-items-center"> <span
                                class="me-2">Elimina</span>
                            <img src="/images/cross.png" alt="">
                        </div>

                        <a href="{{ route('admin.plates.index') }}" class="btn t4-add-btn d-flex align-items-center">
                            <span class="me-2">Indietro </span>
                            <img src="/images/replay.png" alt="">
                        </a>




                </form>
                {{-- delete --}}
                <div id='t4-delete-form'>
                    <div class="container-fluid">
                        <div class="row flex-column align-items-center justify-content-center text-center">
                            <div class="col-6">
                                <h1>Sei sicuro?</h1>
                            </div>


                            <div class="col-8 d-flex justify-content-around align-items-center mt-4">


                                <form action="{{ route('admin.plates.destroy', ['plate' => $plate->id]) }}"
                                    class="d-inline-block" method="POST">

                                    @csrf
                                    @method('DELETE')



                                    <button type='submit'>
                                        <img src="/images/delete.png" alt="">
                                    </button>
                                    <div id='t4-cancel-delete'>

                                        <img src="/images/cross.png" alt="">

                                    </div>
                                </form>





                            </div>
                        </div>

                    </div>
                </div>












            </div>

            {{-- fine delete --}}


        </div>
        {{-- jumbo-edit --}}

        <div class="col-xxl-4 col-xl-4 col-md-6 mt-5 order-xxl-2 order-xl-2 order-md-2 order-sm-1 order-1">
            <label for="cover" style="cursor: pointer">
                <img class="t4-jumbo-create" src="{{ asset('storage/' . $plate->image) }}"
                    alt="{{ $plate->name }}">
            </label>
        </div>

    </div>
    </div>
@endsection
