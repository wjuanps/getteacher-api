<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\TeacherDegree;
use Faker\Generator as Faker;

$factory->define(TeacherDegree::class, function (Faker $faker) {
    return [
        'teacher_id' => rand(1, 50),
        'degree' => Str::random(10),
        'intitution' => Str::random(10),
        'course' => Str::random(10),
        'year_of_start' => rand(1970, 2100),
        'year_of_end' => rand(1970, 2100)
    ];
});
