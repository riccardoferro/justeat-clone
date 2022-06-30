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
            <h3 class="text-center">Le tue categorie</h2>

            <div class="row">
                @foreach ($user->categories as $category)
                    <div class="col-auto text-center ">

                        <span class="d-block mb-3">
                            {{ $category->name }}
                        </span>

                        <img src="{{ asset('storage/images/category_img/' . $category->image) }}"
                            alt="{{ $category->name }}" style="width:150px">
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
                <div class="form-group col-6 d-flex text-center justify-content-around flex-wrap">
                    @foreach ($categories as $category)

                        <div class="col-auto  justify-content-center pt-5">
                            <input 
                                {{-- name is an array --}}
                                name="categories[]"
                                class="form-check-input @error('categories') is-invalid @enderror " 
                                type="checkbox"
                                value="{{ $category->id }}"
                                {{ $user->categories->contains($category) ? 'checked' : '' }} 
                            />


                            {{-- Nome categoria --}}
                            <div class="form-check-label"> {{ $category->name }} </div>
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
