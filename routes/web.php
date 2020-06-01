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
    return view('start');
});

Route::get('/nowanaprawa', function () {
    return view('nowanaprawa');
});

Route::get('/nowyklient', function () {
    return view('nowyklient');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/nowanaprawa', function () {
    return view('nowanaprawa');
});

Route::get('/nowy_uzytkownik', function () {
    return view('nowy_uzytkownik');
});

Route::get('/informacje_zlecenie', function () {
    return view('informacje_zlecenie');
});

Route::get('/informacje_klient', function () {
    return view('informacje_klient');
});