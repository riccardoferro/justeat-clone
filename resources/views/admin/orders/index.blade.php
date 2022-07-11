@extends('layouts.app')

@section('navcategory')
    <a href="{{ route('admin.user.index') }}" class="btn t4-add-btn d-flex align-items-center">
        <span class="me-2">Torna al Profilo </span>
        <img src="/images/replay.png" alt="">
    </a>
@endsection

@section('content')
    <div class="conatainer-fluid">
        <div class="row justify-content-center">
            <h1 class="col-10 m-auto text-center mb-5">Ordini</h1>
        </div>
    </div>
    <div class="container">
        @foreach ($orders as $order)
            <a href='{{ route('admin.order.show', $order->id) }}' class="row t4-orders-index justify-content-between">
                <div class="col-2">
                    <span><span class='t4-orange-text'>Ordine:</span>
                        {{ $order->id }}</span>
                </div>
                <div class="col-4">
                    <span><span class='t4-orange-text'>Nome:</span> {{ $order->name }} {{ $order->surname }}</span>
                </div>
                <div class="col-2">
                    <span><span class='t4-orange-text'>Data:</span> {{ $order->created_at }}</span>
                </div>
                <div class="col-2">
                    <span><span class='t4-orange-text'>Totale:</span> {{ $order->total }} &euro;</span>
                </div>


            </a>
        @endforeach
    </div>
    {{-- <h1>Benvenuto nella sezione Ordini</h1>
    <p>{{ $orders }}</p>
    @foreach ($orders as $order)
        <p>{{ $order->name }}</p>
        @foreach ($order->plates as $plate)
            <p>{{ $plate->name }}</p>
            <p>{{ $plate->pivot->quantity }}</p>
        @endforeach
    @endforeach --}}
@endsection
