<?php

use Illuminate\Http\Request;

Route::post('register', 'AuthController@register'); 
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('user', 'AuthController@getAuthUser'); //Wysyła json z danymi o użytkowniku na podstawie jwt

Route::get('users/', 'UsersController@getUsers');
Route::get('users/{id}', 'UsersController@getUser');
Route::get('users/delete/{id}', 'UsersController@deleteUser'); //Dodać do dokumentacji
Route::post('users/update/{id}', 'UsersController@updateUser'); //Dodać do dokumentacji

Route::get('clients/notes/', 'ClientNodesController@getClientNotes');
Route::get('clients/notes/{id}', 'ClientNodesController@getClientNote');
Route::put('clients/notes/', 'ClientNodesController@createClientNote');
Route::get('clients/notes/delete/{id}', 'ClientNodesController@deleteClientNote'); //Dodać do dokumentacji
Route::post('clients/notes/update/{id}', 'ClientNodesController@updateClientNote'); //Dodać do dokumentacji

Route::get('clients/', 'ClientsController@getClients');
Route::get('clients/{id}', 'ClientsController@getClient');
Route::put('clients/', 'ClientsController@createClient');
Route::get('clients/delete/{id}', 'ClientsController@deleteClient'); //Dodać do dokumentacji
Route::post('clients/update/{id}', 'ClientsController@updateClient'); //Dodać do dokumentacji


//KONIEC DOKUMENTACJI

Route::get('groups/', 'GroupsController@getGroup');
Route::get('groups/{id}', 'GroupsController@getGroups');
Route::put('groups/', 'GroupsController@createGroup');
Route::get('groups/delete/{id}', 'GroupsController@deleteGroup'); //Dodać do dokumentacji
Route::post('groups/update/{id}', 'GroupsController@updateGroup'); //Dodać do dokumentacji