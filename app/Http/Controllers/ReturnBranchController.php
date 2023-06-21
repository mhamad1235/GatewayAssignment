<?php

namespace App\Http\Controllers;
use App\Models\Branches;
use Illuminate\Http\Request;

class ReturnBranchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
       $record=Branches::find($id);
       return response()->json([
       'status'=>200,
       'message'=>$record,
        ],200);
        }
    }
