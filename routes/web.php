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
    // return view('welcome');
    return redirect('/home');
});

Route::view('/home', 'home');

Route::get('/greet/{name?}', function ($name = "") {
    print("Hello $name");
});

Route::get('demo-named-route', function () {
    return "<h1>This is a named route</h1>";
})->name('test-name');

Route::post('post-route', function () {
    return "<h1>This is a POST route</h1>";
});

Route::put('put-route', function () {
    return "<h1>This is a PUT route</h1>";
});