<?php

namespace App\Http\Controllers;
use League\Csv\Writer;
use Illuminate\Http\Request;
use App\Models\Device;
use Artisan;
class DeviceExportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $exitCode = Artisan::call('db:export-devices-csv');
        if ($exitCode === 0) {
        return response()->json(['message' => 'Export completed successfully']);
        }else {
        return response()->json(['message' => 'Export failed'], 500);
        }
        }
    }
