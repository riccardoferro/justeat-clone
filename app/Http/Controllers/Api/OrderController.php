<?php

namespace App\Http\Controllers\Api;

use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
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
    public function makePayment(OrderRequest $request,Gateway $gateway){

        // nella funzione sale andranno i dati dell'ordine 
        // per ora stiamo inserendo a mano 
        $result = $gateway->transaction()->sale([

                'amount' => $request->amount,
                'paymentMethodNonce' => $request->token,
                'options' => [
                    'submitForSettlement' => true,
                ]
        ]);


        // Transazione del controllo per vedere se e' riuscita o meno
        if ($result->success){
            $data = [
                'success' => true,
                'message' => "Transazione eseguita con Successo!"
            ];

            return response()->json($data,200);
        }else {
            $data = [
                'success' => false,
                'message' => "Transazione fallita!"
            ];

            return response()->json($data,401);
        }
        
        
        // return 'make payment';
    }


}
