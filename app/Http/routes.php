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

// Main site routes
Route::get('/', 'PagesController@index');
Route::get('resume' , 'PagesController@resume');
Route::get('portfolio' , 'PagesController@portfolio');
Route::get('blog' , 'PagesController@blog');
Route::get('show/{id}' , 'PagesController@show');
Route::get('about' , 'PagesController@about');
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);

// Auth routes
Route::auth();

// Articles admin only
Route::group(['middleware' => 'auth'], function () 
{
Route::resource('articles' , 'ArticlesController');
Route::post('articles/{id}/photos', ['as' => 'articles.addPhoto', 'uses' => 'ArticlesController@addPhoto']);
});



