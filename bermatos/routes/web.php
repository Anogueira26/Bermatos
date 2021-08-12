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

Route::get('/', function () {
    return view('/welcome');
});
Route::get('/contactos', function () {
    return view('/contactos');
});
Route::get('/usados', function () {
    return view('/used');
});
Route::get('/empresa', function () {
    return view('/company');
});
Route::get('/servicos', function () {
    return view('/servicos');
});
