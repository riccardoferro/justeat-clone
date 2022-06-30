@extends('layouts.app')

@section('content')
    <div class="container-fluid align-items-center">
        <div class="row mt-5 mb-5">
            <div class="col-12 text-center">
                <h2>Categorie
                    <span class="t4-category-icon">
                        <img src="/images/pizza.png" alt="pizza-icon">
                    </span>
                    <span class="t4-category-icon">
                        <img src="/images/burger.png" alt="burger-icon">
                    </span>
                    <span class="t4-category-icon">
                        <img src="/images/boba.png" alt="drink-icon">
                    </span>
                </h2>
                <h4>Seleziona una o più categorie tra Pizza, Fast Food e tante altre!</h4>
            </div>
        </div>


        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group d-flex align-items-center">
                <div class="row justify-content-center mt-5 ">
                    @foreach ($categories as $category)
                        {{-- name is an array --}}
                        <div class="col-auto d-flex flex-column t4-card-categories">
                            <div class="d-flex ms-2">
                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}"
                                    name="categories[]"
                                    {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }} />
                                <div class="form-check-label ms-2"> {{ $category->name }} </div>
                            </div>

                            <img class="t4-img-categories"
                                src="{{ asset('storage/images/category_img/' . $category->image) }}"
                                alt="{{ $category->name }}" style="width:150px">
                        </div>
                    @endforeach

                    @error('categories[]')
                        <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                    <div class="form-group d-flex justify-content-center mt-5">
                        <button type="submit" class="btn t4-add-btn">
                            Aggiungi le tue categorie
                            <span>
                                <img src="/images/plus.png" alt="">
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
