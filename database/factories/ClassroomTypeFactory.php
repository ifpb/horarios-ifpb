<?php

use Faker\Generator as Faker;

$factory->define(App\ClassroomType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'prefix' => $faker->word
    ];
});
