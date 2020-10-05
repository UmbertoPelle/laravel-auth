<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Location;

use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [

      'state'=> $faker -> state(),
      'city'=> $faker -> city(),
      'street'=> $faker -> streetAddress()
    ];
});
