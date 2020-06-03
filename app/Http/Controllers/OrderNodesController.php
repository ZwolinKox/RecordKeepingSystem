<?php

namespace App\Http\Controllers;

use App\OrderNotes;
use Illuminate\Http\Request;

class OrderNodesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('banCheck');
    }

    function getOrderNotes(Request $request)
    {
        return OrderNotes::paginate(15);
    }

    function getOrderNote(Request $request)
    {
        $exist = OrderNotes::find($request->id);
        if($exist != null){
            return OrderNotes::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function deleteOrderNote(Request $request)
    {
        $exist = OrderNotes::find($request->id);
        if($exist != null){
            $exist->delete();
            return response()->json(['message' => 'Successful delete note '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function updateOrderNote(Request $request)
    {
        if($request->body == null)
            return response()->json(['error' => 'Body cant be null'], 401);
        
        try
        {
            $exist = OrderNotes::find($request->id);

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

    function createOrderNote(Request $request)
    {
        if($request->user == null || $request->text == null || $request->order == null)
            return response()->json(['error' => 'Notes user, client and text cant be null'], 401);
        
        $user = OrderNotes::create([
            'user' => $request->user,
            'text' => $request->text,
            'order' => $request->order,
        ]);
        
        return response()->json(['message' => 'Successful added new Note'], 200);
    }
}
