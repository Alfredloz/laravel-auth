<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('contacts');
Route::get('/contacts', 'PageController@contacts')->name('about');

Auth::routes();


// route admin sections
Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('posts', 'PostController');
});