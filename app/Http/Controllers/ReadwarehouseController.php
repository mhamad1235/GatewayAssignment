<?php

namespace App\Http\Controllers;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class ReadwarehouseController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
     $data=Warehouse::all();
     return response()->json([
        'status'=>200,
        'warehouse'=>$data
     ],200);
    }
}
