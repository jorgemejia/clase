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

Route::get('channel/{id}', 'UserController@get_channel')->middleware('auth');;

Route::get('store/{id}', 'ShowProducts@get_products')->middleware('auth');;

Route::get('new/product', function () {
    $data = ["Ejemplo" => 1];
    return view('pages.createProduct')->with('data', $data);;
})->middleware('auth');;

Auth::routes();

Route::get('/test', function () {
    return view('pages.login');
})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
