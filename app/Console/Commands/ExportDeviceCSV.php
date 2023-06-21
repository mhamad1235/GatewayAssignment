<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
class ExportDeviceCSV extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:export-devices-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the devices table as CSV';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tableName = 'devices';
        $fileName = 'devices_export_' . date('Ymd_His') . '.csv';
        $filePath = storage_path('app/' . $fileName);
        $devices = DB::table($tableName)->get();
        $file = fopen($filePath, 'w');
        fputcsv($file, array_keys((array) $devices->first()));
        foreach ($devices as $device) {
            fputcsv($file, (array) $device);
        }
        fclose($file);
        $this->info('Table exported successfully as CSV!');
        $this->info('File path: ' . $filePath);
    }
}
