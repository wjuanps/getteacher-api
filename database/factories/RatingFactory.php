<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Rating;
use Faker\Generator as Faker;

$factory->define(Rating::class, function (Faker $faker) {
    return [
        'teacher_id' => rand(1, 50),
        'student_id' => rand(1, 50),
        'comment' => $faker->text,
        'didactic' => rand(1, 5),
        'sympathy' => rand(1, 5),
        'knowledge' => rand(1, 5)
    ];
});
