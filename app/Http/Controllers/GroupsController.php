<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GroupsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('banCheck');
    }

    function getGroup(Request $request)
    {
        return Groups::paginate(15);
    }

    function getGroups(Request $request)
    {
        $exist = Groups::find($request->id);
        if($exist != null){
            return Groups::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function searchGroups(Request $request){
        $groups = Groups::where('name', 'LIKE', '%' . $request->name . '%');
        return $groups->paginate(15);
    }

    function getGroupClients(Request $request){
        $client = Groups::find($request->id);
        if($client != null){
            return $client->clients->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function deleteGroup(Request $request)
    {
        $exist = Groups::find($request->id);
        if($exist != null){
            $exist->delete();
            return response()->json(['message' => 'Successful delete group '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function updateGroup(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'body.name' => '',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }

        $group = Groups::find($request->id);
        if($group != null){
            if($request->has('body.name')){
                $group->name = $request->input('body.name');
            }
            $group->save();
            return response()->json(['message' => 'Successful edit group '.$request->id], 200);
        }

        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createGroup(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }
        
        $group = Groups::create([
            'name' => $request->name,
        ]);
        
        return response()->json(['message' => 'Successful added new Group'], 200);
    }

    function deleteConnection(Request $request){
        $validator = Validator::make($request->all(),[
            'client' => 'required',
            'group' => 'required'
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }
        $group = Groups::find($request->group);
        if($group != null){
            $group->clients()->detach($request->client);
            return response()->json(['error' => 'Success delete client from Group'], 200);
        } else
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createConnection(Request $request){

        $validator = Validator::make($request->all(),[
            'client' => 'required',
            'group' => 'required'
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }
        //$group = Groups::find($request->group);
        $client = Clients::find($request->client);
        if($client != null){
            $client->groups()->attach($request->group);
            return response()->json(['error' => 'Success add client to Group'], 200);
        } else
            return response()->json(['error' => 'Undefined id'], 401);
    }

    function findClient(Request $request){
        if($request->id != null){
            return Groups::find($request->id)->clients()->paginate(15);
        }
    }

    function getGroupsLight(Request $request){
        return Groups::all('id','name');
    }
}
