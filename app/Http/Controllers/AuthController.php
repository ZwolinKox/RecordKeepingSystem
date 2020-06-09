<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{
    public $loginAfterSignUp = true;

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
        $this->middleware('banCheck');
    }

    public function register(Request $request)
    {
      if($this->adminCheck()){
        $taken = User::where('email', $request->email)->first();
        if($taken == null){
          $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'admin' =>  $request->admin,
          ]);
    
          $token = auth()->login($user);
    
          return $this->respondWithToken($token);
        }
        return response()->json(['error' => 'Registration failed'], 401);
      }
      return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function changePassword(Request $request)
    {
        $id = auth()->user()->id;

        if($request->password == null)
            return response()->json(['error' => 'Password cant be null'], 441);
        
        try
        {
            $exist = User::find($id);

            if($exist != null){

              if(!Hash::check($request->oldPassword, $exist->password)) {
                return response()->json(['message' => 'Bad old password'], 401);
              }

                $exist->password = bcrypt($request->password);
                $exist->save();
                return response()->json(['message' => 'Successful change password user '.$id], 200);
            }
        }
        catch(Illuminate\Database\QueryException $e)
        {
            return response()->json(['message' => 'Bad query '.$id], 404);
        }

        return response()->json(['error' => 'Undefined id'], 404);
    }


    public function login(Request $request)
    {
      $credentials = $request->only(['email', 'password']);

      if (!$token = auth()->attempt($credentials)) {
        return response()->json(['error' => 'Unauthorized'], 401);
      }
      if (auth()->user()->ban){
        return response()->json(['error' => 'Baned'], 401);
      }

      return $this->respondWithToken($token, auth()->user()->admin);
    }
    public function getAuthUser(Request $request)
    {
        return response()->json(auth()->user());
    }
    public function logout()
    {
        auth()->logout();
        return response()->json(['message'=>'Successfully logged out']);
    }
    protected function respondWithToken($token, $admin=false)
    {
      return response()->json([
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth()->factory()->getTTL() * 60,
        'admin' => $admin
      ]);
    }

    protected function respondToFailRegistration($success)
    {
      return response()->json([
        'regestration_successs' => $success,
      ]);
    }
}