<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Student;
use Faker\Generator as Faker;

$idPersonStudent = 1;

$factory->define(Student::class, function (Faker $faker) use (&$idPersonStudent) {
    return [
        'person_id' => $idPersonStudent++
    ];
});
