<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Orders;
use App\Http\Controllers\Helpers\SchemesController;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('banCheck');
    }

    public function getOrders(Request $request){
        return Orders::paginate(15);
    }

    function getOrder(Request $request)
    {
        $exist = Orders::find($request->id);
        if($exist != null){
            $data = Orders::find($request->id);
            $data->status = Orders::find($request->id)->status();
            return $data->toJson();
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
        if($request->client == null || $request->item_type == null || $request->producer == null || $request->model == null || $request->serial_number == null || $request->begin_date == null || $request->end_date == null || $request->delivery_method == null || $request->pickup_method == null)
            return response()->json(['error' => 'Missing required data'], 401);
        
        $order = Orders::create([
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
        $order->name = SchemesController::parser($order->id);
        $order->statuses()->create([
            'status' => 1,
            'created_by' => $order->created_by,
            'date' => Carbon::now(),
        ]);
        $order->save();

        return response()->json(['message' => 'Successful added new Order'], 200);
    }
}
