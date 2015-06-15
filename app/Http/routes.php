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
Route::get('articles/{publishedArticles}', 'ArticlesController@show');


Route::get('admin', 'AdminController@index');
Route::get('admin/staff', 'AdminController@staff');

Route::get('admin/articles', 'AdminController@articles');
Route::get('admin/articles/create', 'ArticlesController@create');
Route::post('admin/articles', 'ArticlesController@store');
Route::get('admin/articles/{anyArticles}/edit', 'ArticlesController@edit');
Route::put('admin/articles/{anyArticles}', 'ArticlesController@update');
Route::patch('admin/articles/{anyArticles}', 'ArticlesController@update');
Route::delete('admin/articles/{anyArticles}', 'ArticlesController@destroy');

Route::get('admin/images', 'AdminController@images');
Route::get('admin/images/upload', 'ImagesController@create');
Route::post('admin/images', 'ImagesController@store');
Route::get('admin/images/{images}/edit', 'ImagesController@edit');
Route::put('admin/images/{images}', 'ImagesController@update');
Route::patch('admin/images/{images}', 'ImagesController@update');
Route::delete('admin/images/{images}', 'ImagesController@destroy');

Route::get('admin/tags', 'AdminController@tags');
Route::get('admin/tags/create', 'TagsController@create');
Route::post('admin/tags', 'TagsController@store');
Route::get('admin/tags/{tagsId}/edit', 'TagsController@edit');
Route::put('admin/tags/{tagsId}', 'TagsController@update');
Route::patch('admin/tags/{tagsId}', 'TagsController@update');
Route::delete('admin/tags/{tagsId}', 'TagsController@destroy');

Route::get('tags/{tagsName}', 'TagsController@show');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
