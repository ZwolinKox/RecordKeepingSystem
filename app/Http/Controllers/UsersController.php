<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    function getUsers(Request $request)
    {
        return User::all()->toJson();
    }

    function getUser(Request $request)
    {
        $exist = User::find($request->id);
        if($exist != null){
            return User::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function updateUser(Request $request)
    {
        if($request->body == null)
            return response()->json(['error' => 'body cant be null'], 401);
        
        try
        {
            $exist = User::find($request->id);

            if($exist != null){
                $exist->update(json_decode($request->body, true));
    
                return response()->json(['message' => 'Successful edit user '.$request->id], 200);
            }
        }
        catch(Illuminate\Database\QueryException $e)
        {
            return response()->json(['message' => 'Bad query '.$request->id], 401);
        }

        return response()->json(['error' => 'Undefined id'], 401);
    }

    function deleteUser(Request $request)
    {
        $exist = User::find($request->id);
        if($exist != null){
            $exist->delete();
            return response()->json(['message' => 'Succesful delete user '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }
}
