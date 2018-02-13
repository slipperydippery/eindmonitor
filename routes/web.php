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

Route::get('/', function () {return view('welcome'); });
Route::get('/aanleiding', function () {return view('pages.aanleiding'); });
Route::get('/samenwerking', function () {return view('pages.samenwerking'); });
Route::get('/gedragsverandering', function () {return view('pages.gedragsverandering'); });
Route::get('/contact', function () {return view('pages.contact'); });
Route::get('/graphs', function () {return view('pages.graphs'); });
Route::get('/kopgroep', function () {return view('pages.kopgroep'); });

Route::resource('category', 'CategoriesController');
Route::resource('page', 'PagesController');
Route::resource('category.page', 'CategoryPagesController');


Route::get('/api/category', 'ApiCategoriesController@index');


