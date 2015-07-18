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


//

// Confide routes
/*
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

Route::group(array('before' => 'auth'), function()
{
    Route::get('/', function()
    {
        return View::make('admin.dashboard');
    });
});
*/
/*
Route::get('inei', function()
{
    return View::make('site.user.index');
});
 */
//

Route::get('/listar', function(){
   return View::make('admin.product');
});

// Confide RESTful route
Route::get('users/confirm/{code}', 'UsersController@getConfirm');
Route::get('users/reset_password/{token}', 'UsersController@getReset');
Route::post('users/reset_password', 'UsersController@postReset');
Route::controller( 'users', 'UsersController');

# Index Page - Last route, no matches
Route::get('/', array('uses' => 'UsersController@getIndex'));

Route::resource('products', 'ProductsController');