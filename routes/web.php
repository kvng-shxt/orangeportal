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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('blacklist', 'BlacklistController');

Route::resource('charging', 'ChargingController');
Route::post('getcharging', 'ChargingController@viewCharging')->name('viewCharging');

Route::resource('keyword', 'KeywordController');

Route::resource('message', 'MessageController');

Route::resource('partner', 'PartnerController');

Route::resource('subscription', 'SubscriptionController');

