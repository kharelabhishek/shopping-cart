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


Route::get('/', 'FrontController@index')->name('home');
Route::get('/shirts', 'FrontController@shirts')->name('shirts');



Auth::routes();

Route::get('/logout', 'auth\loginController@logout');


Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');




Route::prefix('/admin')->middleware('admin')->group(function(){
	Route::get('/', function () {
	return view('admin.index');
})->name('admin.index');
Route::resource('product','ProductsController');
Route::resource('category','CategoriesController');
});
Route::get('checkout','CheckoutController@step1');
Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');