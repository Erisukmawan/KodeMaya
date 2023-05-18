<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DatabaseRestore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:restore {file?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Restore a database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = $this->argument('file');

        if (!$filename) {
            $filename = 'db_kodemaya.sql';
        }

        $command = "mysql --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE') . " < " . storage_path() . "/backup/" . $filename;
        $returnVar = NULL;
        $output  = NULL;
  
        exec($command, $output, $returnVar);
    }
}
