<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'date_of_pubblication' => $faker -> date(),
        'sales' => $faker -> numberBetween(0, 100000),
        'numer_of_tracks' => $faker ->numberBetween(1, 25),
        'total_duration' => $faker -> numberBetween(0, 15000),
        'vocal_style' => $faker -> word()
    ];
});
