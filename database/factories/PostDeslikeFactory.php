<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\PostDeslike;
use Faker\Generator as Faker;

$factory->define(PostDeslike::class, function (Faker $faker) {
    return [
        'post_id' => rand(1, 100),
        'person_id' => rand(1, 100)
    ];
});
