@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h2>Benvenuto {{ $user->name }}!</h2>
                <h4>In questa sezione potrai visualizzare e modificare i tuoi dati</h4>
            </div>
        </div>
        <div class="row">

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
                                <span class="me-2">Cambia Foto Profilo </span>
                                <img src="/images/upload.png" alt="">
                            </button>
                        </div>

                    </div>
                </form>
                {{-- /fine form immagine --}}


            </div>

            {{-- Dati Utenti --}}
            <div class="col-xl-6 col-md-7 col-sm-10 m-auto">
                <h1>I tuoi Dati</h1>
                <p>{{ $user->email }}</p>
                <p>{{ $user->company }}</p>
                <p>{{ $user->address }}</p>
                <p>{{ $user->partita_iva }}</p>
            </div>


        </div>




        <h1>Le tue Categorie</h1>

        @if (count($user->categories))
            @foreach ($user->categories as $category)
                <p>{{ $category->name }}</p>
                <img src="{{ asset('storage/images/category_img/' . $category->image) }}" alt="{{ $category->name }}"
                    style="width:150px">
            @endforeach
            <a href="{{ route('admin.categories.edit', $user->id) }}">Modifica le tue categorie</a>
        @else
            <p>Al momento non possiedi alcuna categoria</p>
            <a href="{{ route('admin.categories.create', $user->id) }}">Aggiungi categoria</a>
        @endif
    </div>


    {{-- Da inserire una crud per la modifica delle categorie dei Ristoranti --}}

@endsection
