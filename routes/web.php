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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/datapegawai', function () {
    return view('datapegawai');
});

Route::get('/dataleveljabatan', function () {
    return view('dataleveljabatan');
});

Route::get('/datagaji', function () {
    return view('datagaji');
});

Route::get('/laporangaji', function () {
    return view('laporangaji');
});

Route::get('/slipgaji', function () {
    return view('slipgaji');
});
