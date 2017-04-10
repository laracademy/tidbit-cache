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

Event::listen(Illuminate\Database\Events\QueryExecuted::class, function(Illuminate\Database\Events\QueryExecuted $query) {
    logger($query->sql);
    logger($query->time);
});

Route::get('/')->uses('BlogController@index');
Route::get('view/{post}')->uses('BlogController@view')->name('article.view');
