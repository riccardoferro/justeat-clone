<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // funzioni che verranno agganciate alle API quando chiamate
    //la generate sarebbe il servizio per generare il token
    public function generate(Request $request){
        return 'generate';
    }

    //la makepayment per effettuare il pagamento
    public function makePayment(Request $request){
        return 'make payment';
    }


}
