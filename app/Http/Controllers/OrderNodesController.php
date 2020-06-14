<?php

namespace App\Http\Controllers;

use App\OrderNotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        function update($name, $request, $note)
        {
            if($request->has('body.'.$name)){
                $note->$name = $request->input('body.'.$name);
            }
        }

        $validator = Validator::make($request->all(),[
            'user' => 'numeric',
            'text' => '',
            'order' => 'numeric',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }

        $note = OrderNotes::find($request->id);
        if($note != null){
            $fillable = ['user', 'text', 'order'];
            foreach ($fillable as $name){
                update($name, $request, $note);
            }
            $note->save();
            return response()->json(['message' => 'Successful edit note '.$request->id], 200);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createOrderNote(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'user' => 'required|numeric',
            'text' => 'required',
            'order' => 'required|numeric',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }
        
        $note = OrderNotes::create([
            'user' => $request->user,
            'text' => $request->text,
            'order' => $request->order,
        ]);
        
        return response()->json(['message' => 'Successful added new Note'], 200);
    }
}
