<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\Message;

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

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// ici la commande artisan est definie dans App\Console\Commands ClanMessageDtabase.php
/*Artisan::command('laracarte:CleanMessageDatabase', function () {
        $this->info('Nettoie la base Message');
        Message::threeDaysOld()->delete();
        $this->info('Base Message Nettoyée');
})->purpose('Nettoie la base Messages');*/