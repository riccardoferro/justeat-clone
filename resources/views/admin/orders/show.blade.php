@extends('layouts.app')

@section('navcategory')
    <a href="{{ route('admin.user.index') }}" class="btn t4-add-btn d-flex align-items-center">
        <span class="me-2">Torna al Profilo </span>
        <img src="/images/replay.png" alt="">
    </a>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <h3>Ordine Nr: <span class='t4-orange-text'></span>{{ $order->id }}</h3>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row flex-wrap ">

            <div class="col-xl-6 col-md-12 col-sm-12 t4-border-right">
                <div class="row flex-column">
                    <div class="8">
                        <p><span class='t4-orange-text'>Nome: </span><span>{{ $order->name }}</span></p>
                    </div>
                    <div class="8">
                        <p><span class='t4-orange-text'>Cognome: </span><span>{{ $order->surname }}</span></p>
                    </div>
                    <div class="8">
                        <p><span class='t4-orange-text'>E-email: </span><span>{{ $order->email }}</span></p>
                    </div>
                    <div class="8">
                        <p><span class='t4-orange-text'>Indirizzo: </span><span>{{ $order->address }}</span></p>
                    </div>
                    <div class="8">
                        <p><span class='t4-orange-text'>Telefono: </span><span>{{ $order->phone }}</span></p>
                    </div>
                    <div class="8">
                        <p><span class='t4-orange-text'>Totale Ordine: </span><span>{{ $order->total }} &euro;</span></p>
                    </div>
                    <div class="8">
                        <span><span class='t4-orange-text'>Stato:</span>
                            @if ($order->status == 0)
                                <span>Pagamento ricevuto</span>
                            @else
                                <span>Pagamento negato</span>
                            @endif
                    </div>

                </div>
            </div>

            <div class="col-xl-6 col-md-12 col-sm-12 mt-xl-0 mt-md-5 mt-sm-5 mt-5">
                <div class="row">
                    @foreach ($order->plates as $plate)
                        <div class="col-12 d-flex align-items-center mb-2 justify-content-between t4-border-bottom">
                            <div class="t4-w20">
                                <img class="t4-w100" src="{{ asset('/storage/' . $plate->image) }}" alt="">
                            </div>
                            <div class="t4-w30">{{ $plate->name }}</div>
                            <div class="t4-w15">Qnt: {{ $plate->pivot->quantity }}<span class="t4-orange-text"> x </span>
                            </div>
                            <div class="t4-w15">{{ $plate->price }} &euro;</div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="{{ route('admin.order.index') }}" class="btn t4-add-btn d-flex align-items-center">
                    <span class="me-2">Torna agli ordini </span>
                    <img src="/images/replay.png" alt="">
                </a>
            </div>
        </div>
    </div>

@endsection
