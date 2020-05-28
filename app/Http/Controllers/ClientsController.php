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
        $exist = Clients::find($request->id);
        if($exist != null){
            return Clients::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createClient(Request $request)
    {
        //if($request->)
    }
}
