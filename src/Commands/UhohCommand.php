<?php

namespace TheCapybaRalph\LaravelUhoh\Commands;

use Illuminate\Console\Command;
use TheCapybaRalph\LaravelUhoh\Facades\Uhoh;

class UhohCommand extends Command
{
    public $signature = 'uhoh:check';

    public $description = 'Checks your index files if it was modified or tampered with.';

    public function handle(): int
    {
        if(!config('uhoh.enabled')) return Command::FAILURE;

        $check = Uhoh::run();
        if($check) {
            $this->info('Integrity check passed');
            return Command::SUCCESS;
        }

        $this->error('Integrity check failed');
        return Command::FAILURE;
    }
}
