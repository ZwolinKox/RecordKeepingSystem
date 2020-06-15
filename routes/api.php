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
Route::post('users/search', 'UsersController@searchUsers'); //Dodać do dokumentacji
Route::post('users/passreset', 'UsersController@passwordReset'); //Dodać do dokumentacji
Route::get('users/{id}', 'UsersController@getUser');
Route::get('users/delete/{id}', 'UsersController@deleteUser');
Route::post('users/update/{id}', 'UsersController@updateUser'); 
Route::post('users/changePassword', 'AuthController@changePassword'); 


Route::get('clients/notes/', 'ClientNodesController@getClientNotes');
Route::get('clients/notes/{id}', 'ClientNodesController@getClientNote');
Route::put('clients/notes/', 'ClientNodesController@createClientNote');
Route::get('clients/notes/delete/{id}', 'ClientNodesController@deleteClientNote'); 
Route::post('clients/notes/update/{id}', 'ClientNodesController@updateClientNote');

Route::get('clients/', 'ClientsController@getClients');
Route::get('clients/light', 'ClientsController@getClientsLight');
Route::get('clients/groups/{id}', 'ClientsController@getClientGroups'); //Dodać do dokumentacji
Route::post('clients/search', 'ClientsController@searchClients'); //Dodać do dokumentacji
Route::get('clients/{id}', 'ClientsController@getClient');
Route::put('clients/', 'ClientsController@createClient');
Route::get('clients/delete/{id}', 'ClientsController@deleteClient'); 
Route::post('clients/update/{id}', 'ClientsController@updateClient');


Route::get('groups/', 'GroupsController@getGroup');
Route::get('groups/light', 'GroupsController@getGroupsLight'); //Dodać do dokumentacji
Route::get('groups/clients', 'GroupsController@getGroupClients'); //Dodać do dokumentacji
Route::post('groups/search', 'GroupsController@searchGroups'); //Dodać do dokumentacji
Route::get('groups/{id}', 'GroupsController@getGroups');
Route::put('groups/', 'GroupsController@createGroup');
Route::get('groups/delete/{id}', 'GroupsController@deleteGroup'); 
Route::post('groups/update/{id}', 'GroupsController@updateGroup');
Route::get('groups/findClient/{id}', 'GroupsController@findClient'); //Dodać do dokumentacji

Route::post('orders/upload/{id}', 'OrdersController@fileUpload'); //Dodać do dokumentacji
Route::post('orders/download/{id}', 'OrdersController@fileDownload'); //Dodać do dokumentacji

Route::get('orders/notes/', 'OrderNotesController@getOrderNotes'); //Dodać do dokumentacji
Route::get('orders/notes/{id}', 'OrderNotesController@getOrderNote'); //Dodać do dokumentacji
Route::put('orders/notes/', 'OrderNotesController@createOrderNote'); //Dodać do dokumentacji
Route::get('orders/notes/delete/{id}', 'OrderNotesController@deleteOrderNote'); //Dodać do dokumentacji
Route::post('orders/notes/update/{id}', 'OrderNotesController@updateOrderNote'); //Dodać do dokumentacji

Route::get('orders/', 'OrdersController@getOrders'); 
Route::post('orders/search', 'OrdersController@searchOrders'); 
Route::get('orders/statuses/{id}', 'OrdersController@getOrderStatuses'); //Dodać do dokumentacji
Route::get('orders/{id}', 'OrdersController@getOrder'); 
Route::put('orders/', 'OrdersController@createOrders'); 
Route::get('orders/delete/{id}', 'OrdersController@deleteOrders'); 
Route::post('orders/update/{id}', 'OrdersController@updateOrders'); 

Route::get('itemtypes/', 'ItemTypesController@getItemTypes');
Route::get('itemtypes/light', 'ItemTypesController@getItemTypesLight'); //Dodać do dokumentacji
Route::put('itemtypes/', 'ItemTypesController@createItemTypes'); 
Route::get('itemtypes/delete/{id}', 'ItemTypesController@deleteItemTypes'); 


Route::post('scheme/update/', 'SchemeController@updateScheme'); //Dodać do dokumentacji
Route::get('scheme/', 'SchemeController@getScheme'); //Dodać do dokumentacji

Route::get('test-mail', function () {
    Mail::to('mateks301@interia.pl')->send(new App\Mail\TestMail());
});