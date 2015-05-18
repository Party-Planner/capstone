<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::get('/', 'HomeController@showHome');





// Max's Routes

// Vendor pages
// Route::get('/vendor-signup', 'HomeController@showVendorSignup');

// Route::get('/vendor-dash', 'HomeController@showVendorDash');

// User pages
// Route::get('/user-signup', 'HomeController@showUserSignup');

// Route::get('/user-dash', 'HomeController@showUserDash');












// Route::resource('users', 'UsersController');

Route::resource('vendors', 'VendorsController');

Route::resource('parties', 'PartiesController');












// TEST ROUTES FOR MAX / KB / BENNY

Route::get('/maxtest', function()
{
	// return View::make('/parties/create');
	return View::make('vendors.vendors-dash');

	
});




























// KB's Routes to the dashboard view


Route::get('/dashboard', function()
{
    return View::make('dashboard');
});




//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');
