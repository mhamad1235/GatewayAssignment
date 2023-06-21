<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = Auth::user();
        $user->tokens()->delete();
        Auth::logout();
        return response()->json(['message' => 'Logged out'], 200);
    }
}
