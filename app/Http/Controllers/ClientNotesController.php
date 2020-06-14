<?php

namespace App\Http\Controllers;

use App\ClientNotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientNotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('banCheck');
    }

    function getClientNotes(Request $request)
    {
        return ClientNotes::paginate(15);
    }

    function getClientNote(Request $request)
    {
        $exist = ClientNotes::find($request->id);
        if($exist != null){
            return ClientNotes::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function deleteClientNote(Request $request)
    {
        $exist = ClientNotes::find($request->id);
        if($exist != null){
            $exist->delete();
            return response()->json(['message' => 'Successful delete note '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function updateClientNote(Request $request)
    {
        function update($name, $request, $note)
        {
            if($request->has('body.'.$name)){
                $note->$name = $request->input('body.'.$name);
            }
        }

        $validator = Validator::make($request->all(),[
            'user' => 'numeric',
            'text' => '',
            'client' => 'numeric',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }

        $note = ClientNotes::find($request->id);
        if($note != null){
            $fillable = ['user', 'text', 'client'];
            foreach ($fillable as $name){
                update($name, $request, $note);
            }
            $note->save();

            return response()->json(['message' => 'Successful edit note '.$request->id], 200);
        }

        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createClientNote(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'user' => 'required|numeric',
            'text' => 'required',
            'client' => 'required|numeric',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }
        
        $note = ClientNotes::create([
            'user' => $request->user,
            'text' => $request->text,
            'client' => $request->client,
        ]);
        
        return response()->json(['message' => 'Successful added new Note'], 200);
    }
}
