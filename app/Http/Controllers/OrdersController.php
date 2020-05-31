<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getOrders(Request $request){
        return Orders::all()->toJson();
    }

    function getOrder(Request $request)
    {
        $exist = Orders::find($request->id);
        if($exist != null){
            return Orders::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function deleteOrders(Request $request)
    {
        $exist = Orders::find($request->id);
        if($exist != null){
            $exist->delete();
            return response()->json(['message' => 'Successful delete orders '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function updateOrders(Request $request)
    {
        if($request->body == null)
            return response()->json(['error' => 'Body cant be null'], 401);
        
        try
        {
            $exist = Orders::find($request->id);

            if($exist != null){
                $exist->update(json_decode($request->body, true));
    
                return response()->json(['message' => 'Successful edit orders '.$request->id], 200);
            }
        }
        catch(Illuminate\Database\QueryException $e)
        {
            return response()->json(['message' => 'Bad query '.$request->id], 401);
        }

        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createOrders(Request $request)
    {
        if($request->name == null || $request->status == null || $request->client == null || $request->item_type == null || $request->producer == null || $request->model == null || $request->serial_number == null || $request->begin_date == null || $request->end_date == null || $request->delivery_method == null || $request->pickup_method == null || $request->estimated_price == null || $request->advance_pay == null)
            return response()->json(['error' => 'Missing required data'], 401);
        
        $order = Orders::create([
            'name' => $request->name,
            'status' => $request->status,
            'created_by' => auth()->user()->id,
            'assigned' => $request->assigned,
            'client' => $request->client,
            'item_type' => $request->item_type,
            'producer' => $request->producer,
            'model' => $request->model,
            'serial_number' => $request->serial_number,
            'buy_date' => $request->buy_date,
            'warranty_number' => $request->warranty_number,
            'begin_date' => $request->begin_date,
            'end_date' => $request->end_date,
            'info' => $request->info,
            'issue' => $request->issue,
            'delivery_method' => $request->delivery_method,
            'pickup_method' => $request->pickup_method,
            'estimated_price' => $request->estimated_price,
            'advance_pay' => $request->advance_pay,
        ]);
        
        return response()->json(['message' => 'Successful added new Client'], 200);
    }
}
