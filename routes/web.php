<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/phpinfo', function () {
    phpinfo();
});
//支付
Route::get('client/goods','Client\ClientController@goods');
Route::get('client/good','Client\ClientController@good');
Route::get('client/rsa','Client\ClientController@rsa');
Route::get('client/sign','Client\ClientController@sign');
Route::get('client/sign2','Client\ClientController@sign2');
Route::get('check','Client\ClientController@check');



Route::get('client/curl','Client\ClientController@curl');

