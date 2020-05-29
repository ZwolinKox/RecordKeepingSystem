<?php

use Illuminate\Http\Request;

Route::post('register', 'AuthController@register'); 
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('user', 'AuthController@getAuthUser'); //Wysyła json z danymi o użytkowniku na podstawie jwt

Route::get('users/', 'UsersController@getUsers');
Route::get('users/{id}', 'UsersController@getUser');
Route::get('users/update/{id}', 'UsersController@updateUser'); //Dodać do dokumentacji
Route::get('users/delete/{id}', 'UsersController@deleteUser'); //Dodać do dokumentacji

Route::get('clients/', 'ClientsController@getClients');
Route::get('clients/{id}', 'ClientsController@getClient');
Route::put('clients/', 'ClientsController@createClient');
Route::get('clients/delete/{id}', 'ClientsController@deleteClient'); //Dodać do dokumentacji


//KONIEC DOKUMENTACJI

Route::get('groups/', 'GroupsController@getGroup');
Route::get('groups/{id}', 'GroupsController@getGroups');
Route::put('groups/', 'GroupsController@createGroup');
Route::get('groups/delete/{id}', 'GroupsController@deleteGroup'); //Dodać do dokumentacji

Route::get('notes/', 'NotesController@getNote');
Route::get('notes/{id}', 'NotesController@getNotes');
Route::put('notes/', 'NotesController@createNote');
Route::get('notes/delete/{id}', 'NotesController@deleteNote'); //Dodać do dokumentacji
