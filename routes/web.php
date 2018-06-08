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
Route::get('/', 'PagesController@home')->name('home');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/frequently-asked-question', 'PagesController@faq')->name('faq');
Route::get('/privacy-policy', 'PagesController@privacy')->name('privacy');
Route::get('/our-team', 'PagesController@team')->name('team');
Route::get('/career', 'PagesController@career')->name('career');

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
*/
Route::get('/news/post', 'PagesController@newsPost')->name('news.post');