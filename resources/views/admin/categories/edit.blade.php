@extends('layouts.app')

@section('navcategory')
    <a href="{{ route('admin.user.index') }}" class="btn t4-add-btn d-flex align-items-center">
        <span class="me-2">Torna al Profilo </span>
        <img src="/images/replay.png" alt="">
    </a>
@endsection

@section('content')
    <div class="container-fluid">

            {{-- <h1>Modifica le tue categorie</h1> --}}
            {{-- Visualizzazione delle categorie presenti --}}
            <h3 class="text-center mb-5 pb-3">Le tue categorie</h2>

            <div class="row
            t4-bg-orange
            justify-content-center">
                @foreach ($user->categories as $category)
                    <div class=" col-auto
                    mb-5
                    d-flex
                    flex-column
                    align-items-center
                    t4-category-label
                    t4-card-hover">
                    
                        <span class="t4-title-category">
                            {{ $category->name }}
                        </span>

                        <img src="{{ asset('storage/images/category_img/' . $category->image) }}"
                            alt="{{ $category->name }}" style="width:150px; border-radius: 20px;">
                    </div>
                @endforeach
            </div>


            <form action="{{ route('admin.categories.update', $user->id) }}" 
                method="POST" enctype="multipart/form-data" 
                class="row pt-5 mt-5 text-center pb-5 mb-5 justify-content-center flex-column align-items-center"
            >

                {{-- Token --}}
                @csrf
                @method('PUT')

                <h3 class="col-auto">Categorie BoolEat</h3>
                
                {{-- Qui controlliamo se ci sono errori e li mostrera' --}}
                @if ($errors->any())
                        <div class="alert alert-danger col-auto">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif

                {{-- CATEGORIE --}}
                <div class="d-flex justify-content-center flex-wrap">
                    @foreach ($categories as $category)

                        <div class="col-auto d-flex flex-column align-items-center m-2">

                            <input 
                                {{-- name is an array --}}
                                name="categories[]"
                                class="form-check-input @error('categories') is-invalid @enderror m-2 " 
                                type="checkbox"
                                id= "{{$category->id}}"
                                value="{{ $category->id }}"
                                {{ $user->categories->contains($category) ? 'checked' : '' }} 
                            />


                            {{-- Nome categoria --}}
                            <label class="btn t4-add-btn" for="categorie[] "> {{ $category->name }} </label>

                        </div>
                    @endforeach


                    @error('categories')
                        <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror

                </div>

                
                <button type="submit" class="btn col-auto t4-add-btn mt-5 ">
                    Clicca per la Modifica
                </button>

            </form>

    </div>
@endsection
