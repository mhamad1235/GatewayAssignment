<?php

namespace App\Http\Controllers;
use App\Mail\YourEmailClass;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\ChangeStatusRequest;
use App\Models\Device;
use App\Models\User;
class StatusChangeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($device_id,ChangeStatusRequest $request)
    {
     $Admin_mail=User::where('isAdmin','1');
     $request->validated();
     $record=Device::find($device_id);
     $record_update=$record->update([
        'status'=>$request->status
     ]);
    if ($record_update) {
    return response()->json([
    'status'=>200,
    'message'=>'Change Status Successfuly'
    ],200);
    Mail::to($Admin_mail)->send(new YourMailable());
    }
    }
}
