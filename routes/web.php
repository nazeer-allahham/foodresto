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
    $meals = App\Meal::all();
    $offers = App\Offer::all();
    return view('client.index', compact('meals', 'offers'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/orders/clear', 'OrderController@clear');
Route::post('/orders/save', 'OrderController@save');
Route::post('/orders/update', 'OrderController@update');

Route::get('/admin', 'AdminsController@index');

Route::get('/meals/create', 'MealController@create');
Route::post('/meals/store', 'MealController@store');

Route::get('/offers/create', 'OfferController@create');
Route::post('/offers/store', 'OfferController@store');