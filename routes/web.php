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

Route::get('/','TestController@index')->name('test');
Route::post('/','TestController@post',function(){})->name('test_post');
Route::post('/BBS','TestController@new_post',function(){})->name('new_post_bbs');
