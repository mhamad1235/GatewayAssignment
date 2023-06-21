<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Mail\YourEmailClass;
use Illuminate\Support\Facades\Mail;
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('backup:database')->daily();
    }

    /**
     * Register the commands for the application.
     */
     protected $commands=[
        Commands\ExportDatabase::class,
        Commands\ExportDeviceJson::class,
        Commands\ExportDeviceCSV::class,
        Commands\BackupDatabaseDaily::class,
     ];
}
