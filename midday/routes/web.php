<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu' , 'ShopController@index');

Route::get('/cart' , 'CartController@index');
Route::post('/cart' , 'CartController@store');
Route::delete('/cart/{product}' , 'CartController@destroy');

Route::get('/empty', function(){
	Cart::destroy();
});

Route::get('/blog');

Route::get('/about');

Route::get('/live');

Route::get('/login');
Route::get('/signup');
