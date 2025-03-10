<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('hello');
// });

Route::get('/', function () {
    return view('home.layout.mainBody');
});
Route::get('/charts', function () {
    return view('dashboard.layout.charts');
});
Route::get('/tables', function () {
    return view('dashboard.layout.tables');
});
