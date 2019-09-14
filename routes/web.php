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
Route::get('/programas', 'ControllerProgramas@index');
Route::get('/estudos', 'ControllerEstudos@index');
Route::get('/sitestemp', 'ControllerSitesTemp@index');
