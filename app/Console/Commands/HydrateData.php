<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Database\Seeders\JsonSeeder;
use Illuminate\Support\Facades\Artisan;

class HydrateData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hydrate:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hydratate json data to database';

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
        Artisan::call("migrate:fresh");

        Artisan::call("db:seed", ['--class' => JsonSeeder::class]);
    }
}
