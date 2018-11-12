<?php

use Illuminate\Http\Request;

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

//List Products
Route::get('products', 'ProductController@index');

//List Single Product
Route::get('products/{id}', 'ProductController@show');

//Create a Product
Route::post('product', 'ProductController@store');

//Update a Product
Route::put('product', 'ProductController@store');

//Delete a Product
Route::delete('product/{id}', 'ProductController@destroy');