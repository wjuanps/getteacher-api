<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\PostTag;
use Faker\Generator as Faker;

$factory->define(PostTag::class, function (Faker $faker) {
    return [
        'post_id' => rand(1, 100),
        'tag' => Arr::random([
            'Web', 'Photography', 'Css', 'Responsive', 'Wordpress', 
            'Html', 'Website', 'Business', 'Java', 'PHP', 'Python', 
            'C++', 'C#', 'Música', 'JavaScript', 'Filme', 'Série'
        ])
    ];
});
