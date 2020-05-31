<?php

use Illuminate\Http\Request;

Route::post('register', 'AuthController@register'); 
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('user', 'AuthController@getAuthUser'); //Wysyła json z danymi o użytkowniku na podstawie jwt

Route::get('users/', 'UsersController@getUsers');
Route::get('users/{id}', 'UsersController@getUser');
Route::delete('users/delete/{id}', 'UsersController@deleteUser'); 
Route::post('users/update/{id}', 'UsersController@updateUser'); 

Route::get('clients/', 'ClientsController@getClients');
Route::get('clients/{id}', 'ClientsController@getClient');
Route::put('clients/', 'ClientsController@createClient');
Route::delete('clients/delete/{id}', 'ClientsController@deleteClient'); 
Route::post('clients/update/{id}', 'ClientsController@updateClient'); 

Route::get('groups/', 'GroupsController@getGroup');
Route::get('groups/{id}', 'GroupsController@getGroups');
Route::put('groups/', 'GroupsController@createGroup');
Route::delete('groups/delete/{id}', 'GroupsController@deleteGroup'); 
Route::post('groups/update/{id}', 'GroupsController@updateGroup'); 

Route::get('notes/', 'NotesController@getNote');
Route::get('notes/{id}', 'NotesController@getNotes');
Route::put('notes/', 'NotesController@createNote');
Route::delete('notes/delete/{id}', 'NotesController@deleteNote');
Route::post('notes/update/{id}', 'NotesController@updateNote'); 

//KONIEC DOKUMENTACJI