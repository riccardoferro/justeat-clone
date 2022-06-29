@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h2>Benvenuto {{ $user->name }}!</h2>
                <h4>In questa sezione potrai visualizzare e modificare i tuoi dati</h4>
            </div>
        </div>
        <h1>I tuoi Dati</h1>
        <p>{{ $user->email }}</p>
        <p>{{ $user->company }}</p>
        <p>{{ $user->address }}</p>
        <p>{{ $user->partita_iva }}</p>

        <form action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="mb-3">
                {{-- <div class="pb-5">
                    <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->image }}">
                </div> --}}
                <label for="coverUser" style="cursor: pointer">
                    <img class="t4-jumbo-create" src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}">
                </label>


                <label for="coverUser" class="form-label"><input id='coverUser' type="file"
                        name='coverUser' />Image</label>



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
        <div>
            <a href="{{ route('admin.user.edit', $user->id) }}">Inserisci una nuova Immagine Profilo</a>
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
