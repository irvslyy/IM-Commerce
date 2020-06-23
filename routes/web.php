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


Route::group(['middleware' => ['prevent-back-history']], function () {

	Auth::routes();
	Route::group(['middleware' => ['login-verif']], function () {

		Route::get('/home', 'HomeController@index')->name('home');

		Route::get('/commerce/','MainController@index')->name('commerce');

		//CART USERS
		Route::post('/cart/post/','CartController@store')->name('cart.post');
		Route::get('/cart/detail/users/','CartController@show')->name('cart.detail');

		//USERS
		Route::get('/users/management/','UsersController@index')->name('users.manage');

		//SHIPPING
		Route::get('/shipping/','ShippingController@index')->name('shipping.index');
		Route::delete('/shipping/delete/{id}/','ShippingController@destroy')->name('shipping.destroy');
		Route::get('/shipping/export/','ShippingController@ExportDataShipping')->name('shipping.export');


		//COD
		Route::get('/cod/','CodController@index')->name('cod.index');
	});
});


