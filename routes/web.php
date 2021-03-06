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

Route::get('/new_order', function () {
    return view('new_order');
});

Route::get('/new_client', function () {
    return view('new_client');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/new_employee', function () {
    return view('new_employee');
});

Route::get('/order_info/{id}', function ($id) {
    return view('order_info');
});

Route::get('/client_info/{id}', function ($id) {
    return view('client_info');
});

Route::get('/list_application', function () {
    return view('list_application');
});

Route::get('/list_customers', function () {
    return view('list_customers');
});

Route::get('/scheme', function () {
    return view('scheme');
});

Route::get('/list_groups', function () {
    return view('list_groups');
});

Route::get('/client_application/{id}', function ($id) {
    return view('client_application');
});

Route::get('/client_notes/{id}', function ($id) {
    return view('client_notes');
});

Route::get('/client_history/{id}', function ($id) {
    return view('client_history');
});

Route::get('/list_employee', function () {
    return view('list_employee');
});

Route::get('/edit_acc', function () {
    return view('edit_acc');
});

Route::get('/edit_my_acc', function () {
    return view('edit_my_acc');
});

Route::get('/edit_client/{id}', function ($id) {
    return view('edit_client');
});

Route::get('/edit_order/{id}', function ($id) {
    return view('edit_order');
});

Route::get('/order_history/{id}', function ($id) {
    return view('order_history');
});

Route::get('/order_notes/{id}', function ($id) {
    return view('order_notes');
});

Route::get('/reset_pass', function () {
    return view('reset_pass');
});