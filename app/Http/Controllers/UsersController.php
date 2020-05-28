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
}
