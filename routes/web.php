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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth']], function () {   

// });

//CRUD Kategori
Route::resource('kategori', 'KategoriController');
//CRUD Profile
Route::resource('profile', 'ProfileController');
//CRUD Berita
Route::resource('berita', 'BeritaController');