<?php

use Illuminate\Database\Seeder;
use App\Models\PostDeslike;

class PostDeslikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostDeslike::class, 100)->create();
    }
}
