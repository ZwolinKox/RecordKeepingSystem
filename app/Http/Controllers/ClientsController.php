<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('banCheck');
    }

    function getClients(Request $request)
    {
        return Clients::paginate(15);
    }

    function getClientsLight(Request $request){
        return Clients::all('id','name', 'phone1');
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
            return response()->json(['message' => 'Successful delete client '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function updateClient(Request $request)
    {
        if($request->body == null)
            return response()->json(['error' => 'Body cant be null'], 401);
        
        try
        {
            $exist = Clients::find($request->id);

            if($exist != null){
                $exist->update($request->body);
    
                return response()->json(['message' => 'Successful edit client '.$request->id], 200);
            }
        }
        catch(Illuminate\Database\QueryException $e)
        {
            return response()->json(['message' => 'Bad query '.$request->id], 401);
        }

        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createClient(Request $request)
    {
        if($request->name == null)
            return response()->json(['error' => 'Private and name cant be null'], 401);
        
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
