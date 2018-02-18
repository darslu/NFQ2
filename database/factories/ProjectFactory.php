<?php

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        "book" => $faker->name,
        "author" => $faker->name,
        "genre" => $faker->name,
        "date" => $faker->date("Y-m-d", $max = 'now'),
    ];
});
