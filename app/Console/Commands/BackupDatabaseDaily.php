<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BackupDatabaseDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $database = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $backupPath = storage_path('app/backup.sql');
        $command = "mysqldump --user={$username} --password={$password} {$database} > {$backupPath}";
        exec($command);
        $this->info('Database backup created successfully at: ' . $backupPath);
    }
}
