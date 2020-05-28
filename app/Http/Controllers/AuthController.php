<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{
    public $loginAfterSignUp = true;

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
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
            'admin' => false,
          ]);
    
          $token = auth()->login($user);
    
          return $this->respondWithToken($token);
        }
        return response()->json(['error' => 'Registration failed'], 401);
      }
      return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function login(Request $request)
    {
      $credentials = $request->only(['email', 'password']);

      if (!$token = auth()->attempt($credentials)) {
        return response()->json(['error' => 'Unauthorized'], 401);
      }

      return $this->respondWithToken($token);
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
    protected function respondWithToken($token)
    {
      return response()->json([
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth()->factory()->getTTL() * 60
      ]);
    }

    protected function respondToFailRegistration($success)
    {
      return response()->json([
        'regestration_successs' => $success,
      ]);
    }
}