<?php

use Faker\Generator as Faker;

$factory->define(App\Classroom::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'initials' => $faker->word,
        'capacity' => $faker->numberBetween(10,30),
        'classroom_type_id' => rand(1,2),
        'block_id' => function() {
            return factory(App\Block::class)->create()->id;
        }
    ];
});
