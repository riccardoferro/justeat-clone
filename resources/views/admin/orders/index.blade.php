@extends('layouts.app')

@section('navcategory')
    <a href="{{ route('admin.user.index') }}" class="btn t4-add-btn d-flex align-items-center">
        <span class="me-2">Torna al Profilo </span>
        <img src="/images/replay.png" alt="">
    </a>
@endsection

@section('content')
    <h1>Benvenuto nella sezione Ordini</h1>
    <p>{{ $orders }}</p>
    @foreach ($orders as $order)
        <p>{{ $order->name }}</p>
        @foreach ($order->plates as $plate)
            <p>{{ $plate->name }}</p>
            <p>{{ $plate->pivot->quantity }}</p>
        @endforeach
    @endforeach
@endsection
