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

Route::get('/', 'PagesController@welcome');
Route::get('gallery', 'PagesController@gallery');
Route::get('about', 'PagesController@about');
Route::get('contact',
    ['as' => 'contact', 'uses' => 'PagesController@createContact' ]);
Route::post('contact',
    ['as' => 'contact', 'uses' => 'PagesController@storeContact']);

//Route::resource('articles', 'ArticlesController');
Route::get('articles', 'ArticlesController@index');
Route::get('articles/{articles}', 'ArticlesController@show');


Route::get('admin', 'AdminController@index');
Route::get('admin/staff', 'AdminController@staff');

Route::get('admin/articles', 'AdminController@articles');
Route::get('admin/articles/create', 'ArticlesController@create');
Route::post('admin/articles', 'ArticlesController@store');
Route::get('admin/articles/{articles}/edit', 'ArticlesController@edit');
Route::put('admin/articles/{articles}', 'ArticlesController@update');
Route::patch('admin/articles/{articles}', 'ArticlesController@update');
Route::delete('admin/articles/{articles', 'ArticlesController@destroy');

Route::get('tags/{tags}', 'TagsController@show');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
