<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\PostLike;
use Faker\Generator as Faker;

$factory->define(PostLike::class, function (Faker $faker) {
    return [
        'post_id' => rand(1, 100),
        'person_id' => rand(1, 100)
    ];
});
