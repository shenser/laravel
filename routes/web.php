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
    return view('welcome');
});

Route::get('hello', function () {
    return 'welcome!!!!!get';
});

Route::post('hello', function () {
    return 'welcome!!!!!post';
});

Route::match(['get', 'post'], 'foo', function () {
    return 'This is a request from get or post';
});
