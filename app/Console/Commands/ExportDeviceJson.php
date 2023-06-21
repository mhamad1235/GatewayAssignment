<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
class ExportDeviceJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:export-device-json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the Table';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $tableName = 'devices';
        $fileName = 'devices_export_' . date('Ymd_His') . '.json';
        $filePath = storage_path('app/' . $fileName);
        $devices = DB::table($tableName)->get();
        file_put_contents($filePath, json_encode($devices));
        $this->info('Table exported successfully as JSON!');
        $this->info('File path: ' . $filePath);
    }
}
