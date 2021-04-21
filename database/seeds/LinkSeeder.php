<?php

use Illuminate\Database\Seeder;
use App\Link;
 class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       // factory(\App\Link::class, 3)->create();
          link::create([
            'link' => 'http://localhost/phpmyadmin/tbl_structure.php?db=zwaar2&table=links',
            'website_number' => '0',
            'user_id' => '1'
        ]);
 
    }
}
