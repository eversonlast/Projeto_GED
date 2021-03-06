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
    return view('site.home');
})->name('site.home');

Route::get('/form', function(){
    return view('site.formImagen');
})->name('site.form');

Route::get('/listagem', function(){
    return view('site.listagem');
})->name('site.listagem');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/signin', function(){
//     return view('site.login');
// })->name('site.login');


// Route::get('/login', function(){
//     return view('site.login2');
// });