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

Route::get('/', [ 'as' => 'home', 'uses' => 'GalleryController@index']);
Route::post('/search', [ 'as' => "search", 'uses' => 'GalleryController@search']);
Route::get('/search/{query}/{id}', [ 'as' => "search.page", 'uses' => 'GalleryController@page']);
Route::get('/searchAPI', [ 'as' => "searchAPI", 'uses' => 'GalleryController@searchAPI']);