<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Forum;
use Faker\Generator as Faker;

$factory->define(Forum::class, function (Faker $faker) {
    return [
        'student_id' => rand(1, 50),
        'category_id' => rand(1, 54),
        'subject' => Str::random(15),
        'question' => $faker->text,
        'complement' => $faker->text
    ];
});
