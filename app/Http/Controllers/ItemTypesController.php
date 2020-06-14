<?php

namespace App\Http\Controllers;

use App\ItemTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemTypesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('banCheck');
    }

    public function getItemTypes(Request $request){
        return ItemTypes::paginate(15);
    }

    function getItemTypesLight(Request $request){
        return ItemTypes::all('id','name');
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
        $validator = Validator::make($request->all(),[
            'client' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }
        
        $itemtype = ItemTypes::create([
            'name' => $request->name,
        ]);
        
        return response()->json(['message' => 'Successful added new ItemTypes'], 200);
    }
}
