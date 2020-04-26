<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\ForumAnswer;
use Faker\Generator as Faker;

$factory->define(ForumAnswer::class, function (Faker $faker) {
    return [
        'forum_id' => rand(1, 50),
        'teacher_id' => rand(1, 50),
        'answer' => $faker->text
    ];
});
