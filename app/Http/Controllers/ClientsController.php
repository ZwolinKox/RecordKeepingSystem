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

    function deleteClient(Request $request)
    {
        $exist = Clients::find($request->id);
        if($exist != null){
            $exist->delete();
            return response()->json(['message' => 'Succesful delete client '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createClient(Request $request)
    {
        if($request->private == null || $request->name == null)
            return response()->json(['error' => 'private and name cant be null'], 401);
        
        $user = Clients::create([
            'name' => $request->name,
            'private' => $request->private,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email1' => $request->email1,
            'email2' => $request->email2,
            'address' => $request->address,
            'send_sms' => $request->send_sms,
            'send_email' => $request->send_email,
        ]);
        
        return response()->json(['message' => 'Successful added new Client'], 200);
    }
}
