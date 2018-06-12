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
| Dashboard Group
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::name('dashboard.')->group(function() {

    /*
    |--------------------------------------------------------------------------
    | Dashboard Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/dashboard/carousel', 'DashboardController@carousel')->name('carousel');
    Route::get('/dashboard/tag-list', 'DashboardController@tagList')->name('tag_list');
    Route::get('/dashboard/news', 'DashboardController@news')->name('news');
    Route::get('/dashboard/pages', 'DashboardController@pages')->name('pages');
    Route::get('/dashboard/team', 'DashboardController@team')->name('team');

    /*
    |--------------------------------------------------------------------------
    | Carousel Routes
    |--------------------------------------------------------------------------
    */
    Route::name('carousel.')->group(function() {
        Route::post('/dashboard/carousel', 'CarouselController@store')->name('store');
        Route::put('/dashboard/carousel', 'CarouselController@update_sortorder')->name('update.sortorder');
        Route::delete('/dashboard/carousel/{carousel}', 'CarouselController@destroy')->name('delete');
    });

    /*
    |--------------------------------------------------------------------------
    | Team Routes
    |--------------------------------------------------------------------------
    */
    Route::name('team.')->group(function() {
        Route::post('/dashboard/team', 'TeamController@store')->name('store');
        Route::put('/dashboard/team', 'TeamController@update_sortorder')->name('update.sortorder');
        Route::delete('/dashboard/team/{team}', 'TeamController@destroy')->name('delete');
    });
});

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
*/
Route::get('/news/post', 'PagesController@newsPost')->name('news.post');
