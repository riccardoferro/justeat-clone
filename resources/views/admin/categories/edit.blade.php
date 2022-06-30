@extends('layouts.app')

@section('content')
<div class="container-fluid">

            {{-- <h1>Modifica le tue categorie</h1> --}}
            {{-- Visualizzazione delle categorie presenti --}}
        <h3 class="text-center">Le tue categorie</h2>
        
        <div class="row">
                @foreach ($user->categories as $category)
                    <div class="col-auto text-center ">

                            <span class="d-block mb-3">
                                    {{ $category->name }}
                            </span>

                            <img src="{{ asset('storage/images/category_img/' . $category->image) }}" alt="{{ $category->name }}"
                                style="width:150px">
                    </div>
                @endforeach
        </div>

        <div class="row pt-5 mt-5 text-center pb-5 mb-5">
                {{-- Qui ci sarà un form per modificare --}}

                <div class="col-12">

                        <form action="{{ route('admin.categories.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            {{-- Token --}}
                            @csrf
                            @method('PUT')

                            <div class="form-group row text-center">

                                <div class="col-12 pt-5 ">
                                    <h3>Categorie BoolEat</h3>
                                </div>

                                    @foreach ($categories as $category)
                                        {{-- name is an array --}}
                                        {{-- RAGAZZI QUI ANDRANNO ANCHE LE IMMAGINI ($all->image) --}}
                                        <div class="col-2 col-auto align-items-centes justify-content-center pt-5">
                                                <input name="categories[]" class="form-check-input @error('categories') is-invalid @enderror "
                                                    type="checkbox" value="{{ $category->id }}"
                                                    {{ $user->categories->contains($category) ? 'checked' : '' }} />

                                                {{-- <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categories[]"
                                                                {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}
                                                        /> --}}

                                                {{-- Nome categoria --}}
                                                <div class="form-check-label"> {{ $category->name }} </div>
                                        </div>
                                    @endforeach

                                    {{-- Qui controlliamo se ci sono errori --}}
                                    @error('categories')
                                        <div class="invalid-feedback" style="color: red ; margin:20px;"> {{ $message }} </div>
                                    @enderror

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                    Clicca per la Modifica
                                </button>
                            </div>

                        </form>

                </div>
        </div>
</div>

@endsection
