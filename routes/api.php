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
Route::post('login', 'Api\Auth\UserAuthController@login');
Route::post('register', 'Api\Auth\UserAuthController@register');

Route::get('products', 'Api\ProductController@index');
Route::get('products/{product}', 'Api\ProductController@show');

Route::middleware(['auth:sanctum', 'type.customer'])->group(function () {
    Route::post('reports', 'Api\ReportController@store');
    Route::get('reports', 'Api\ReportController@index');
});


