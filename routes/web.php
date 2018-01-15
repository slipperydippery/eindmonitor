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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('category', 'CategoriesController');
Route::resource('page', 'PagesController');
Route::resource('category.page', 'CategoryPagesController');

Route::get('/api/category', 'ApiCategoriesController@index');


