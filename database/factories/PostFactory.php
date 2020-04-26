<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'teacher_id' => rand(1, 50),
        'title' => Str::title(str_replace('-', ' ', $faker->unique()->slug)),
        'slug' => $faker->unique()->slug,
        'body' => str_repeat('<p>' . $faker->text . '</p>', 50),
        'field' => $faker->title,
        'category' => $faker->title,
        'status' => Arr::random(['Aguardando', 'Aprovado', 'Reprovado'])
    ];
});
