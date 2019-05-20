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

Route::get('/envinfo', function(){
    echo env('DB_CONNECTION') . "<br />";
    echo env('DB_HOST') . "<br />";
    echo env('DB_PORT') . "<br />";
    echo env('DB_DATABASE') . "<br />";
    echo env('DB_USERNAME') . "<br />";
    echo env('DB_PASSWORD') . "<br />";
    return;
});