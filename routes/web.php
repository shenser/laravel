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
    return 'welcome!!!!!get1';
});

Route::post('hello', function () {
    return 'welcome!!!!!post';
});

Route::match(['get', 'post'], 'foo', function () {
    return 'This is a request from get or post';
});

Route::get('form_without_csrf_token', function (){
    return '<form method="POST" action="/hello_from_form"><button type="submit">提交</button></form>';
});

Route::get('form_with_csrf_token', function () {
    return '<form method="POST" action="/hello_from_form">' . csrf_field() . '<button type="submit">提交</button></form>';
});

Route::post('hello_from_form', function (){
    return 'hello laravel!';
});

Route::redirect('/here', '/there', 302);

Route::get('there', function(){
   return 'there';
});

Route::get('user/profile', function () {
    // 通过路由名称生成 URL
    return 'my url: ' . route('profile');
})->name('profile');

Route::fallback(function () {
    return 'hahah';
});

Route::get('user/{id}', 'UserController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
