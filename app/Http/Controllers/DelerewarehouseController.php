<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Warehouse;
class DelerewarehouseController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $record=Warehouse::find($id);
        if ($record->delete()) {
        return response()->json([
        'ststus'=>200,
        'message'=>'Deleted Successfuly'
         ],200);
         }
         }
    }
