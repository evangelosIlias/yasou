<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:backup-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dbName = 'yasou';
        $username = 'root';
        $password = ''; // Leave empty for no password

        $backupPath = 'backups';
        $backupFilename = 'backup_' . date('Y-m-d_His') . '.sql';

        // Ensure the 'backups' directory exists within the 'storage/app' directory
        if (!Storage::exists($backupPath)) {
            Storage::makeDirectory($backupPath);
        }

        $command = "mysqldump --user={$username} --password={$password} {$dbName} > " . storage_path("app/{$backupPath}/{$backupFilename}");

        exec($command);

        $this->info("Database backup created: {$backupFilename}");
    }
}
