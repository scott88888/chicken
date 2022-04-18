<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/index', "orderController@index");
// Route::post("/index", "orderController@index");
// Route::get('/orderMenu', "orderController@orderMenu");
// Route::post('/orderMenu', 'orderController@orderMenu');
// Route::get('/orderRequest', 'orderController@orderRequest');


// Route::resource('lineLogin', 'lineController'); 
// Route::get('/lineLogin', "lineController@lineLogin");
// Route::get('/lineLogin', 'App\Http\Controllers\lineController@lineLogin');
// Route::post('/lineLogin', 'App\Http\Controllers\lineController@lineLogin');
// Route::get('/callback', 'App\Http\Controllers\lineController@callback');
// Route::post('/callback', 'App\Http\Controllers\lineController@callback');
// Route::post('/lineLogin', 'lineController@lineLogin');
// Route::get('/lineLogin', 'lineController@lineLogin');
// Route::post('/callback', 'lineController@callback');
Route::get('/index', 'App\Http\Controllers\LoginController@pageLine');
Route::get('/login', 'App\Http\Controllers\LoginController@lineLoginCallBack');
Route::get('/', 'App\Http\Controllers\LoginController@pageLine');
Route::get('/useAwards', 'App\Http\Controllers\LoginController@useAwards');
Route::post('/useAwards', 'App\Http\Controllers\LoginController@useAwards');
Route::get('/entryOrder', 'App\Http\Controllers\LoginController@entryOrder');
Route::get('/searchOrder', 'App\Http\Controllers\LoginController@searchOrder');

Route::get('/test', 'App\Http\Controllers\LoginController@test');
Route::get('/gagu', 'App\Http\Controllers\LoginController@gagu');
Route::post('/gagu', 'App\Http\Controllers\LoginController@gagu');
Route::post('/gaguList', 'App\Http\Controllers\LoginController@gaguList');

Route::get('/lotteryBox', 'App\Http\Controllers\LoginController@lotteryBox');
Route::post('/lotteryBox', 'App\Http\Controllers\LoginController@lotteryBox');

Route::get('/t2', function () {
    return view('t2');
});

