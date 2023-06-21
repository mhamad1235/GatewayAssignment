<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
use Hash;
class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
       $request->validated();
       $credentials = $request->only('email', 'password');

       if (Auth::attempt($credentials)) {
       $user = $request->user();
       $token = $user->createToken('token-name')->plainTextToken;
       return response()->json(['token' => $token], 200);
       }

       return response()->json(['message' => 'Unauthorized'], 401);

       }
    }
