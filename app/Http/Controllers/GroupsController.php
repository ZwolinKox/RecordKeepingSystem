<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    function getGroup(Request $request)
    {
        return Groups::all()->toJson();
    }

    function getGroups(Request $request)
    {
        $exist = Groups::find($request->id);
        if($exist != null){
            return Groups::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createGroup(Request $request)
    {
        if($request->name == null)
            return response()->json(['error' => 'Groups name cant be null null'], 401);
        
        $user = Groups::create([
            'name' => $request->name,
        ]);
        
        return response()->json(['message' => 'Successful added new Group'], 200);
    }
}
