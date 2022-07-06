<?php

namespace App\Http\Controllers\Api;

use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    // funzioni che verranno agganciate alle API quando chiamate
    //la generate sarebbe il servizio per generare il token
    public function generate(Request $request,Gateway $gateway){

        // generiamo il nostro token

        $token = $gateway->clientToken()->generate();

        $data = [
            'success' => true,
            'token' => $token
        ];

        return response()->json($data,200);
    }

    //la makepayment per effettuare il pagamento
    public function makePayment(Request $request,Gateway $gateway){
        return 'make payment';
    }


}
