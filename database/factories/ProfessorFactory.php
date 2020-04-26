<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Teacher;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;

$idPersonTeacher = 51;

$factory->define(Teacher::class, function (Faker $faker) use (&$idPersonTeacher) {
    return [
        'person_id' => $idPersonTeacher++,
        'hour_of_class' => rand(30, 150),
        'kind_of_class' => Arr::random(['Presencial', 'Online', 'Presencial ou Online']),
        'about' => str_repeat('<p>' . $faker->text . '</p>', 10),
    ];
});
