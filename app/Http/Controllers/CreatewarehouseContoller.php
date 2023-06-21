<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateWarehouseRequest;
use App\Models\Warehouse;
class CreatewarehouseContoller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CreateWarehouseRequest $request)
    {
        $request->validated();
        $create=Warehouse::create([
        'name'=>$request->name,
        ]);
        if ($create) {
        return response()->json([
        'status'=>200,
        'message'=>'Created Successfuly'
        ],200);
        }
        }
    }
