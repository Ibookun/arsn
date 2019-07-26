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

Route::get('/', 'PageController@index')->name('home');
Route::get('/news', 'PageController@news')->name('news');
Route::get('/news/{id}', 'PageController@newsDetails')->name('news-details');
Route::get('/blog/2colonnes', 'PageController@blogParcours2Colonnes')->name('blog-parcours-2-colonnes');
Route::get('/blog/timeline', 'PageController@blogParcoursTimeline')->name('blog-parcours-timeline');

Route::get('/blog', 'PageController@showBlogList');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
