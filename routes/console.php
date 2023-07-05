<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('database:backup', function () {
    $this->info("Backuping data!");
})->purpose('Backup data for kodemaya database');

Artisan::command('database:restore', function () {
    $this->info("Restoring data!");
})->purpose('Restore data for kodemaya database');

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');