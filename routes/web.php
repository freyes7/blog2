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

//Auth routes
Route::get('auth/login',['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);
Route::post('auth/login','Auth\LoginController@login');
Route::get('auth/logout','Auth\LoginController@logout');

//Registration Routes
Route::get('auth/register','Auth\RegisterController@showRegistrationForm');
Route::post('auth/register','Auth\RegisterController@register');

//Password Reset Routes
Route::get('password/reset/{token?}','Auth\ResetPasswordController@showResetForm');
Route::post('password/email','Auth\ResetPasswordController@resetPassword');
Route::post('password/reset','Auth\ResetPasswordController@reset');

Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog',['uses'=>'BlogController@getIndex','as'=>'blog.index']);
Route::get('/', 'PagesController@getIndex');

Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');

Route::resource('posts','PostController');