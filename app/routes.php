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

Route::get('signiny', 'AuthController@SignInVisual');
Route::get('signin', 'AuthController@SignIn');
Route::post('signin', 'AuthController@SignIn');
Route::get('signup', 'AuthController@SignUp');

Route::group(array('before' => 'auth'), function() {

Route::get('/', 'DashboardController@Index');
Route::get('dashboard', 'DashboardController@Index');
Route::get('inout', 'DashboardController@InOut');

Route::get('time', 'TimeController@Index');
Route::get('hours', 'TimeController@Hours');

Route::get('you', 'PersonController@Index');
Route::get('person', 'PersonController@Index');

Route::get('team', 'TeamController@Index');
Route::get('company', 'CompanyController@Index');

Route::resource('emp', 'EmployeesController');

});

