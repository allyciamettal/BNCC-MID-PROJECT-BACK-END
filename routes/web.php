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

Route::get('/', 'App\Http\Controllers\appcontroller@idx');

Route::get('/collection', 'App\Http\Controllers\collectioncontroller@idx');

Route::get('/collection/manage', 'App\Http\Controllers\collectioncontroller@manage');

Route::get('/collection/add', 'App\Http\Controllers\collectioncontroller@add');

Route::post('/collection/add', 'App\Http\Controllers\collectioncontroller@store');

Route::get('/collection/{id}', 'App\Http\Controllers\collectioncontroller@edit');

Route::put('/collection/{id}', 'App\Http\Controllers\collectioncontroller@update');

Route::delete('/collection/{id}', 'App\Http\Controllers\collectioncontroller@delete');

Route::get('/profile', function () {
});
