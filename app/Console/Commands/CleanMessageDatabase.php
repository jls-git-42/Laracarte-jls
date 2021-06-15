<?php

namespace App\Console\Commands;

use App\Models\Message;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class CleanMessageDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracarte:CleanMessageDatabase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Nettoie la base Messages';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Nettoie la base Message'); // affiche une info en vert

        //code de la commande methode 1
        //Message::where('created_at','<=',Carbon::parse('3 days ago'))->delete();
        //code de la commande methode 2 via le Scope threedaysOld
        Message::threeDaysOld()->delete();

        $this->info('Base Message Nettoyée'); // affiche une info en vert
        //$this->line('Clean Messages Database'); // affiche une ligne en blanc
        //$this->error('Clean Messages Database');// affiche une erreur en rouge
        return 0;
    }
}
