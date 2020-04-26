<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\PostComment;
use Faker\Generator as Faker;

$factory->define(PostComment::class, function (Faker $faker) {
    return [
        'post_id' => rand(1, 100),
        'person_id' => rand(1, 100),
        'comment' => $faker->text
    ];
});
