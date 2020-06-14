<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('banCheck');
    }

    function getUsers(Request $request)
    {
        return User::paginate(15);
    }

    function getUsersLight(Request $request){
        return User::all('id','name');
    }

    function getUser(Request $request)
    {
        $exist = User::find($request->id);
        if($exist != null){
            return User::find($request->id)->toJson();
        }
        return response()->json(['error' => 'Undefined id'], 401);
    }

    function searchUsers(Request $request){
        /*$list = User::query();

        if($request->name != null) {$list = $list->where('name', 'like', '%'.$request->name.'%');}
        if($request->email != null) {$list = $list->where('email', 'like', '%'.$request->email.'%');}
        if($request->phone != null) {$list = $list->where('phone', 'like', '%'.$request->phone.'%');}
        if($request->admin != null) {$list = $list->where('admin', '=', $request->admin);}
        if($request->ban != null) {$list = $list->where('ban', '=', $request->ban);}
        if($request->order != null && $request->orderType != null) {$list = $list->orderBy($request->order, $request->orderType);}
        */

        $users = User::where('name', 'LIKE', '%' . $request->name . '%')
            ->orWhere('email', 'LIKE', '%' . $request->email . '%');
        

        return $users->paginate(15);
    }

    function updateUser(Request $request)
    {
        function update($name, $request, $user)
        {
            if($request->has('body.'.$name)){
                $user->$name = $request->input('body.'.$name);
            }
        }

        if(!$this->adminCheck() && !$this->isUserId($request->id)){
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $validator = Validator::make($request->all(),[
            'body.name' => '',
            'body.email' => 'email:rfc',
            'body.phone' => '',
            'body.admin' => 'boolean',
            'body.ban' => 'boolean',
        ]);
        if($validator->fails()){
            return response()->json(['error' => 'Validation failed'], 401);
        }

        $user = User::find($request->id);
        if($user != null){
            $fillable = ['name', 'email', 'phone'];
            foreach ($fillable as $name){
                update($name, $request, $user);
            }

            if($request->has('body.admin') && $this->adminCheck()){
                $user->admin = $request->input('body.admin');
            }
            if($request->has('body.ban') && $this->adminCheck()){
                $user->ban = $request->input('body.ban');
            }
            $user->save();
            return response()->json(['message' => 'Successful edit user '.$request->id], 200);
        }

        return response()->json(['error' => 'Undefined id'], 404);
    }

    function deleteUser(Request $request)
    {
        if(!$this->adminCheck())
            return response()->json(['error' => 'Unauthorized'], 401);

        $exist = User::find($request->id);
        if($exist != null){
            $exist->delete();
            return response()->json(['message' => 'Successful delete user '.$request->id]);
        }
        return response()->json(['error' => 'Undefined id'], 404);
    }

    function passwordReset(Request $request){
        if($request->name != null && $request->email){
            $user = User::where('name', $request->name)->where('email', $request->email)->first();
            if($user != null){
                $pass = Str::random(40);
                $user->password = $pass;
                $user->save();
                Mail::send('emails.passreset', ['pass' => $pass], function ($message) {
                    $message->from('us@example.com', 'Laravel')->subject('Password reset');
                    $message->to($user->email);
                });
                return response()->json(['message' => 'Password send to your email'], 200);
            }
        }
        return response()->json(['error' => 'Unknown email or name'], 404);
    }
}
