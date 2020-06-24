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


// Route::group(['middleware' => ['prevent-back-history']], function () {

	Auth::routes();
	Route::group(['middleware' => ['login-verif']], function () {

		Route::get('/home/', 'HomeController@index')->name('home');

		Route::get('/commerce/','MainController@index')->name('commerce');

		//CART USERS
		Route::post('/cart/post/','CartController@store')->name('cart.post');
		Route::get('/cart/detail/users/','CartController@show')->name('cart.detail');
		Route::post('/cart/delete/{id}/','CartController@destroy')->name('cart.destroy');
		
		Route::get('/cart/show/item/{id}','CartController@showItems')->name('cart.showItem');

		//USERS
		Route::get('/users/management/','UsersController@index')->name('users.manage');

		//SHIPPING
		Route::get('/shipping/','ShippingController@index')->name('shipping.index');
		Route::post('/shipping/delete/{id}/','ShippingController@destroy')->name('shipping.destroy');
		Route::get('/shipping/export/','ShippingController@ExportDataShipping')->name('shipping.export');
		Route::post('/shipping/update/{id}','ShippingController@update')->name('shipping.update');

		//GRF
		Route::get('/goodsRequestForm/','GrfController@index')->name('grf.index');
		Route::post('/goodsRequestForm/delete/{id}/','GrfController@destroy')->name('grf.destroy');
		Route::get('/grf/export/','GrfController@ExportDataGrf')->name('grf.export');

		//COD
		Route::get('/cod/','CodController@index')->name('cod.index');
		Route::get('/cod/delete/{id}','CodController@destroy')->name('cod.destroy');
	});
// });



