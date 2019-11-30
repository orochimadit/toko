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

Route::get('/', 'Utama@index');
Route::get('/login', 'Login@index');
Route::post('/daftar', 'Login@Register');
Route::post('/masuk', 'Login@Masuk');