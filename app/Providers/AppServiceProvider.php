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
                    
                'environment' => 'sandbox',
                'merchantId' => 'y99kh8q843d6mswp',
                'publicKey' => 'nmm7hgzn88kkgbq7',
                'privateKey' => '23b12246c7b7a34f67a2779b66ffd3c0'
                
                ]
            );
        });

    }
}
