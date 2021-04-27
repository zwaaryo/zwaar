<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Link;
 class Links extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $links =  Link::where('website_number' , 1)->get();
        foreach($links as $link){
            $link->update(['website_number' => 0]);
        }
    }
}
