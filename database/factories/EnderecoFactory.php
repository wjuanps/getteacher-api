<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Address;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'neighborhood' => Str::random(10),
        'city' => Str::random(10),
        'state' => Str::upper(Str::random(2)),
        'street' => Str::random(10)
    ];
});
