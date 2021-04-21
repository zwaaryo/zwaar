<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Link;

use Faker\Generator as Faker;


$factory->define(App\Link::class, function (Faker $faker) {
    return [
            'link' => 'http://localhost/phpmyadmin/tbl_structure.php?db=zwaar2&table=links',
            'website_number' => '0',
            'user_id' => '1'
    ];
});
