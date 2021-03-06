<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

get('articles','ArticlesController@index');
get('articles/create','ArticlesController@create');
get('articles/{id}','ArticlesController@show');
get('articles/{id}/edit','ArticlesController@edit');
get('articles/{id}/delete','ArticlesController@delete');
post('articles','ArticlesController@store');
patch('articles/{id}','ArticlesController@update');


