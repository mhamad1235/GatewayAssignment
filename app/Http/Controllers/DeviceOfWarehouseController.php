<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branches;
use App\Models\Device;
class DeviceOfWarehouseController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($warehouse_id)
    {
        $branch_id=[];
        $records=Branches::relatedbranch($warehouse_id);
        foreach ($records as  $value) {
        array_push($branch_id,$value->id);
        }
        $device_record=Device::whereIn('branch_id',$branch_id)->get();
        return $device_record;
        }
    }
