<?php

use Illuminate\Database\Seeder;
use App\Link;
 class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(LinkSeeder::class);
        factory(Link::class , 10000)->create();
     }
}


