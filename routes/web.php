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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PublicController@index');

Route::post('/', 'PublicController@register');

Route::get('/vote', 'PublicController@vote');
Route::get('/pemira/{id}', 'PublicController@details');


Route::get('/panitia', 'PemiraController@login');

Route::get('/panitia/input', 'PemiraController@inputPemira');
Route::post('/panitia/input', 'PemiraController@store');

Route::get('/panitia/daftar', 'PemiraController@daftarPemira');
Route::get('/pemira/{id}/edit', 'PemiraController@editPemira');
Route::put('/pemira/{id}', 'PemiraController@update');

Route::delete('/pemira/{id}', 'PemiraController@destroy');
