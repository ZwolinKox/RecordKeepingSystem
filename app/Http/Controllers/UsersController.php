<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

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

    function updateUser(Request $request)
    {
        if(!$this->adminCheck() && !$this->isUserId($request->id))
            return response()->json(['error' => 'Unauthorized'], 401);

        if($request->body == null)
            return response()->json(['error' => 'Body cant be null'], 441);
        
        try
        {
            $exist = User::find($request->id);

            if($exist != null){
                $exist->update($request->body);
                return response()->json(['message' => 'Successful edit user '.$request->id], 200);
            }
        }
        catch(Illuminate\Database\QueryException $e)
        {
            return response()->json(['message' => 'Bad query '.$request->id], 404);
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
