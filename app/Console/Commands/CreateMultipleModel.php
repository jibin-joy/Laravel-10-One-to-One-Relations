<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateMultipleModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:models {modelNames*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create multiple models with a single command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $modelNames = $this->argument('modelNames');

        foreach ($modelNames as $modelName) {
            $this->call('make:model', ['name' => $modelName]);
            $this->info("Model '$modelName' created successfully!");
        }

        $this->info('Multiple models created successfully!');
    }
}
