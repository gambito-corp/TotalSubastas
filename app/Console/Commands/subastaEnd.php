<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class subastaEnd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auction:end {hash : el hash de la subasta}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ejecucion de los procesos al terminar la subasta';

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


        dd($this->argument('hash'));
    }
}
