<?php

use Illuminate\Database\Seeder;
use App\Models\PostTag;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostTag::class, 400)->create();
    }
}
