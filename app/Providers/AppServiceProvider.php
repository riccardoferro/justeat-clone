<?php

namespace App\Providers;


use Braintree\Gateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //inietteremo un service di modo da far funzionare BrainTree
        $this->app->singleton(Gateway::class, function($app){

            // come parametro passeremo la configurazione di BrainTree che abbiamo sul file ENV
            return new Gateway(
                [

                // Cancellate Mettere le proprie tramite file env
                // 'environment' => getenv('BT_ENVIRONMENT'),
                // 'merchantId' => getenv('BT_MERCHANT_ID'),
                // 'publicKey' => getenv('BT_PUBLIC_KEY'),
                // 'privateKey' => getenv('BT_PRIVATE_KEY')
                    "environment" => "sandbox",
                    "merchantId" => "r59zhcpbv3j9b4pd",
                    "publicKey" => "n6zxxssk5cfq8zqy",
                    "privateKey" => "15865aa9f38028430003d28a6c4e7ba4"

                ]
            );
        });

    }
}
