<?php

/*
|--------------------------------------------------------------------------
| Pages Routes
|--------------------------------------------------------------------------
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
Route::get('/dashboard/carousel', 'DashboardController@carousel')->name('dashboard.carousel');
Route::post('/dashboard/carousel', 'CarouselController@store')->name('dashboard.carousel.store');
Route::put('/dashboard/carousel', 'CarouselController@update_sortorder')->name('dashboard.carousel.update.sortorder');
Route::delete('/dashboard/carousel/{carousel}', 'CarouselController@destroy')->name('dashboard.carousel.delete');
Route::get('/dashboard/tag-list', 'DashboardController@tagList')->name('dashboard.tag_list');
Route::get('/dashboard/news', 'DashboardController@news')->name('dashboard.news');
Route::get('/dashboard/pages', 'DashboardController@pages')->name('dashboard.pages');
Route::get('/dashboard/users', 'DashboardController@users')->name('dashboard.users');

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
*/
Route::get('/news/post', 'PagesController@newsPost')->name('news.post');
