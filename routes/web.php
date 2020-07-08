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
    return view('auth.login');
});

Route::group(['middleware' => ['prevent-back-history']], function () {

	Auth::routes();

		Route::get('/home/', 'HomeController@index')->name('home');
		Route::get('/cart/show/item/cart-{id}/','HomeController@showItems')->name('cart.showItem');

		Route::get('/commerce/','MainController@index')->name('commerce');

		//CART USERS
		Route::post('/cart/post/','CartController@store')->name('cart.post');
		Route::get('/cart/detail/users/','CartController@show')->name('cart.detail');
		Route::post('/cart/delete/{id}/','CartController@destroy')->name('cart.destroy');

		//USERS
		Route::get('/users/management/','UsersController@index')->name('users.manage');
		Route::get('/users/profile/','UsersController@ShowUsers')->name('users.profile');
		Route::get('/users/account/','UsersController@Account')->name('users.account');

		//LOGISTIC
		Route::get('/logistic/','LogisticController@index')->name('logistic.index');
		Route::post('/logistic/delete/{id}','LogisticController@delete')->name('logistic.delete');

		//SHIPPING
		Route::get('/shipping/','ShippingController@index')->name('shipping.index');
		Route::post('/shipping/delete/{id}/','ShippingController@destroy')->name('shipping.destroy');
		Route::get('/shipping/export/','ShippingController@ExportDataShipping')->name('shipping.export');
		Route::post('/shipping/update/{id}','ShippingController@update')->name('shipping.update');

		//GRF
		Route::get('/goodReqJson/','GrfController@indexJson');
		Route::get('/goodsRequestForm/','GrfController@index')->name('grf.index');
		Route::post('/goodsRequestForm/delete/{id}/','GrfController@destroy')->name('grf.destroy');
		Route::post('/goodsRequestForm/update/{id}/','GrfController@update')->name('grf.update');
		Route::get('/grf/export/','GrfController@ExportDataGrf')->name('grf.export');

		//COD
		Route::get('/cod/export/','CodController@ExportDataCod')->name('cod.export');
		Route::get('/cod/','CodController@index')->name('cod.index');
		Route::post('/cod/update/{id}/','CodController@update')->name('cod.update');
		Route::post('/cod/delete/{id}/','CodController@destroy')->name('cod.destroy');

		Route::get('/get/','UsersController@get');
		Route::get('/json-DataWh/','HomeController@getDataWh');

		Route::get('/hashMyAss/','HomeController@HashMyAss');
});



