<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Scout\Searchable;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('banCheck');
    }

    function getClients(Request $request)
    {
        return Clients::paginate(15);
    }

    function getClientsLight(Request $request){
        return Clients::all('id','name', 'phone1');
    }

    function getClientGroups(Request $request){
        $client = Clients::find($request->id);
        if($client != null){
            return $client->groups->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function searchClients(Request $request){
        //$list = Clients::query();

        /*
        if($request->name != null) {$list = $list->where('name', 'like', '%'.$request->name.'%');}
        if($request->private != null) {$list = $list->where('private', '=', $request->private);}
        if($request->phone1 != null) {$list = $list->where('phone1', 'like', '%'.$request->phone1.'%');}
        if($request->phone2 != null) {$list = $list->where('phone2', 'like', '%'.$request->phone2.'%');}
        if($request->email1 != null) {$list = $list->where('email1', 'like', '%'.$request->email1.'%');}
        if($request->email2 != null) {$list = $list->where('email2', 'like', '%'.$request->email2.'%');}
        if($request->address != null) {$list = $list->where('address', 'like', '%'.$request->address.'%');}
        if($request->send_sms != null) {$list = $list->where('send_sms', '=', $request->send_sms);}
        if($request->send_email != null) {$list = $list->where('send_email', '=', $request->send_email);}
        if($request->order != null && $request->orderType != null) {$list = $list->orderBy($request->order, $request->orderType);}
        */ //Rozwiązanie bardziej zaawansowane, zostawiam na wypadek zmiany

        $client = Clients::where('name', 'LIKE', '%' . $request->name . '%')
        ->orWhere('phone1', 'LIKE', '%' . $request->phone1 . '%')
        ->orWhere('email1', 'LIKE', '%' . $request->email1 . '%');

        return $client->paginate(15);
    }

    function getClient(Request $request)
    {
        $exist = Clients::find($request->id);
        if($exist != null){
            return Clients::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function deleteClient(Request $request)
    {
        $exist = Clients::find($request->id);
        if($exist != null){
            $exist->delete();
            return response()->json(['message' => 'Successful delete client '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function updateClient(Request $request)
    {
        function update($name, $request, $client)
        {
            if($request->has('body.'.$name)){
                $client->$name = $request->input('body.'.$name);
            }
        }

        $validator = Validator::make($request->all(),[
            'name' => '',
            'private' => 'boolean',
            'phone1' => 'numeric',
            'phone2' => 'numeric',
            'email1' => 'email:rfc',
            'email2' => 'email:rfc',
            'address' => '',
            'send_sms' => 'boolean',
            'send_email' => 'boolean',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }

        $client = Clients::find($request->id);
        if($client != null){
            $fillable = ['name', 'private', 'phone1', 'phone2', 'email1', 'email2', 'address', 'send_sms', 'send_email'];
            foreach ($fillable as $name){
                update($name, $request, $client);
            }
            $client->save();
            return response()->json(['message' => 'Successful edit client '.$request->id], 200);
        }

        return response()->json(['error' => 'Undefined id'], 401);
    }

    function createClient(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'private' => 'required|boolean',
            'phone1' => 'numeric',
            'phone2' => 'numeric',
            'email1' => 'email:rfc',
            'email2' => 'email:rfc',
            'address' => '',
            'send_sms' => 'required|boolean',
            'send_email' => 'required|boolean',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }

        $user = Clients::create([
            'name' => $request->name,
            'private' => $request->private,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email1' => $request->email1,
            'email2' => $request->email2,
            'address' => $request->address,
            'send_sms' => $request->send_sms,
            'send_email' => $request->send_email,
        ]);
        
        return response()->json(['message' => 'Successful added new Client'], 200);
    }
}
