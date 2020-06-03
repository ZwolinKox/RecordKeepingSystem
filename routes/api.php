<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Helpers\SchemesController;
use App\Http\Controllers\Helpers\Messages;

Route::post('register', 'AuthController@register'); 
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('user', 'AuthController@getAuthUser'); //Wysyła json z danymi o użytkowniku na podstawie jwt

Route::get('users/', 'UsersController@getUsers');
Route::get('users/light', 'UsersController@getUsersLight'); 
Route::get('users/{id}', 'UsersController@getUser');
Route::get('users/delete/{id}', 'UsersController@deleteUser');
Route::post('users/update/{id}', 'UsersController@updateUser'); 

Route::get('clients/notes/', 'ClientNodesController@getClientNotes');
Route::get('clients/notes/{id}', 'ClientNodesController@getClientNote');
Route::put('clients/notes/', 'ClientNodesController@createClientNote');
Route::get('clients/notes/delete/{id}', 'ClientNodesController@deleteClientNote'); 
Route::post('clients/notes/update/{id}', 'ClientNodesController@updateClientNote');

Route::get('clients/', 'ClientsController@getClients');
Route::get('clients/light', 'ClientsController@getClientsLight');
Route::get('clients/{id}', 'ClientsController@getClient');
Route::put('clients/', 'ClientsController@createClient');
Route::get('clients/delete/{id}', 'ClientsController@deleteClient'); 
Route::post('clients/update/{id}', 'ClientsController@updateClient');


Route::get('groups/', 'GroupsController@getGroup');
Route::get('groups/{id}', 'GroupsController@getGroups');
Route::put('groups/', 'GroupsController@createGroup');
Route::get('groups/delete/{id}', 'GroupsController@deleteGroup'); 
Route::post('groups/update/{id}', 'GroupsController@updateGroup'); 

Route::get('orders/notes/', 'OrderNodesController@getOrderNotes'); //Dodać do dokumentacji
Route::get('orders/notes/{id}', 'OrderNodesController@getOrderNote'); //Dodać do dokumentacji
Route::put('orders/notes/', 'OrderNodesController@createOrderNote'); //Dodać do dokumentacji
Route::get('orders/notes/delete/{id}', 'OrderNodesController@deleteOrderNote'); //Dodać do dokumentacji
Route::post('orders/notes/update/{id}', 'OrderNodesController@updateOrderNote'); //Dodać do dokumentacji

Route::get('orders/', 'OrdersController@getOrders'); 
Route::get('orders/{id}', 'OrdersController@getOrder'); 
Route::put('orders/', 'OrdersController@createOrders'); 
Route::get('orders/delete/{id}', 'OrdersController@deleteOrders'); 
Route::post('orders/update/{id}', 'OrdersController@updateOrders'); 

Route::get('itemtypes/', 'ItemTypesController@getItemTypes'); 
Route::put('itemtypes/', 'ItemTypesController@createItemTypes'); 
Route::get('itemtypes/delete', 'ItemTypesController@createItemTypes'); 




//Strefa testowania
Route::get('test', function() {
    return Messages::sendSms(509921309, "pickup", 1);
});
