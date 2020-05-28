<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    function getClients(Request $request)
    {
        return Clients::all()->toJson();
    }

    function getClient(Request $request)
    {
        return Clients::find($request->id)->toJson();
    }
}
