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
        return ItemTypes::all()->toJson();
    }
}
