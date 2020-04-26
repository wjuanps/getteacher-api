<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\OfferedClass;
use Faker\Generator as Faker;

$factory->define(OfferedClass::class, function (Faker $faker) {
    return [
        'teacher_id' => rand(1, 50),
        'category_id' => rand(1, 54),
        'specialty' => Str::random(15)
    ];
});
