<?php

namespace App\Http\Controllers\Api;

use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    // Funzione per la request del form Payment e la popolazione della tabella Order e Pivot
    public function payment(Request $request){
        $data = $request->all();
        $request->validate([
            'total' => 'required',
            'customer_address' => 'required|max:255',
            'customer_name' => 'required|max:30',
            'customer_surname' => 'required|max:30',
            'customer_phone' =>  'required',
            'special_request' => 'nullable',
            'payment_approval' => 'required',
            'restaurant_id' => 'required',
            'customer_email' => 'required|max:255',
            'restaurant_email' => 'required|max:255',
            'plates' => 'required',
        ],[
            'customer_name.required'=>'inserisci il nome',
            'customer_name.max'=>'il nome può essere al massimo di 30 caratteri',
            'customer_surname.required'=>'inserisci il cognome',
            'customer_surname.max'=>'il cognome può essere al massimo di 30 caratteri',
            'customer_address.required'=>'inserisci un indirizzo',
            'customer_address.max'=>'l\'indirizzo può essere al massimo di 255 caratteri',
            'customer_address.required'=>'inserisci una email valida',
            'customer_address.max'=>'l\'email può essere al massimo di 255 caratteri',
            'customer_phone'=>'inserisci un numero valido',
        ]);

        $newOrder = new Order();
        $newOrder->payment = 'Carta';
        $newOrder->fill($data);

        $newOrder->save();

        $plate_id= [];
        $plate_quantity = [];
        foreach($data['plates'] as $plate){
            $plate_id[] = $plate['id'];
            $plate_quantity[] = $plate['quantity'];
        }

        $sync_data = [];
        for($i = 0; $i < count($plate_id); $i++)
            $sync_data[$plate_id[$i]] = ['quantity' => $plate_quantity[$i]];

        $newOrder->plates()->sync($sync_data);

    }

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
