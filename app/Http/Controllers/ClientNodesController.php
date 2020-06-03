<?php

namespace App\Http\Controllers;

use App\ClientNodes;
use Illuminate\Http\Request;

class ClientNodesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('banCheck');
    }

    function getClientNotes(Request $request)
    {
        return ClientNodes::paginate(15);
    }

    function getClientNote(Request $request)
    {
        $exist = ClientNodes::find($request->id);
        if($exist != null){
            return ClientNodes::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function deleteClientNote(Request $request)
    {
        $exist = ClientNodes::find($request->id);
        if($exist != null){
            $exist->delete();
            return response()->json(['message' => 'Successful delete note '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function updateClientNote(Request $request)
    {
        if($request->body == null)
            return response()->json(['error' => 'Body cant be null'], 401);
        
        try
        {
            $exist = ClientNodes::find($request->id);

            if($exist != null){
                $exist->update(json_decode($request->body, true));
    
                return response()->json(['message' => 'Successful edit note '.$request->id], 200);
            }
        }
        catch(Illuminate\Database\QueryException $e)
        {
            return response()->json(['message' => 'Bad query '.$request->id], 401);
        }

        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createClientNote(Request $request)
    {
        if($request->user == null || $request->text == null || $request->client == null)
            return response()->json(['error' => 'Notes user, client and text cant be null'], 401);
        
        $user = ClientNodes::create([
            'user' => $request->user,
            'text' => $request->text,
            'client' => $request->client,
        ]);
        
        return response()->json(['message' => 'Successful added new Note'], 200);
    }
}
