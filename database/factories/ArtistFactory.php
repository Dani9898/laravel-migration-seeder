<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'surname' => $faker -> name(),
        'date_of_birth' => $faker -> date(),
        'biografia' => $faker -> text(300),
        'year_of_debut' => $faker -> year(),
        'album_of_debut' => $faker -> word(),
        'vocal_style' => $faker -> word()
    ];
});
