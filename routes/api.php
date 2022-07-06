<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', 'Api\UserController@index')->name('index');
Route::get('/users/{slug}', 'Api\UserController@show')->name('users.show');

Route::get('/categories', 'Api\CategoryController@index')->name('index');

Route::get('/category/', 'Api\CategoryController@show')->name('show');

// Inserite rotte per generare token e fare il pagamento
Route::get( "/orders/generate" , "Api\OrderController@generate" );
Route::post( "/orders/make/payment" , "Api\OrderController@makepayment" );
