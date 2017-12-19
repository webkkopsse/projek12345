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
Auth::routes();

Route::group(['middleware'=> 'admin'], function(){
    Route::get('/admin', 'adminController@dashboard');
});

Route::group(['middleware'=> 'auth'], function(){
    Route::resource('blog','BlogController', ['except'=>['index','show']]);
    Route::get('/blog/saved', 'BlogController@saved');
});

Route::resource('blog','BlogController', ['only'=>['index','show']]);

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index')->name('home');
