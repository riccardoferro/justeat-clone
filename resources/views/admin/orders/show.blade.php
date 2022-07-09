@extends('layouts.app')

@section('navcategory')
    <a href="{{ route('admin.user.index') }}" class="btn t4-add-btn d-flex align-items-center">
        <span class="me-2">Torna al Profilo </span>
        <img src="/images/replay.png" alt="">
    </a>
@endsection

@section('content')
    @foreach ($order as $elem)
        <p>{{ $elem->id }}</p>
    @endforeach
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                {{-- <h3>Ordine Nr: <span class='t4-orange-text'></span>{{ $order->order }}</h3> --}}
            </div>
        </div>
    </div>
@endsection
