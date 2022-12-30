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
//use App\Image;

// GENERALES
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/plaza', 'HomeController@plaza')->name('plaza');
Route::get('/plaza-patapata', 'HomeController@plazaPata')->name('plaza-patapata');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/panel', 'HomeController@panel')->name('panel')->middleware('auth');

// USUARIO
Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/perfil/{id}', 'UserController@profile')->name('profile');

// IMAGEN
Route::get('/subir-imagen', 'ImageController@create')->name('image.create')->middleware('auth');
Route::post('/image/save', 'ImageController@save')->name('image.save')->middleware('auth');
Route::get('/image/file/{filename}', 'ImageController@getImage')->name('image.file');
Route::get('/imagen/{id}', 'ImageController@detail')->name('image.detail')->middleware('auth');
Route::get('/image/delete/{id}', 'ImageController@delete')->name('image.delete')->middleware('auth');
Route::get('/imagen/editar/{id}', 'ImageController@edit')->name('image.edit')->middleware('auth');
Route::post('/image/update', 'ImageController@update')->name('image.update')->middleware('auth');










