<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Orders;
use App\Http\Controllers\Helpers\SchemesController;
use App\ItemTypes;
use App\OrderFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;

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
            return  Orders::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function getOrderStatuses(Request $request)
    {
        $order = Orders::find($request->id);
        if($order != null){
            return  $order->statuses->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function getClientNotes(Request $request){
        $order = Orders::find($request->id);
        if($order != null){
            return $order->orderNotesRelation->toJson();
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

    function searchOrders(Request $request){
        $orders;

        if($request->myOrder != null && $request->myOrder) {

            $orders = Orders::where('assigned', "=" ,auth()->user()->id)
            ->where('name', 'LIKE', '%' . $request->name . '%')
            ->orWhere('model', 'LIKE', '%' . $request->model . '%')
            ->orWhere('client', 'LIKE', '%' . $request->client . '%');
        } else {
            $orders = Orders::where('name', 'LIKE', '%' . $request->name . '%')
            ->orWhere('model', 'LIKE', '%' . $request->model . '%')
            ->orWhere('client', 'LIKE', '%' . $request->client . '%');
        }

        return $orders->paginate(15);
    }

    function updateOrders(Request $request)
    {
        function update($name, $request, $order)
        {
            if($request->has('body.'.$name)){
                $order->$name = $request->input('body.'.$name);
            }
        }

        $validator = Validator::make($request->all(),[
            'assigned' => 'numeric',
            'client' => 'numeric',
            'item_type' => 'numeric',
            'producer' => '',
            'model' => '',
            'serial_number' => '',
            'buy_date' => '',
            'warranty_number' => '',
            'begin_date' => '',
            'end_date' => '',
            'info' => '',
            'issue' => '',
            'delivery_method' => 'numeric|between:0,2',
            'pickup_method' => 'numeric|between:0,2',
            'estimated_price' => '',
            'advance_pay' => '',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }

        $order = Orders::find($request->id);
        if($order != null){
            $fillable = ['assigned', 'client', 'item_type', 'producer', 'model', 'serial_number', 'buy_date', 'warranty_number', 'begin_date', 'end_date', 'info', 'issue', 'delivery_method', 'pickup_method', 'estimated_price', 'advance_pay'];
            foreach ($fillable as $name){
                update($name, $request, $order);
            }
            $order->save();
            return response()->json(['message' => 'Successful edit orders '.$request->id], 200);
        }

        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createOrders(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'assigned' => 'numeric',
            'client' => 'required|numeric',
            'item_type' => 'numeric',
            'producer' => 'required',
            'model' => 'required',
            'serial_number' => 'required',
            'buy_date' => '',
            'warranty_number' => '',
            'begin_date' => 'required',
            'end_date' => 'required',
            'info' => '',
            'issue' => '',
            'delivery_method' => 'required|numeric|between:1,3',
            'pickup_method' => 'required|numeric|between:1,3',
            'estimated_price' => '',
            'advance_pay' => '',
            'new_item_type' => ''
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'.$validator->messages()], 401);
        }

        if($request->item_type == null && $request->new_item_type){
            $new = ItemTypes::create([
                'name' => $request->new_item_type
            ]);
            $request->item_type = $new->id;
        }
        
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

    function createStatus(Request $request){
        $validator = Validator::make($request->all(),[
            'status' => 'between:1,15',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }

        $order = Orders::find($request->id);
        if($order != null){
            $order->statuses()->create([
                'status' => $request->status,
                'created_by' => auth()->user()->id,
                'date' => Carbon::now(),
            ]);
            $order->save();
            return response()->json(['message' => 'Successful added new status'], 200);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function fileUpload(Request $request){

        $order = Orders::find($request->id);

<<<<<<< HEAD
        //return response()->json(['error' => $request->hasFile('file')], 401);
=======
>>>>>>> ea0256d1a9fd7f18e694f4684426d96b8ead4c01
        if($order != null){
            if($request->file('file') != null){
                $path = Storage::putFile('orders', $request->file('file'));
                $order->filesRelation()->create([
                    'path' => $path,
                    'name' => $request->file('file')->getClientOriginalName(),
                ]);
                return response()->json(['message' => 'Successful added new file'], 200);
            } else {
                return response()->json(['error' => 'File cant be null'], 401);
            }
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function fileDownload(Request $request){

        $file = OrderFiles::find($request->id);
        if($file != null){
            return Storage::download($file->path, $file->name);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }
}
