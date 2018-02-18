<?php

$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "surname" => $faker->name,
        "date" => $faker->date("Y-m-d H:i:s", $max = 'now'),
        "adress" => $faker->name,
        "phone_number" => $faker->randomNumber(2),
    ];
});
