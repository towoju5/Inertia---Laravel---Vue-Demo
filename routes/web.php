<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return inertia('Home');
});

Route::get('users', function () {
    return inertia('Users');
});

Route::get('settings', function () {
    return inertia('Settings');
});

Route::get('orders', function () {
    return inertia('Orders');
});

Route::post('logout', function() {
    return "loggint the user out";
});