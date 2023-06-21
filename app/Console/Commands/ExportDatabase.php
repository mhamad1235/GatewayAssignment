<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
    $databaseName = config('database.connections.mysql.database');
    $username = config('database.connections.mysql.username');
    $password = config('database.connections.mysql.password');
    $fileName = 'database_backup_' . date('Ymd_His') . '.sql';
    $filePath = storage_path('app/' . $fileName);
    $command = sprintf(
        'mysqldump -u%s -p%s %s > %s',
        $username,
        $password,
        $databaseName,
        $filePath
    );
    exec($command);
    $this->info('Database exported successfully!');
    $this->info('File path: ' . $filePath);
    }
}
