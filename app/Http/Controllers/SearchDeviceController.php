<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use DB;
class SearchDeviceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if ($request->q) {
            $searchTerm=$request->q;
            $results = DB::table('devices')
            ->where('serial_number', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('Mac_address', 'LIKE', '%' . $searchTerm . '%')
            ->get();
        }
        return response()->json([
        'status'=>200,
        'message'=>$results
        ],200);
        }
    }
