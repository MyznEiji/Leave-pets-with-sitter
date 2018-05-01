<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::Auth();
Route::get('/', 'PagesController@index');
Route::resource('pages', 'PagesController', ['only' => ['index'] ]);
Route::resource('users', 'UsersController');

Route::resource('listings', 'ListingsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit'] ]);
Route::get('/listings/{listing_id}/basics', 'ListingsController@basics');
Route::get('/listings/{listing_id}/description', 'ListingsController@description');
Route::get('/listings/{listing_id}/address', 'ListingsController@address');
Route::get('/listings/{listing_id}/price', 'ListingsController@price');
Route::get('/listings/{listing_id}/photos', 'ListingsController@photos');
Route::get('/listings/{listing_id}/calendar', 'ListingsController@calendar');
Route::get('/listings/{listing_id}/bankaccount', 'ListingsController@bankaccount');
Route::get('/listings/{listing_id}/publish', 'ListingsController@publish');

Route::patch('/listings/{listing_id}/description_update', 'ListingsController@description_update');
Route::patch('/listings/{listing_id}/price_update', 'ListingsController@price_update');
Route::patch('/listings/{listing_id}/address_update', 'ListingsController@address_update');
Route::patch('/listings/{listing_id}/publish_update', 'ListingsController@publish_update');
Route::post('/listings/{listing_id}/photos_update', 'PhotosController@photos_update');

Route::resource('listings.reservations', 'ReservationsController', ['only' => 'store']);

Route::get('/home', 'HomeController@index');
