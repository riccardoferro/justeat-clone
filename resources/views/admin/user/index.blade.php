@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h2>Benvenuto {{ $user->name }}!</h2>
                <h4>In questa sezione potrai visualizzare e modificare i tuoi dati</h4>
            </div>
        </div>
        <div class="row mt-5 justify-content-around">

            {{-- Immagine profilo --}}
            <div class="col-xl-2 col-md-4 col-sm-10 m-auto ">
                <form action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    @method('PUT')
                    <div class="mb-3 d-flex flex-column align-items-center justify-content-around">

                        <label class='t4-label-coverUser' for="coverUser" style="cursor: pointer">
                            <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}">
                        </label>


                        <label for="coverUser" class="form-label"><input id='coverUser' type="file"
                                name='coverUser' /></label>



                        @error('coverUser')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror


                        <div class="form-group">
                            <button type="submit" class="btn t4-add-btn d-flex align-items-center me-3">
                                <img src="/images/upload.png" alt="">
                                <span class="me-2 ms-2">Cambia</span>
                                <img src="/images/upload.png" alt="">
                            </button>
                        </div>

                    </div>
                </form>
                {{-- /fine form immagine --}}


            </div>

            {{-- Dati Utenti --}}

            <div class="col-xl-4 col-md-7 col-sm-10 m-auto d-flex flex-column align-items-start t4-dataUser">

                <h2>I tuoi Dati</h2>
                <label for="">Nome azienda</label>
                <p>{{ $user->company }}</p>
                <label for="">E-mail</label>
                <p>{{ $user->email }}</p>
                <label for="">Indirizzo</label>
                <p>{{ $user->address }}</p>
                <label for="">Partita IVA</label>
                <p>{{ $user->partita_iva }}</p>

            </div>


        </div>



        <div class="row text-center">
            <h1>Le tue Categorie</h1>
        </div>

        {{-- Sezione Categorie --}}
        @if (count($user->categories))
            <div class="row justify-content-center mt-3 ">
                @foreach ($user->categories as $category)
                    <div class="col-auto d-flex flex-column align-items-center t4-card-categories">
                        <span>{{ $category->name }}</span>
                        <img src="{{ asset('storage/images/category_img/' . $category->image) }}"
                            alt="{{ $category->name }}" style="width:150px">
                    </div>
                @endforeach
            </div>



            <div class="d-flex t4-w100 justify-content-center mt-5">

                <button class="btn t4-add-btn d-flex align-items-center me-3"
                    href="{{ route('admin.categories.edit', $user->id) }}">Modifica
                    le tue categorie</button>

            </div>
        @else
            <p>Al momento non possiedi alcuna categoria</p>
            <a class="btn t4-add-btn d-flex align-items-center me-3"
                href="{{ route('admin.categories.create', $user->id) }}">Aggiungi categoria</a>
        @endif
    </div>


    {{-- Da inserire una crud per la modifica delle categorie dei Ristoranti --}}

@endsection
