<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateScope extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:scope {scopeName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used for creating global scopes';

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
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
