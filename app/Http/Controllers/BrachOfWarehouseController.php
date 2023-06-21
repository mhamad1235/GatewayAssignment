<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branches;
class BrachOfWarehouseController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($warehouse_id)
    {
     $records=Branches::relatedbranch($warehouse_id);
     return response()->json([
     'status'=>200,
     'message'=>$records
     ],200);
    }
}
