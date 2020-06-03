<?php

namespace App\Http\Controllers;

use App\ItemTypes;
use Illuminate\Http\Request;

class ItemTypesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getItemTypes(Request $request){
        return ItemTypes::paginate(15);
    }

    function deleteItemTypes(Request $request)
    {
        $exist = ItemTypes::find($request->id);
        if($exist != null){
            $exist->delete();
            return response()->json(['message' => 'Successful delete ItemTypes '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    public function createItemTypes(Request $request)
    {
        if($request->name == null)
            return response()->json(['error' => 'Missing required data'], 401);
        
        $order = ItemTypes::create([
            'name' => $request->name,
        ]);
        
        return response()->json(['message' => 'Successful added new ItemTypes'], 200);
    }
}
