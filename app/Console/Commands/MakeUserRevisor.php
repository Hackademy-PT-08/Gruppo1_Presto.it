<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'presto:makeUserRevisor {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rendi l\'utente revisore';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user=User::where('email',$this->argument('email'))->first();

        if(!$user){
            $this->error('Utente non trovato');
            return;
        }

        $user->is_revisor=true;
        $user->save();
        $this->info("l'utente{$user->name} è ora revisore.");
    }
}
