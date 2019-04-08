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

Route::get('/addItem',  'PagesController@addItem');

Route::post('/addItem', 'PagesController@store');

Route::get('/shop',  'PagesController@index');

Route::get('/shop/dog',  'PagesController@indexDog');

Route::get('/shop/cat',  'PagesController@indexCat');

Route::patch('/shop/{id}', 'PagesController@update');

Route::get('/cart',  'PagesController@indexCart');
Route::patch('/cart/{id}', 'PagesController@updateCart');
