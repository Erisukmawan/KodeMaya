<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class DatabaseBackUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename_main = "db_kodemaya" . ".sql";
        $command_main = "mysqldump --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " --no-create-info --ignore-table=". env('DB_DATABASE') .".migrations " . env('DB_DATABASE') . " > " . storage_path() . "/backup/" . $filename_main;
        
        $filename = "kodemaya-backup-" . Carbon::now()->format('Y-m-d') . ".sql";
        $command = "mysqldump --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " --no-create-info --ignore-table=". env('DB_DATABASE') .".migrations " . env('DB_DATABASE') . " > " . storage_path() . "/backup/" . $filename;
        
        $returnVar = NULL;
        $output  = NULL;
  
        exec($command_main, $output, $returnVar);
        exec($command, $output, $returnVar);
    }
}
