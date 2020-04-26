<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Person;
use Faker\Generator as Faker;

$i = 1;

$factory->define(Person::class, function (Faker $faker) use (&$i) {
    return [
        'user_id' => rand(1, 50),
        'address_id' => $i,
        'type' => (($i++ <= 50) ? 'S' : 'T'),
        'cpf' => Str::random(10),
        'identifier' => Str::random(10),
        'gender' => Arr::random(['Undefined', 'Male', 'Female']),
        'photo' => Arr::random([
                        '1ad120b662fd3f2500448dcff30fe79c', '2bd6d19e2a93e7f9536d7e6c39521c66', '03d866a47a41074239defdcaa7e646b7',
                        '8cde69754f3d43180d4d3af3e2003ed2', '18d4705ac40be73c7946c0c223656a54', '18d4705ac40be73c7946c0c223656a54',
                        '145a08b0cff43135dba18cbe339cb5bb', '752b5c66b8d490df368488db0f774dd6', '876c9d39eb654c10222906baf2d2ee4a',
                        'c49fa44023516b8c7508147dd30a00f2', 'ea9d36f841611ce05823f114c0b12ca1', 'f513f6e0f2e892a659901150b256a921',
                        'f6692d73c4218875899d81c6c33a0f2d', null
                    ]),
        'name' => $faker->name
    ];
});
