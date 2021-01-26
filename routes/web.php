<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();



/* Admin */
Route::group([
	'middleware' => ['auth', 'admin'], 
	'prefix' => 'admin', 
	'namespace' => 'Admin',
	'as' => 'admin.'
], function(){
	// admin index page
	Route::get('/', 'AdminController@index')->name('index');
	// pages
	Route::resource('pages', 'PageController');
	// countries
	Route::resource('countries', 'CountryController');
	// products
	Route::resource('products', 'ProductController');
	// consulations
	Route::put('consultations/{consultation}/done', 'ConsultationController@markDone')->name('consultations.markDone');
	Route::resource('consultations', 'ConsultationController');
	// orders
	Route::post('orders/{order}', 'OrderController@restore')->name('orders.restore');
	Route::resource('orders', 'OrderController');
	// users
	Route::resource('users', 'UserController');
	// settings
	Route::resource('settings', 'SettingController');
	// order timeline steps
	Route::post('{orderId}/steps/{stepId}/check', 'StepController@check')->name('steps.check');
	Route::resource('orders.steps', 'StepController');
	// images
	Route::delete('images', 'ImageController@destroy')->name('images.destroy');
	// notifications
	Route::post('notifications', 'NotificationController@update')->name('notifications.update');
});

/* Profile */	
Route::group([
	'middleware' => ['auth', 'profile'],
	'prefix' => 'profile',
	'namespace' => 'Profile',
	'as' => 'profile.'
], function(){
	Route::get('/', 'ProfileController@index')->name('index');
	Route::put('/{user}', 'ProfileController@update')->name('update');
	Route::resource('/orders', 'OrderController');
	Route::get('/contacts', 'ContactController@index')->name('contacts.index');
});

/* Front end */
// custom login
Route::post('custom-login', 'CustomLoginController')->name('custom.login');
//  pages
Route::get('/{slug?}', 'PageController@show')->name('pages.show');
// products
Route::get('products/{product}', 'ProductController@show')->name('products.show');
// consultations
Route::post('consultations', 'ConsultationController@store')->name('consultations.store');
// countries
Route::get('countries/{country}', 'CountryController@show')->name('countries.show');
// orders
Route::get('orders/create/{product}', 'OrderController@create')->name('orders.create');
Route::post('orders', 'OrderController@store')->name('orders.store');
// search
Route::post('search', 'SearchController')->name('search');
// locale
Route::post('locale', 'LocaleController')->name('locale');
