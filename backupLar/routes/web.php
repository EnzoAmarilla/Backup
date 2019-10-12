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

Auth::routes();

Route::get("/contact", function(){
   return view("contact");
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/index' , 'ProductsController@index');

Route::get('/products/create' , 'ProductsController@create');

Route::get('/products/export' , 'ProductsController@exportpdf');
Route::get('/products/exportExcel' , 'ProductsController@exportexc');
Route::post('/products/importExcel' , 'ProductsController@importExcel');

Route::post('/products' , 'ProductsController@store');

Route::get('/products/{product}' , 'ProductsController@show');

Route::get('/products/{product}/edit' , 'ProductsController@edit');

Route::patch('/products/{product}' , 'ProductsController@update');
