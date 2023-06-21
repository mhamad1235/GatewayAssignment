<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Http\Requests\UpdatewarehouseRequest;
class UpdatewarehouseController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdatewarehouseRequest $request,$id)
    {
        $request->validated();
        $find_record=Warehouse::find($id);
        $record_update=$find_record->update([
        'name'=>$request->name,
        ]);
         if ($record_update) {
         return response()->json([
         'status'=>200,
         'message'=>'Updated Successfuly'
          ],200);
          }
          }
    }
