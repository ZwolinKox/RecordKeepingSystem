<?php

namespace App\Http\Controllers;

use App\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    function getNote(Request $request)
    {
        return Notes::all()->toJson();
    }

    function getNotes(Request $request)
    {
        $exist = Notes::find($request->id);
        if($exist != null){
            return Notes::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createNote(Request $request)
    {
        if($request->user == null || $request->text == null || $request->client == null)
            return response()->json(['error' => 'Notes name, text and text cant be null null'], 401);
        
        $user = Notes::create([
            'user' => $request->user,
            'text' => $request->text,
            'client' => $request->client,
        ]);
        
        return response()->json(['message' => 'Successful added new Note'], 200);
    }
}
