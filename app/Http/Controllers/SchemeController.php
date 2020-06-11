<?php

namespace App\Http\Controllers;

use App\Scheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        function update($name, $request, $scheme)
        {
            if($request->has('body.'.$name)){
                $scheme->$name = $request->input('body.'.$name);
            }
        }

        if(!$this->adminCheck()){
            return response()->json(['message' => "Permission denied"], 401);  
        }

        $validator = Validator::make($request->all(),[
            'body.scheme' => '',
            'body.cycle' => 'numeric',
            'body.total_number' => 'numeric',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }

        $scheme = Scheme::find(1);
        if($scheme != null){
            $fillable = ['scheme', 'cycle', 'total_number'];
            foreach ($fillable as $name){
                update($name, $request, $scheme);
            }
            $scheme->save();
            return response()->json(['message' => 'Successful edit scheme '], 200);
        }

        return response()->json(['error' => 'Undefined id'], 401);
    }
}
