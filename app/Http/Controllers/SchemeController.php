<?php

namespace App\Http\Controllers;

use App\Scheme;
use Illuminate\Http\Request;

class SchemeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('banCheck');
    }


    function getScheme(Request $request)
    {
        $exist = Scheme::find(1);
        if($exist != null){
            return Scheme::find(1)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function updateScheme(Request $request)
    {        
        if(!$this->adminCheck())
            return response()->json(['message' => "Permission denied"], 401);

        if($request->body == null)
            return response()->json(['error' => 'Body cant be null'], 401);
        
        try
        {
            $exist = Scheme::find(1);

            if($exist != null){
                $exist->update($request->body);
                return response()->json(['message' => 'Successful edit scheme '], 200);
            }
        }
        catch(Illuminate\Database\QueryException $e)
        {
            return response()->json(['message' => 'Bad query '.$request->id], 401);
        }

        return response()->json(['error' => 'Undefined id'], 401);
    }
}
