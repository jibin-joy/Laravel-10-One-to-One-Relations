<?php

namespace App\Console\Commands;

use Faker\Guesser\Name;
use Illuminate\Console\Command;

class CreateMultipleMigrations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:migrations {migrationNames*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create multiple migrations with a single command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $migrationNames = $this->argument('migrationNames');

        foreach ($migrationNames as $migrationName)
        {
            $this->call('make:migration',['name'=> $migrationName]);
            $this->info("Migration '$migrationName' created Successfully ");
        }

        $this->info('Multiple Migrations created Successfully!!!');
    }
}
