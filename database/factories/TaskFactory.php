<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Task;

use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [

      'name' => $faker -> word(),
      'description' => $faker -> sentence(),
      'date_start' => $faker -> date(),
      'date_end' => $faker -> date()
    ];
});
