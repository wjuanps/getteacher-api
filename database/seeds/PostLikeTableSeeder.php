<?php

use Illuminate\Database\Seeder;
use App\Models\PostLike;

class PostLikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostLike::class, 100)->create();
    }
}
